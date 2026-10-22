# frozen_string_literal: true

require 'test_helper'
require 'fileutils'

class SecurityTest < ActionDispatch::IntegrationTest
  test 'login page posts credentials with a CSRF token' do
    ActionController::Base.allow_forgery_protection = true
    get account_login_path
    assert_response :success
    assert_select 'form[action="/account/login"][method="post"]'
    assert_select 'input[name="authenticity_token"]'
    post account_login_path, params: { login: { email: users(:one).email, password: 'correct-password' } }
    assert_response :unprocessable_entity
  ensure
    ActionController::Base.allow_forgery_protection = false
  end

  test 'GET cannot authenticate or register even with credentials' do
    get account_login_path, params: { login: { email: users(:one).email, password: 'correct-password' } }
    get account_start_path
    assert_redirected_to account_login_path
    assert_no_difference('User.count') do
      get account_new_path, params: { user: { email: 'new@example.org', password: 'correct-password' } }
    end
  end

  test 'login validates the password and logout invalidates the session' do
    post account_login_path, params: { login: { email: users(:one).email, password: 'wrong' } }
    assert_response :unprocessable_entity
    sign_in
    get account_start_path
    assert_response :success
    delete account_logou_path
    get account_start_path
    assert_redirected_to account_login_path
  end

  test 'repeated authentication failures are rate limited' do
    10.times do
      post account_login_path, params: { login: { email: users(:one).email, password: 'wrong' } }
      assert_response :unprocessable_entity
    end
    post account_login_path, params: { login: { email: users(:one).email, password: 'wrong' } }
    assert_response :too_many_requests
  end

  test 'owner can update and delete their camera' do
    sign_in
    camera = cameras(:one)
    patch config_path(camera), params: { camera: { name: 'Renamed' } }
    assert_redirected_to config_path(camera)
    assert_equal 'Renamed', camera.reload.name
    assert_difference('Camera.count', -1) { delete config_path(camera) }
  end

  test 'registration hashes the password and cannot grant admin' do
    assert_difference('User.count') do
      post account_new_path, params: { user: { email: 'new@example.org', password: 'correct-password', role: 'admin' } }
    end
    user = User.find_by!(email: 'new@example.org')
    assert user.authenticate('correct-password')
    refute user.admin?
    refute_equal 'correct-password', user.password_digest
    assert_redirected_to new_config_path
  end

  test 'short passwords cannot register' do
    assert_no_difference('User.count') do
      post account_new_path, params: { user: { email: 'new@example.org', password: 'short' } }
    end
    assert_response :unprocessable_entity
  end

  test 'all camera and catalog actions require login' do
    [config_index_path, new_config_path, config_path(cameras(:one)), record_index_path, live_path, play_path, links_path, producer_index_path].each do |path|
      get path
      assert_redirected_to account_login_path
    end
    [[:post, config_index_path], [:patch, config_path(cameras(:one))], [:delete, config_path(cameras(:one))], [:patch, record_path(cameras(:one))], [:delete, record_path(cameras(:one))]].each do |verb, path|
      public_send(verb, path)
      assert_redirected_to account_login_path
    end
  end

  test 'owners cannot read edit delete or record another users camera' do
    sign_in
    camera = cameras(:two)
    [config_path(camera), live_path(id: camera.id), play_path(id: camera.id), record_path(camera)].each do |path|
      get path
      assert_response :not_found
    end
    patch config_path(camera), params: { camera: { name: 'changed' } }
    assert_response :not_found
    assert_no_difference('Camera.count') { delete config_path(camera) }
    assert_response :not_found
    patch record_path(camera)
    assert_response :not_found
    delete record_path(camera)
    assert_response :not_found
    assert_equal 'Other camera', camera.reload.name
  end

  test 'camera creation assigns the logged in owner' do
    sign_in
    post config_index_path, params: { camera: { name: 'New camera', link: '192.168.1.10', port: 8080, user_id: users(:two).id } }
    camera = Camera.order(:id).last
    assert_equal users(:one), camera.user
    assert_redirected_to config_path(camera)
  end

  test 'regular users can read catalog but cannot change it' do
    sign_in(users(:two))
    get links_path
    assert_response :success
    get producer_index_path
    assert_response :success
    post links_path, params: { link: { model: 'changed' } }
    assert_response :forbidden
    patch link_path(links(:one)), params: { link: { model: 'changed' } }
    assert_response :forbidden
    delete link_path(links(:one))
    assert_response :forbidden
    post producer_index_path, params: { producer: { producer: 'changed' } }
    assert_response :forbidden
    delete producer_path(producers(:one))
    assert_response :forbidden
  end

  test 'admin can maintain the catalog' do
    sign_in
    post links_path, params: { link: { model: 'new', producer_id: producers(:one).id, link: '/stream' } }
    assert_redirected_to link_path(Link.order(:id).last)
    patch link_path(links(:one)), params: { link: { model: 'changed' } }
    assert_equal 'changed', links(:one).reload.model
  end

  test 'camera views render on modern Rails' do
    sign_in
    [root_path, mycam_main_path, mycam_record_path, play_path, config_path(cameras(:one)), new_config_path, record_path(cameras(:one)), links_path, new_link_path, edit_link_path(links(:one)), link_path(links(:one)), new_producer_path, producer_index_path].each do |path|
      get path
      assert_response :success, path
    end
  end

  test 'recordings are private and cannot be traversed' do
    camera = cameras(:one)
    FileUtils.mkdir_p(camera.recordings_directory)
    file = camera.recordings_directory.join('20261022-120000.mp4')
    file.write('private video')
    path = camera_video_path(id: camera.id, filename: file.basename.to_s)
    get path
    assert_redirected_to account_login_path
    sign_in(users(:two))
    get path
    assert_response :not_found
    delete account_logou_path
    sign_in
    get path
    assert_response :success
    assert_equal 'private video', response.body
    assert_equal 'video/mp4', response.media_type
    assert_includes response.headers['Cache-Control'], 'no-store'
    get path, headers: { 'Range' => 'bytes=0-6' }
    assert_response :partial_content
    assert_equal 'private', response.body
    assert_equal 'bytes 0-6/13', response.headers['Content-Range']
    get camera_video_path(id: camera.id, filename: '..%2Fsecrets.mp4')
    assert_response :not_found
  ensure
    file&.delete if file&.exist?
  end

  test 'public legacy recording route is unavailable' do
    get '/video/1/old.mp4'
    assert_redirected_to account_login_path
    sign_in
    get '/video/1/old.mp4'
    assert_response :not_found
  end

  test 'state-changing GET scaffold routes are gone' do
    sign_in
    ['/producer/create', '/record/wush', '/account/logou'].each do |path|
      get path
      assert_response :not_found
    end
  end
end

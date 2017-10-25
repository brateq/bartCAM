require 'test_helper'

class MycamControllerTest < ActionController::TestCase
  test 'should get main' do
    get :main
    assert_response :success
  end

  test 'should get record' do
    get :record
    assert_response :success
  end

  test 'should get play' do
    get :play
    assert_response :success
  end

  test 'should get live' do
    get :live
    assert_response :success
  end

  test 'should get config' do
    get :config
    assert_response :success
  end

  test 'should get logout' do
    get :logout
    assert_response :success
  end
end

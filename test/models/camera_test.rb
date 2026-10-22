# frozen_string_literal: true
require 'test_helper'
require 'fileutils'

class CameraTest < ActiveSupport::TestCase
  test 'normalizes hosts and validates ports and control characters' do
    camera = cameras(:one)
    camera.link = 'http://192.168.1.5/'
    camera.port = 65535
    assert camera.valid?
    assert_equal '192.168.1.5', camera.link
    ['host\nmovie_output off', 'host/path', 'host;touch x', 'host@attacker'].each do |host|
      camera.link = host
      refute camera.valid?
    end
  end

  test 'stream credentials are encoded and port is preserved' do
    camera = cameras(:one)
    camera.pass = "a b&c\n"
    assert_equal 'http://camera.example.org:8080/stream?user=viewer&password=a%20b%26c%0A', camera.stream_url
  end

  test 'template ports override the optional camera port' do
    camera = cameras(:one)
    camera.url.update!(link: ':9000/stream')
    assert_equal 'http://camera.example.org:9000/stream', camera.stream_url
    camera.url.update!(link: ':[PORT]/stream')
    assert_equal 'http://camera.example.org:8080/stream', camera.stream_url
  end

  test 'recording listing rejects symlinks outside the camera directory' do
    camera = cameras(:one)
    FileUtils.mkdir_p(camera.recordings_directory)
    link = camera.recordings_directory.join('secret.mp4')
    File.symlink(Rails.root.join('Gemfile'), link)
    refute_includes camera.recording_files, link.to_s
  ensure
    link&.delete if link&.symlink?
  end
end

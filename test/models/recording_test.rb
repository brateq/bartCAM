# frozen_string_literal: true
require 'test_helper'

class RecordingTest < ActiveSupport::TestCase
  test 'starts Motion without a shell or conversion hook' do
    camera = cameras(:one)
    recorder = Recording.new(camera)
    calls = []
    recorder.stub(:system, ->(*args) { calls << args; true }) { assert recorder.start }
    assert_equal [['motion', '-c', Rails.root.join('storage/motion', "#{camera.id}.conf").to_s]], calls
    config = Rails.root.join('storage/motion', "#{camera.id}.conf")
    assert_includes config.read, 'movie_codec mp4'
    refute_includes config.read, 'on_movie_end'
    refute_includes config.read, '/public/'
    assert_equal 0o600, config.stat.mode & 0o777
    assert camera.reload.recording?
  ensure
    config&.delete if config&.exist?
  end

  test 'invalid PID cannot signal a process group' do
    camera = cameras(:one)
    directory = Rails.root.join('storage/motion')
    FileUtils.mkdir_p(directory)
    path = directory.join("#{camera.id}.pid")
    path.write('-1')
    assert_raises(ArgumentError) { Recording.new(camera).stop }
  ensure
    path&.delete if path&.exist?
  end

  test 'missing process is safe to stop' do
    camera = cameras(:one)
    camera.update!(recording: true)
    Recording.new(camera).stop
    refute camera.reload.recording?
  end
end

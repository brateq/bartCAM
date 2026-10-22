# frozen_string_literal: true

require 'fileutils'

# Motion 4 writes MP4 directly; no shell conversion hook or shared public files.
class Recording
  def self.files(camera_id)
    directory = Rails.root.join('storage', 'recordings', Integer(camera_id).to_s)
    return [] unless directory.directory? && !directory.symlink?

    Dir.glob(directory.join('*.mp4')).select do |file|
      File.file?(file) && !File.symlink?(file) &&
        File.realpath(file).start_with?("#{directory.expand_path}/")
    end.sort.reverse
  end

  def initialize(camera)
    @camera = camera
    @directory = Rails.root.join('storage', 'motion')
    @config = @directory.join("#{camera.id}.conf")
    @pid = @directory.join("#{camera.id}.pid")
  end

  def start
    return true if @camera.recording?

    FileUtils.mkdir_p([@directory, @camera.recordings_directory], mode: 0o700)
    File.write(@config, configuration, perm: 0o600)
    success = system('motion', '-c', @config.to_s)
    @camera.update!(recording: true) if success
    success
  end

  def stop
    if @pid.file?
      pid = Integer(@pid.read.strip, 10)
      raise ArgumentError, 'Invalid Motion PID' unless pid > 1

      begin
        Process.kill('TERM', pid)
      rescue Errno::ESRCH
        # The worker already exited.
      end
      @pid.delete
    end
    @camera.update!(recording: false)
  end

  private

  def configuration
    url = @camera.stream_url
    raise ArgumentError, 'Unsafe camera URL' if url.match?(/[\r\n\x00\s"#]/)

    # All paths come from Rails.root and persisted numeric camera IDs.
    <<~CONFIG
      daemon on
      pid_file "#{@pid}"
      framerate 25
      threshold 1700
      pre_capture 5
      event_gap 60
      movie_max_time 1200
      movie_output on
      movie_codec mp4
      picture_output off
      stream_port 0
      webcontrol_port 0
      netcam_url #{url}
      target_dir "#{@camera.recordings_directory}"
      movie_filename %Y%m%d-%H%M%S
    CONFIG
  end
end

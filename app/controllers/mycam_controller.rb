# frozen_string_literal: true

class MycamController < ApplicationController
  before_action :require_login, :any_camera
  before_action :set_owned_camera, only: [:live, :play, :record, :video]

  def main; end

  def record; end

  def play
    @active = @camera.id.to_s
    @files = @camera.recording_files.map { |file| File.basename(file) }
    @video = params[:video] if @files.include?(params[:video])
  end

  def live
    @link = @camera.stream_url
  end

  def video
    path = Recording.files(@camera.id.to_i).find { |file| File.basename(file) == params[:filename] }
    raise ActiveRecord::RecordNotFound unless path

    response.headers['Cache-Control'] = 'private, no-store'
    # Rack streams an already-authorized, symlink-free file and supports byte
    # ranges so HTML5 playback can seek without loading recordings into memory.
    status, headers, body = Rack::Files.new(Rails.root.join('storage/recordings')).serving(
      Rack::Request.new(request.env), path
    )
    self.status = status
    response.headers.merge!(headers)
    self.response_body = body
  end
end

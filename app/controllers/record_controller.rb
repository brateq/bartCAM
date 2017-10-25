class RecordController < ApplicationController
  before_action :require_login, :any_camera

  def index
    if params[:id].nil?
      @camera = Camera.where(user_id: session[:user_id]).first
      redirect_to action: :show, id: @camera.id
    else
      if @camera = Camera.where(id: params[:id], user_id: session[:user_id]).count != 0
        redirect_to action: :show, id: @camera.id
      else
        flash[:alert] = 'Zły link do kamery'
        redirect_to '/'
      end
     end
  end

  def wush
    Camera.recording.each do |camera|
      @size = 0
      next unless @files = Dir.glob("#{Rails.root}/public/video/#{camera.id}/*").sort
      for file in @files
        @size += File.size(file)
      end

      next unless @size > 1.megabyte
      if File.delete(@files.first)
        flash[:notice] = 'Coś zostało usunięte'
        redirect_to '/'
      end
    end
end

  def update
    @camera = Camera.find(params[:id])
    @file_name = params[:id].to_s
    @dir = "/var/www/bartcam/tmp/videos/#{@file_name}/"
    @dir_final = "/var/www/bartcam/public/video/#{@file_name}/"
    @config = %|
    daemon on
    process_id_file /var/www/bartcam/config/motion/#{@file_name}.pid
    # Maximum number of frames to be captured per second.
    # Valid range: 2-100. Default: 100 (almost no limit).
    framerate 25

    # Minimum time in seconds between capturing picture frames from the camera.
    # Default: 0 = disabled - the capture rate is given by the camera framerate.
    # This option is used when you want to capture images at a rate lower than 2 per second.
    minimum_frame_time 0

    # Threshold for number of changed pixels in an image that
    # triggers motion detection (default: 1500)
    threshold 1700

    # Specifies the number of pre-captured (buffered) pictures from before motion
    # was detected that will be output at motion detection.
    # Recommended range: 0 to 5 (default: 0)
    # Do not use large values! Large values will cause Motion to skip video frames and
    # cause unsmooth mpegs. To smooth mpegs use larger values of post_capture instead.
    pre_capture 5

    # Noise threshold for the motion detection (default: 32)
    noise_level 32

    # Automatically tune the noise threshold (default: on)
    noise_tune on

    # Gap is the seconds of no motion detection that triggers the end of an event
    # An event is defined as a series of motion images taken within a short timeframe.
    # Recommended value is 60 seconds (Default). The value 0 is allowed and disables
    # events causing all Motion to be written to one single mpeg file and no pre_capture.
    gap 60

    # Maximum length in seconds of an mpeg movie
    # When value is exceeded a new mpeg file is created. (Default: 0 = infinite)
    max_mpeg_time 1200

    # Use ffmpeg to encode mpeg movies in realtime (default: off)
    ffmpeg_cap_new on

    # Use ffmpeg to make movies with only the pixels moving
    # object (ghost images) (default: off)
    ffmpeg_cap_motion off

    # Use ffmpeg to encode a timelapse movie
    # Default value 0 = off - else save frame every Nth second
    ffmpeg_timelapse 0

    # The file rollover mode of the timelapse video
    # Valid values: hourly, daily (default), weekly-sunday, weekly-monday, monthly, manual
    ffmpeg_timelapse_mode daily

    # Bitrate to be used by the ffmpeg encoder (default: 400000)
    # This option is ignored if ffmpeg_variable_bitrate is not 0 (disabled)
    ffmpeg_bps 500000

    # Enables and defines variable bitrate for the ffmpeg encoder.
    # ffmpeg_bps is ignored if variable bitrate is enabled.
    # Valid values: 0 (default) = fixed bitrate defined by ffmpeg_bps,
    # or the range 2 - 31 where 2 means best quality and 31 is worst.
    ffmpeg_variable_bitrate 0

    # Codec to used by ffmpeg for the video compression.
    # Timelapse mpegs are always made in mpeg1 format independent from this option.
    # Supported formats are: mpeg1 (ffmpeg-0.4.8 only), mpeg4 (default), and msmpeg4.
    # mpeg1 - gives you files with extension .mpg
    # mpeg4 or msmpeg4 - gives you files with extension .avi
    # msmpeg4 is recommended for use with Windows Media Player because
    # it requires no installation of codec on the Windows client.
    # swf - gives you a flash film with extension .swf
    # flv - gives you a flash video with extension .flv
    # ffv1 - FF video codec 1 for Lossless Encoding ( experimental )
    # mov - QuickTime ( testing )
    ffmpeg_video_codec swf

    # Use ffmpeg to deinterlace video. Necessary if you use an analog camera
    # and see horizontal combing on moving objects in video or pictures.
    # (default: off)
    ffmpeg_deinterlace off

    # Output 'normal' pictures when motion is detected (default: on)
    # Valid values: on, off, first, best, center
    # When set to 'first', only the first picture of an event is saved.
    # Picture with most motion of an event is saved when set to 'best'.
    # Picture with motion nearest center of picture is saved when set to 'center'.
    # Can be used as preview shot for the corresponding movie.
    output_normal off

    # Output pictures with only the pixels moving object (ghost images) (default: off)
    output_motion off

    # The mini-http server listens to this port for requests (default: 0 = disabled)
    webcam_port 0

    netcam_url #{generate_link_to_camera}
    target_dir #{@dir}

    movie_filename  %d-%H_%M_%S
    on_movie_end avconv -i %f %f".mp4" && rm %f && mv %f".mp4" "#{@dir_final}%m-%d %H:%M:%S.mp4"
    |

    File.open("#{Rails.root}/config/motion/#{@file_name}.conf", 'w+') do |f|
      f.write(@config)
    end

    Dir.mkdir(@dir) unless File.exist?(@dir)

    Dir.mkdir(@dir_final) unless File.exist?(@dir_final)

    if system("motion -c /var/www/bartcam/config/motion/#{@file_name}.conf")
      @camera.update(recording: 'true')
      flash[:notice] = 'Rozpoczynam nagrywanie, za kilka minut pierwsze nagrania będą widoczne'
      redirect_to "/record/#{@file_name}"
    end
  end

  def show
    if params[:id].nil?
      camera = Camera.where(user_id: session[:user_id]).first
    else
      if Camera.where(id: params[:id], user_id: session[:user_id]).count != 0
        @camera = Camera.find(params[:id])
        @button = if @camera.recording?
                    :false
                  else
                    :true
                  end
      else
        flash[:alert] = 'Zły link do kamery'
        redirect_to action: 'main'
      end
     end
  end

  def destroy
    @file_name = params[:id]

    if File.exist?("#{Rails.root}/config/motion/#{@file_name}.pid")
      @pid = File.read("#{Rails.root}/config/motion/#{@file_name}.pid")
      system("kill #{@pid}")
      @camera = Camera.find(@file_name)

    end
    @camera.update(recording: 'false')
    @camera.save
    flash[:notice] = 'Nagrywanie zostało przerwane'
    redirect_to "/record/#{@file_name}"
  end

  def new; end

  def stop; end
end

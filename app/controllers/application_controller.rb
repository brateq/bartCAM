# frozen_string_literal: true

class ApplicationController < ActionController::Base
  # Prevent CSRF attacks by raising an exception.
  # For APIs, you may want to use :null_session instead.
  protect_from_forgery with: :exception

  def any_camera
    @cam = Camera.where(user_id: session[:user_id])
    if @cam.empty?
      flash[:notice] = 'Należy najpierw skonfigurować kamerę'
      redirect_to '/config/new'
    end
  end

  def require_login
    @id = session[:user_id]

    unless session[:user_id]
      flash[:alert] = 'Musisz być zalogowany, by dostać się do tej sekcji'
      redirect_to '/account/login'
    end
  end

  def generate_link_to_camera
    @port = @camera.port
    @user = @camera.login
    @pass = @camera.pass

    @a = Link.find(@camera.url_id).link
    if @a.blank?
      return 'http://' + @camera.link
    else
      @b = @a.gsub!('[PORT]', @port.to_s) if @a.scan('[PORT]')
      @c = @b.gsub!('[USER]', @user.to_s) if @b.scan('[USER]')
      @d = @c.gsub!('[PASSWORD]', @pass.to_s)

      return 'http://' + @camera.link + @d
    end
  end
end

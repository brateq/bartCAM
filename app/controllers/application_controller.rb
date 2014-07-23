class ApplicationController < ActionController::Base
  # Prevent CSRF attacks by raising an exception.
  # For APIs, you may want to use :null_session instead.
  protect_from_forgery with: :exception
  
  def any_camera
  @cam = Camera.where(:user_id => session[:user_id])
    if @cam.empty?
      flash[:notice] = "Należy najpierw skonfigurować kamerę"
      redirect_to '/config/new'
    end
  end
  
  def require_login
    @id = session[:user_id]
    
    unless session[:user_id]
      flash[:alert] = "Musisz być zalogowany, by dostać się do tej sekcji"
      redirect_to '/account/login' 
    end
  end
  
  def generate_link_to_camera
    @port = @camera.port
    @user = @camera.login
    @pass = @camera.pass
     
     
     @a = Link.find(@camera.url_id).link
     unless @a.blank?
       if @a.scan("[PORT]")
         @b = @a.gsub!("[PORT]", "#{@port}")
       end
       if @b.scan("[USER]")
        @c = @b.gsub!("[USER]", "#{@user}")
       end
       @d = @c.gsub!("[PASSWORD]", "#{@pass}")
       
      return "http://" + @camera.link + @d
     else
      return "http://" + @camera.link
     end
  end
end

class ConfigController < ApplicationController
  before_action :require_login, :any_camera, only: %i[show index]
  before_action :set_config, only: %i[show edit update destroy]
  def index
    @first_camera = Camera.where(user_id: session[:user_id]).first
    redirect_to action: :show, id: @first_camera
  end

  def show
    if Camera.where(id: params[:id], user_id: session[:user_id]).count != 0
      @camera = Camera.find(params[:id])
    else
      redirect_to action: 'create'
    end
  end

  def create
    @save = Camera.new(camera_config)
    @save.user_id = session[:user_id]

    if @save.save
      flash[:notice] = 'Konfiguracja zostałą zapisana'
      redirect_to action: 'index'
    else
      flash[:alert] = 'Bład przy dodawaniu kamery'
      redirect_to '/'
    end
  end

  def update
    if @camera.update_attributes(camera_config)
      flash[:notice] = 'Konfiguracja zapisana'
    else
      flash[:alert] = 'Występują błedy w formularzu, wszystkie zostały wypisane poniżej'
    end
    redirect_to "/config/#{@camera.id}"
  end

  def destroy
    @camera = Camera.find(params[:id])
    @camera.destroy
    flash[:notice] = 'Kamera została usunięta'
    redirect_to action: :index
  end

  private

  def camera_config
    params.require(:camera).permit(:name, :url_id, :link, :login, :pass, :port)
  end

  private

  def set_config
    @camera = Camera.find(params[:id])
  end
end

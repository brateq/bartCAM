# frozen_string_literal: true

class ConfigController < ApplicationController
  before_action :require_login
  before_action :any_camera, only: :index
  before_action :set_owned_camera, only: [:show, :update, :destroy]

  def index
    redirect_to config_path(current_user.cameras.first!)
  end

  def new
    @save = Camera.new
  end

  def show; end

  def create
    @save = current_user.cameras.new(camera_config)
    if @save.save
      redirect_to config_path(@save), notice: 'Konfiguracja została zapisana'
    else
      flash.now[:alert] = 'Błąd przy dodawaniu kamery'
      render :new, status: :unprocessable_entity
    end
  end

  def update
    if @camera.update(camera_config)
      redirect_to config_path(@camera), notice: 'Konfiguracja zapisana'
    else
      flash.now[:alert] = 'Występują błędy w formularzu'
      render :show, status: :unprocessable_entity
    end
  end

  def destroy
    Recording.new(@camera).stop if @camera.recording?
    @camera.destroy!
    redirect_to config_index_path, notice: 'Kamera została usunięta'
  end

  private

  def camera_config
    params.require(:camera).permit(:name, :url_id, :link, :login, :pass, :port)
  end
end

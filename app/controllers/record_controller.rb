# frozen_string_literal: true

class RecordController < ApplicationController
  before_action :require_login, :any_camera
  before_action :set_owned_camera, only: [:show, :update, :destroy]

  def index
    redirect_to record_path(current_user.cameras.first!)
  end

  def show
    @button = @camera.recording? ? :false : :true
  end

  def update
    if Recording.new(@camera).start
      redirect_to record_path(@camera), notice: 'Rozpoczynam nagrywanie'
    else
      redirect_to record_path(@camera), alert: 'Nie udało się uruchomić Motion'
    end
  end

  def destroy
    Recording.new(@camera).stop
    redirect_to record_path(@camera), notice: 'Nagrywanie zostało przerwane'
  end
end

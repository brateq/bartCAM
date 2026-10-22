# frozen_string_literal: true

class ProducerController < ApplicationController
  before_action :require_login
  before_action :require_admin, except: :index

  def index; end

  def new
    @save = Producer.new
  end

  def create
    @save = Producer.new(new_producer)

    if @save.save
      redirect_to producer_index_path
    else
      redirect_to producer_new_path
    end
  end

  def destroy
    @producer = Producer.find(params[:id])
    @producer.destroy

    redirect_to producer_index_path
  end

  private

  before_action :require_login
  before_action :require_admin, except: :index

  def index; end

  def new_producer
    params.require(:producer).permit(:producer)
  end
end

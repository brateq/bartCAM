class MycamController < ApplicationController
  before_action :require_login, :any_camera
  
  def main 
  end

  def record
    if params[:id].nil?
      @camera = Camera.where(:user_id => session[:user_id]).first
      else
        if Camera.where(:id => params[:id], :user_id => session[:user_id]).count != 0
          @camera = Camera.find(params[:id])
        else 
           flash[:alert] = "Zły link do kamery"
           redirect_to :action => 'main'
        end
     end
  end

  def play
   if params[:id].nil?
      @camera = Camera.where(:user_id => session[:user_id]).first
      else
        if Camera.where(:id => params[:id], :user_id => session[:user_id]).count != 0
          @camera = Camera.find(params[:id])
          @video = params[:video]
        else 
           flash[:alert] = "Zły link do kamery"
           redirect_to :action => 'main'
        end
     end
     
    @active = params[:id]
  end

  def live
    if params[:id].nil?
      @camera = Camera.where(:user_id => session[:user_id]).first
      else
        if Camera.where(:id => params[:id], :user_id => session[:user_id]).count != 0
          @camera = Camera.find(params[:id])
        else 
           flash[:alert] = "Zły link do kamery"
           redirect_to :action => 'main'
        end
     end
    @link = generate_link_to_camera
  end
end

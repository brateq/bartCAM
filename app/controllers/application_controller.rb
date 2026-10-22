# frozen_string_literal: true

class ApplicationController < ActionController::Base
  protect_from_forgery with: :exception
  helper_method :current_user

  private

  def current_user
    @current_user ||= User.find_by(id: session[:user_id])
  end

  def require_login
    return if current_user

    reset_session
    redirect_to account_login_path, alert: 'Musisz być zalogowany, by dostać się do tej sekcji'
  end

  def require_admin
    head :forbidden unless current_user&.admin?
  end

  def any_camera
    return if current_user.cameras.exists?

    redirect_to new_config_path, notice: 'Należy najpierw skonfigurować kamerę'
  end

  def set_owned_camera
    @camera = if params[:id].present?
      current_user.cameras.find(params[:id])
    else
      current_user.cameras.first!
    end
  end
end

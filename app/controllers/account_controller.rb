# frozen_string_literal: true

class AccountController < ApplicationController
  before_action :require_login, only: :start
  rate_limit to: 10, within: 3.minutes, only: [:login, :new]

  def start
    @id = current_user.id
  end

  def new
    return redirect_to account_start_path if current_user
    return unless request.post?

    @save = User.new(params.require(:user).permit(:email, :password))
    @save.register_date = Date.current
    if @save.save
      reset_session
      session[:user_id] = @save.id
      redirect_to new_config_path, notice: 'Witaj! Zacznijmy od dodania Twojej kamery'
    else
      flash.now[:alert] = 'Błąd podczas rejestracji'
      render :new, status: :unprocessable_entity
    end
  end

  def login
    return redirect_to account_start_path if current_user
    return unless request.post?

    credentials = params.require(:login).permit(:email, :password)
    user = User.authenticate_by(email: credentials[:email], password: credentials[:password])
    if user
      reset_session
      session[:user_id] = user.id
      redirect_to mycam_main_path, notice: 'Witaj ponownie :)'
    else
      flash.now[:alert] = 'Błędny e-mail lub hasło'
      render :login, status: :unprocessable_entity
    end
  end

  def logou
    reset_session
    redirect_to account_login_path, notice: 'Do zobaczenia'
  end
end

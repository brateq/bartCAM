class AccountController < ApplicationController
  def start
    @id = session[:user_id]
    redirect_to action: 'login' unless session[:user_id]
  end

  def new
    redirect_to action: 'start' if session[:user_id]
    if params['user']
      data = {
        'email' => params['user']['email'],
        'password' => params['user']['password'],
        'register_date' => DateTime.now.to_date
      }
      @save = User.new(data)

      if @save.save
        session[:user_id] = @save.id
        @user = User.find_by_id(session[:user_id])
        flash[:notice] = 'Witaj! Zacznijmy od dodania Twojej kamery'
        redirect_to '/config/new'
      else
        flash[:alert] = 'Bład podczas rejestracji'
      end
    end
  end

  def remove; end

  def login
    redirect_to action: 'start' if session[:user_id]
    if params['login']
      if user = User.find_by_email(params['login']['email'])
        password = params['login']['password']
        if password == user.password
          session[:user_id] = user.id
          @user = User.find_by_id(session[:user_id])
          flash[:notice] = 'Witaj ponownie :)'
          redirect_to '/mycam/main'
        else
          flash[:alert] = 'Błędne hasło'
        end

      else
        flash[:alert] = 'Nie znalazłem takiego użytkownika :('
      end

    end
  end

  def logou
    session[:user_id] = nil
    flash[:notice] = 'Do zobaczenia'
    redirect_to action: 'login'
  end
end

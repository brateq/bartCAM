# frozen_string_literal: true

Rails.application.routes.draw do
  root 'mycam#live'
  get 'pages/todo'
  get 'pages/contact'
  get 'mycam/main'
  get 'mycam/record'
  get 'mycam/play'
  get 'live(/:id)', to: 'mycam#live', as: :live
  get 'play(/:id)', to: 'mycam#play', as: :play
  get 'play/:id/:video', to: 'mycam#play', constraints: { video: /[^\/]+/ }, format: false
  get 'video/:id/:filename', to: 'mycam#video', as: :camera_video,
    constraints: { filename: /[^\/]+/ }, format: false
  get 'login', to: 'account#login'
  get 'account/start'
  get 'account/new'
  post 'account/new'
  get 'account/login'
  post 'account/login'
  delete 'account/logou'

  resources :record, only: [:index, :show, :update, :destroy]
  resources :producer, only: [:index, :new, :create, :destroy]
  resources :links
  resources :config, only: [:index, :new, :create, :show, :update, :destroy]
end

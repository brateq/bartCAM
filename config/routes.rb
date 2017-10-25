Bartcam::Application.routes.draw do
  root 'mycam#live'

  get 'record/wush'
  get 'pages/todo'
  get 'pages/contact'
  get 'producer/new'
  get 'producer/create'
  get 'record/start'
  get 'record/stop'
  get 'mycam/main'

  post 'config/new'
  post 'config/:id' => 'config#update'

  get 'mycam/record'
  get 'mycam/play'

  get 'mycam/logout'

  match '/', to: 'mycam#main', via: 'get'
  match 'live', to: 'mycam#live', via: 'get'
  match 'live/:id', to: 'mycam#live', via: 'get'
  match 'play', to: 'mycam#play', via: 'get'
  get 'play/:id' => 'mycam#play'
  get 'play/:id/:video' => 'mycam#play'
  match 'login', to: 'account#login', via: 'get'

  get 'account/start'
  get 'account/new'
  get 'account/remove'
  get 'account/logou'

  post 'account/login' => 'account#login'
  get 'account/login'
  post 'account/new' => 'account#new'

  resources :record
  resources :producer
  resources :links
  resources :config

  # The priority is based upon order of creation: first created -> highest priority.
  # See how all your routes lay out with "rake routes".

  # You can have the root of your site routed with "root"
  # root 'welcome#index'

  # Example of regular route:
  #   get 'products/:id' => 'catalog#view'

  # Example of named route that can be invoked with purchase_url(id: product.id)
  #   get 'products/:id/purchase' => 'catalog#purchase', as: :purchase

  # Example resource route (maps HTTP verbs to controller actions automatically):
  #   resources :products

  # Example resource route with options:
  #   resources :products do
  #     member do
  #       get 'short'
  #       post 'toggle'
  #     end
  #
  #     collection do
  #       get 'sold'
  #     end
  #   end

  # Example resource route with sub-resources:
  #   resources :products do
  #     resources :comments, :sales
  #     resource :seller
  #   end

  # Example resource route with more complex sub-resources:
  #   resources :products do
  #     resources :comments
  #     resources :sales do
  #       get 'recent', on: :collection
  #     end
  #   end

  # Example resource route with concerns:
  #   concern :toggleable do
  #     post 'toggle'
  #   end
  #   resources :posts, concerns: :toggleable
  #   resources :photos, concerns: :toggleable

  # Example resource route within a namespace:
  #   namespace :admin do
  #     # Directs /admin/products/* to Admin::ProductsController
  #     # (app/controllers/admin/products_controller.rb)
  #     resources :products
  #   end
end

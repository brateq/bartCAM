# frozen_string_literal: true

Rails.application.configure do
  config.enable_reloading = false
  config.eager_load = ENV['CI'].present?
  config.consider_all_requests_local = true
  config.action_controller.perform_caching = false
  config.cache_store = :memory_store
  config.public_file_server.enabled = true
  config.public_file_server.headers = { 'Cache-Control' => 'public, max-age=3600' }
  config.action_dispatch.show_exceptions = :rescuable
  config.action_controller.allow_forgery_protection = false
  config.action_mailer.delivery_method = :test
  config.active_support.deprecation = :stderr
end

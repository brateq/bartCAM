# frozen_string_literal: true

ENV['RAILS_ENV'] ||= 'test'
require_relative '../config/environment'
require 'rails/test_help'
require 'minitest/mock'

class ActiveSupport::TestCase
  fixtures :all
end

class ActionDispatch::IntegrationTest
  setup { Rails.cache.clear }

  def sign_in(user = users(:one))
    post account_login_path, params: { login: { email: user.email, password: 'correct-password' } }
    assert_redirected_to mycam_main_path
  end
end

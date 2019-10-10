# frozen_string_literal: true

require 'test_helper'

class PagesControllerTest < ActionController::TestCase
  test 'should get todo' do
    get :todo
    assert_response :success
  end

  test 'should get contact' do
    get :contact
    assert_response :success
  end
end

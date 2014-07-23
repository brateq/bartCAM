require 'test_helper'

class AccountControllerTest < ActionController::TestCase
  test "should get start" do
    get :start
    assert_response :success
  end

  test "should get new" do
    get :new
    assert_response :success
  end

  test "should get remove" do
    get :remove
    assert_response :success
  end

  test "should get login" do
    get :login
    assert_response :success
  end

  test "should get logou" do
    get :logou
    assert_response :success
  end

end

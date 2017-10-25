require 'test_helper'

class RecordControllerTest < ActionController::TestCase
  test 'should get start' do
    get :start
    assert_response :success
  end

  test 'should get stop' do
    get :stop
    assert_response :success
  end
end

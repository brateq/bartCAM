# frozen_string_literal: true
require 'test_helper'

class UserTest < ActiveSupport::TestCase
  test 'password is hashed and changing it requires twelve characters' do
    user = users(:one)
    assert user.authenticate('correct-password')
    refute user.authenticate('wrong')
    user.password = 'short'
    refute user.valid?
    refute User.column_names.include?('password')
  end

  test 'non-password updates preserve legacy credentials' do
    user = users(:one)
    user.update!(register_date: Date.current)
    assert user.authenticate('correct-password')
  end
end

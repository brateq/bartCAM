# frozen_string_literal: true

class AddUserIdToCameras < ActiveRecord::Migration[4.2]
  def change
    add_column :cameras, :user_id, :integer
  end
end

# frozen_string_literal: true

class RemoveUsernameFromUsers < ActiveRecord::Migration
  def change
    remove_column :users, :username, :string
  end
end

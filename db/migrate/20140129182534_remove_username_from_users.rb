# frozen_string_literal: true

class RemoveUsernameFromUsers < ActiveRecord::Migration[4.2]
  def change
    remove_column :users, :username, :string
  end
end

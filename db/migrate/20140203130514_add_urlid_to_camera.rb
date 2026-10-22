# frozen_string_literal: true

class AddUrlidToCamera < ActiveRecord::Migration[4.2]
  def change
    add_column :cameras, :url_id, :integer
    add_index :cameras, :url_id
  end
end

class AddUserIdToCameras < ActiveRecord::Migration
  def change
    add_column :cameras, :user_id, :integer
  end
end

class CreateCameras < ActiveRecord::Migration
  def change
    create_table :cameras do |t|
      t.string :name
      t.string :model
      t.string :link
      t.string :login
      t.string :pass
      t.integer :port
      t.date :add_date
      t.date :edit_date

      t.timestamps
    end
  end
end

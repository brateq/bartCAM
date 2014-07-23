class CreateLinks < ActiveRecord::Migration
  def change
    create_table :links do |t|
      t.string :model
      t.string :link
      t.text :comment
      t.integer :producer_id

      t.timestamps
    end
    add_index :links, :producer_id
  end
end

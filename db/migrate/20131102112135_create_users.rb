# frozen_string_literal: true

class CreateUsers < ActiveRecord::Migration[4.2]
  def change
    create_table :users do |t|
      t.string :username
      t.string :password
      t.string :email
      t.date :register_date

      t.timestamps
    end
  end
end

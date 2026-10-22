# frozen_string_literal: true

class CreateProducers < ActiveRecord::Migration[4.2]
  def change
    create_table :producers do |t|
      t.string :producer

      t.timestamps
    end
  end
end

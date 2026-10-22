# frozen_string_literal: true

class AddRecordingToCameras < ActiveRecord::Migration[4.2]
  def change
    add_column :cameras, :recording, :boolean
  end
end

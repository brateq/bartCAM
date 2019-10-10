# frozen_string_literal: true

class AddRecordingToCameras < ActiveRecord::Migration
  def change
    add_column :cameras, :recording, :boolean
  end
end

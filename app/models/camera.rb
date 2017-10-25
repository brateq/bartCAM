class Camera < ActiveRecord::Base
  belongs_to :user
  before_update :delete_http
  before_create :delete_http

  scope :recording, where(recording: true)

  def delete_http
    self.link = link.sub('http://', '')
  end

  def self.wush
    Camera.recording.each do |camera|
      @size = 0
      next unless @files = Dir.glob("#{Rails.root}/public/video/#{camera.id}/*").sort
      for file in @files
        @size += File.size(file)
      end

      File.delete(@files.first) if @size > 1.megabyte
    end
  end

  validates :name, :link, :user_id, presence: true
  validates :port, length: { maximum: 4 }
end

# frozen_string_literal: true

class Camera < ActiveRecord::Base
  belongs_to :user
  belongs_to :url, class_name: 'Link', optional: true
  before_validation :delete_http

  scope :recording, -> { where(recording: true) }
  validates :name, :link, :user_id, presence: true
  # Cameras may live on private networks. Restrict syntax, not address ranges.
  validates :link, format: { with: /\A[a-zA-Z0-9.-]+\z/ }, allow_blank: true
  validates :port, numericality: { only_integer: true, in: 1..65_535 }, allow_nil: true
  validates :login, :pass, format: { without: /[\r\n\x00]/ }

  def delete_http
    self.link = link.to_s.sub(%r{\Ahttps?://}, '').delete_suffix('/')
  end

  def stream_url
    template = url&.link.to_s
    suffix = template.gsub('[PORT]', port.to_s)
      .gsub('[USER]', ERB::Util.url_encode(login.to_s))
      .gsub('[PASSWORD]', ERB::Util.url_encode(pass.to_s))
    suffix = ":#{port}#{suffix}" if port && !template.start_with?(':') && !template.include?('[PORT]')
    address = "http://#{link}#{suffix}"
    parsed = URI.parse(address)
    raise ArgumentError, 'Invalid camera template' unless parsed.host == link && parsed.userinfo.nil?

    address
  end

  def recordings_directory
    Rails.root.join('storage', 'recordings', id.to_s)
  end

  def recording_files
    Recording.files(id)
  end

  def self.wush
    recording.find_each do |camera|
      files = camera.recording_files.reverse
      total = files.sum { |file| File.size(file) }
      File.delete(files.first) if total > 1.megabyte && files.any?
    end
  end
end

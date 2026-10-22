# frozen_string_literal: true

class Link < ActiveRecord::Base
  belongs_to :producer
  validates :link, format: { without: /[\r\n\x00\s"#]/ }, allow_blank: true
  validate :relative_camera_template

  private

  def relative_camera_template
    return if link.blank?
    return if link.match?(%r{\A(?:/(?!/)|\?|:(?:\[PORT\]|[0-9]{1,5})(?:/|\?|\z))})

    errors.add(:link, 'must be a path, query, or port template')
  end
end

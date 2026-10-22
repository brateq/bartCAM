# frozen_string_literal: true

class User < ActiveRecord::Base
  has_secure_password
  has_many :cameras, dependent: :destroy

  validates :password, length: { minimum: 12 }, allow_nil: true
  validates :email, presence: true, uniqueness: true, length: { maximum: 254 },
    format: { with: URI::MailTo::EMAIL_REGEXP }

  def admin?
    role == 'admin'
  end
end

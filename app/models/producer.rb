# frozen_string_literal: true

class Producer < ActiveRecord::Base
  has_many :links, dependent: :destroy, foreign_key: 'producer_id'
end

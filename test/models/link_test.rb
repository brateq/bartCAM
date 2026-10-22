# frozen_string_literal: true
require 'test_helper'

class LinkTest < ActiveSupport::TestCase
  test 'templates cannot add Motion directives or redirect to another host' do
    link = links(:one)
    ["/stream\nmovie_output off", '//attacker.example/stream', '@attacker.example', '://attacker.example'].each do |value|
      link.link = value
      refute link.valid?, value
    end
  end
end

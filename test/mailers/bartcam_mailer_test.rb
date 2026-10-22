# frozen_string_literal: true

require 'test_helper'

class BartcamMailerTest < ActionMailer::TestCase
  test 'welcome' do
    mail = BartcamMailer.welcome
    assert_equal 'Welcome', mail.subject
    assert_equal ['to@example.org'], mail.to
    assert_equal ['from@example.com'], mail.from
    assert_match 'Hi', mail.body.encoded
  end

  test 'destroy' do
    mail = BartcamMailer.destroy
    assert_equal 'Destroy', mail.subject
    assert_equal ['to@example.org'], mail.to
    assert_equal ['from@example.com'], mail.from
    assert_match 'Hi', mail.body.encoded
  end
end

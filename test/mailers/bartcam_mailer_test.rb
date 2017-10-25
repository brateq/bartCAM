require 'test_helper'

class BartcamMailerTest < ActionMailer::TestCase
  test 'new' do
    mail = BartcamMailer.new
    assert_equal 'New', mail.subject
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

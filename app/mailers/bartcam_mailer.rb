# frozen_string_literal: true

class BartcamMailer < ActionMailer::Base
  default from: 'from@example.com'

  # Subject can be set in your I18n file at config/locales/en.yml
  # with the following lookup:
  #
  #   en.bartcam_mailer.welcome.subject
  #
  def welcome
    @greeting = 'Hi'

    mail to: 'to@example.org'
  end

  # Subject can be set in your I18n file at config/locales/en.yml
  # with the following lookup:
  #
  #   en.bartcam_mailer.destroy.subject
  #
  def destroy
    @greeting = 'Hi'

    mail to: 'to@example.org'
  end
end

# frozen_string_literal: true

namespace :security do
  desc 'Move legacy public recordings out of the web root before deployment'
  task migrate_recordings: :environment do
    require 'fileutils'
    source = Rails.root.join('public', 'video')
    destination = Rails.root.join('storage', 'recordings')
    if source.exist?
      abort 'Destination exists; reconcile recordings manually before continuing' if destination.exist?
      FileUtils.mkdir_p(destination.dirname, mode: 0o700)
      FileUtils.mv(source, destination)
      FileUtils.chmod_R(0o700, destination)
    end
  end
end

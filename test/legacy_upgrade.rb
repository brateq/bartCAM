# frozen_string_literal: true

require 'tmpdir'
require 'fileutils'

# Separate SQLite database: exercise every historical migration and retain an
# existing short password without storing it as plaintext after the upgrade.
directory = Dir.mktmpdir('bartcam-upgrade-')
at_exit do
  ActiveRecord::Base.connection_pool.disconnect! if defined?(ActiveRecord::Base)
  FileUtils.rm_rf(directory) if directory
end
ENV['RAILS_ENV'] = 'test'
ENV['DATABASE_URL'] = "sqlite3:#{directory}/legacy.sqlite3"
require_relative '../config/environment'
context = ActiveRecord::MigrationContext.new(Rails.root.join('db/migrate').to_s)
context.migrate(20140209092009)
ActiveRecord::Base.connection.execute("INSERT INTO users (email, password, role) VALUES ('Legacy@Example.org', 'old4', 'admin')")
context.migrate
User.reset_column_information
user = User.find_by!(email: 'Legacy@Example.org')
raise 'Legacy login broken' unless User.authenticate_by(email: 'Legacy@Example.org', password: 'old4')
raise 'Role changed' unless user.admin?
raise 'Plaintext password column retained' if User.column_names.include?('password')
raise 'Digest missing' unless user.password_digest.start_with?('$2')
puts 'Legacy migration and password authentication passed'

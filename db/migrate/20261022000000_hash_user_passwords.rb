# frozen_string_literal: true

class HashUserPasswords < ActiveRecord::Migration[8.1]
  def up
    require 'bcrypt'
    # Erase freed SQLite cells when rebuilding the legacy plaintext table.
    connection.execute('PRAGMA secure_delete = ON') if connection.adapter_name == 'SQLite'
    add_column :users, :password_digest, :string
    # Use SQL rather than the current User model so legacy validations/callbacks
    # cannot change account data during the migration.
    select_all('SELECT id, password FROM users').each do |user|
      password = user['password'].presence || SecureRandom.hex(32)
      raise 'Legacy password exceeds bcrypt limit; reset it before migrating' if password.bytesize > 72

      digest = BCrypt::Password.create(password).to_s
      connection.execute "UPDATE users SET password_digest = #{connection.quote(digest)} WHERE id = #{Integer(user['id'])}"
    end
    change_column_null :users, :password_digest, false
    remove_column :users, :password
  end

  def down
    raise ActiveRecord::IrreversibleMigration, 'Password hashes cannot be restored to plaintext'
  end
end

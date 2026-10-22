# This file is auto-generated from the current state of the database. Instead
# of editing this file, please use the migrations feature of Active Record to
# incrementally modify your database, and then regenerate this schema definition.
#
# This file is the source Rails uses to define your schema when running `bin/rails
# db:schema:load`. When creating a new database, `bin/rails db:schema:load` tends to
# be faster and is potentially less error prone than running all of your
# migrations from scratch. Old migrations may fail to apply correctly if those
# migrations use external dependencies or application code.
#
# It's strongly recommended that you check this file into your version control system.

ActiveRecord::Schema[8.1].define(version: 2026_10_22_000000) do
  create_table "cameras", force: :cascade do |t|
    t.string "name"
    t.string "model"
    t.string "link"
    t.string "login"
    t.string "pass"
    t.integer "port"
    t.date "add_date"
    t.date "edit_date"
    t.datetime "created_at"
    t.datetime "updated_at"
    t.boolean "recording"
    t.integer "user_id"
    t.integer "url_id"
    t.index ["url_id"], name: "index_cameras_on_url_id"
  end

  create_table "links", force: :cascade do |t|
    t.string "model"
    t.string "link"
    t.text "comment"
    t.integer "producer_id"
    t.datetime "created_at"
    t.datetime "updated_at"
    t.index ["producer_id"], name: "index_links_on_producer_id"
  end

  create_table "producers", force: :cascade do |t|
    t.string "producer"
    t.datetime "created_at"
    t.datetime "updated_at"
  end

  create_table "users", force: :cascade do |t|
    t.string "email"
    t.date "register_date"
    t.datetime "created_at"
    t.datetime "updated_at"
    t.string "role"
    t.string "password_digest", null: false
  end
end

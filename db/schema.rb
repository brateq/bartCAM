# encoding: UTF-8
# This file is auto-generated from the current state of the database. Instead
# of editing this file, please use the migrations feature of Active Record to
# incrementally modify your database, and then regenerate this schema definition.
#
# Note that this schema.rb definition is the authoritative source for your
# database schema. If you need to create the application database on another
# system, you should be using db:schema:load, not running all the migrations
# from scratch. The latter is a flawed and unsustainable approach (the more migrations
# you'll amass, the slower it'll run and the greater likelihood for issues).
#
# It's strongly recommended that you check this file into your version control system.

ActiveRecord::Schema.define(version: 20140209092009) do

  create_table "cameras", force: true do |t|
    t.string   "name"
    t.string   "model"
    t.string   "link"
    t.string   "login"
    t.string   "pass"
    t.integer  "port"
    t.date     "add_date"
    t.date     "edit_date"
    t.datetime "created_at"
    t.datetime "updated_at"
    t.boolean  "recording"
    t.integer  "user_id"
    t.integer  "url_id"
  end

  add_index "cameras", ["url_id"], name: "index_cameras_on_url_id"

  create_table "links", force: true do |t|
    t.string   "model"
    t.string   "link"
    t.text     "comment"
    t.integer  "producer_id"
    t.datetime "created_at"
    t.datetime "updated_at"
  end

  add_index "links", ["producer_id"], name: "index_links_on_producer_id"

  create_table "mycams", force: true do |t|
    t.string   "camera_address"
    t.string   "camera_login"
    t.string   "camera_password"
    t.datetime "created_at"
    t.datetime "updated_at"
  end

  create_table "producers", force: true do |t|
    t.string   "producer"
    t.datetime "created_at"
    t.datetime "updated_at"
  end

  create_table "records", force: true do |t|
    t.string   "status"
    t.integer  "id_cam"
    t.datetime "created_at"
    t.datetime "updated_at"
  end

  create_table "users", force: true do |t|
    t.string   "password"
    t.string   "email"
    t.date     "register_date"
    t.datetime "created_at"
    t.datetime "updated_at"
    t.string   "role"
  end

end

# frozen_string_literal: true

Rails.application.config.session_store :cookie_store,
  key: '_bartcam_session_v2', httponly: true, same_site: :lax,
  secure: Rails.env.production?, expire_after: 12.hours

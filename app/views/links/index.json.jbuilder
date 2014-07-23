json.array!(@links) do |link|
  json.extract! link, :id, :model, :link, :comment, :producer_id
  json.url link_url(link, format: :json)
end

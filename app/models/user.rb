class User < ActiveRecord::Base
  has_many :cameras
  
  after_create :set_admin
  

  validates :password, presence: true, length: { :minimum => 4 }
  validates :email, presence: true, uniqueness: true, length: { :minimum => 4, :maximum => 30 }, :format => { :with => /[a-zA-Z0-9.\-_]+\@[a-zA-Z0-9.\-_]+\.[a-z]{2,4}/ }
  
  private
  def set_admin
    if User.count == 1
      User.first.update_attribute(:role, "admin")
    end
  end
end

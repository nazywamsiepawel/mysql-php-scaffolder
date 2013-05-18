#classes
class:user(int id, string name, string surname, string website, string email, string password, int photo_id, string description, int permissions, string country, string city);
class:network(int id, string name, string country, string centre_longtitude, string centre_latitude, int countUsers, int countBusiness, int countEvents);
class:business(int id, int fanCount, string name, string website, string email, string password, string short_description, string description);
class:event(int id, string title, string short_description, string description, string address, string longtitude, string latitude, int current_pictureID, int network, int owner_type, int ownerID);
class:update(int id, int authorID, int(2) author_type, int networkID, int photo_id, string title, string(1000) content, int likeCount, int commentCount);
#relations
rel(user, network, relUserNetwork, *);
rel(user, business, relUserBusiness, *);
#functions
f:user(create, read, update, delete, gets, sets);
f:network(create, read, update, delete, gets, sets);
f:business(create, read, update, delete, gets, sets);
f:event(create, read, update, delete, gets, sets);
f:update(create, read, update, delete, gets, sets);
 
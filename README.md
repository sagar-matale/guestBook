# Guestbook

1. Create new database (db_guest_book) and import db_guest_book.sql file
2. Copy folder guestbook on server
3. Use root foler .env file to update your database credentials
4. Use below url to access the portal
	YOUR_SERVER_PROJECT_PATH/public/index.php (http://localhost/guestbook/public/index.php)
5. There are two types of user in the system, 1. Guest 2.Admin
6. No login required for Guest user. Guest user can add as many as guest records. All records having pending status initially. Guest user only can view the admin approved all guest book records + the records added by guest user itself
6. Admin user can approved or delete the guest book record added by all guest users.
7. For admin user login, user below details,
	username : admin
	password : admin
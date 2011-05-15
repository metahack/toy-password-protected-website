drop database if exists login_db;

grant usage on *.* to login_db_user@localhost;

drop user login_db_user@localhost;

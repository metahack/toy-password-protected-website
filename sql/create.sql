/***********************************************************
This file creates a database, database user, user table, 
and user record for a simple password protected website.

usage:
  ~/mysql -u root -p < create.sql

     database name   =   login_db
database user name   =   login_db_user
database user pass   =   passypass
          hostname   =   localhost
       login table   =   login_table
 website user name   =   guapo 
  website password   =   zippy 

(see also delete.sql)
************************************************************/

create database login_db;

create user login_db_user@localhost;

set password for login_db_user@localhost = password('passypass');

grant all privileges on login_db.* to
 login_db_user@localhost with grant option;

flush privileges;

use login_db;

create table login_table (
 id int(11) not null auto_increment,
 username varchar(20),
 join_date DATETIME,
 password varchar(20),
 primary key (id)
);

insert into login_table
 (username,
 join_date,
 password)

 VALUES
 
 ('guapo',
 NOW(),
 PASSWORD('zippy'));

/***********
 The end.
************/

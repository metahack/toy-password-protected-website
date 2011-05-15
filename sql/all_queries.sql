
create database test4;

create user test_user4@localhost;


set password for test_user@localhost = password('pass');

grant all privileges on test.* to test_user@localhost with grant option;

flush privileges;

use test;

create table users(
 id int(11) not null auto_increment,
 username varchar(20),
 join_date DATETIME,
 password varchar(20),
 primary key (id)
);

insert into users
 (username,
 join_date,
 password)

VALUES
 
 ('bee',
 NOW(),
 PASSWORD('pass'));



drop user 'test_user'@localhost;

drop database test;

flush privileges;

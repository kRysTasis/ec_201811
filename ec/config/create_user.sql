create database ec_login;

grant all on ec_login.* to dbuser@localhost identified by "1234";

use ec_login;

create table users (
  id int not null auto_increment primary key,
  email varchar(255) unique,
  username varchar(255) unique,
  password varchar(255),
  created datetime,
  modified datetime
);

desc users;

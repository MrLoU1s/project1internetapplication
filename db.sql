use IAPDB;

CREATE TABLE users(
userId bigint(10) not null auto_increment,
fullname VARCHAR(50) not null DEFAULT '', 
username VARCHAR(50) not null DEFAULT '', 
email VARCHAR(50) not null DEFAULT '', 
password VARCHAR(60) not null DEFAULT '', 
created datetime not null DEFAULT CURRENT_TIMESTAMP() , 
updated datetime not null DEFAULT CURRENT_TIMESTAMP() ON UPDATE CURRENT_TIMESTAMP(), 
genderId tinyint(1) not null DEFAULT 0,
roleId tinyint(1) not null DEFAULT 0,
UNIQUE  KEY ('username'),
UNIQUE KEY ('email'),
PRIMARY KEY ('userId')
 

);
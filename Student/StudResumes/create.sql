CREATE TABLE ride 
(username varchar(50),
time varchar(50),
source varchar(80),
destination varchar(80),
rideid int NOT NULL AUTO_INCREMENT,
PRIMARY KEY(rideid));

CREATE TABLE associated_riders
(rideid int,
 name varchar(50));

CREATE TABLE users
(username varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
password varchar(60),
PRIMARY KEY(username));


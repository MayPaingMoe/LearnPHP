-- database
-- table
-- columns
-- all cap
create database `loginSystem`;

create table `users`(
    `id`  int unsigned auto_increment primary key not null ,
    `name` varchar(225) not null ,
    `email` varchar(225) not null,
    `gender`char(10) not null,
    `dob` date not null,
    `age`  tinyint unsigned 
    );

 -- insert data

INSERT INTO `USERS`(`name`,`email`,`gender`,`dob`,`age`)VALUES('John Doe','john@gmail.com','male','1998-01-01','27'),
('Mary','mary@gmail.com','female','1998-05-01','27'),
('Jane','jane@gmail.com','male','1998-01-06','27');

-- take more time
SELECT * FROM USERS;
-- take less time
SELECT (`name`,`email`,`gender`,`dob`,`age`) FROM USERS;

-- edit
SELECT * FROM `USERS` WHERE `id`=4;

-- update
UPDATE `USERS` SET `name`='Harry' WHERE `id`=2;
UPDATE `USERS` SET `email`='harry@gmail.com' WHERE `id`=2;
UPDATE `USERS` SET `dob`='1997-02-02' and `age`=29 WHERE `id`=2;

-- delete

DELETE FROM `USERS` WHERE `id`=3;
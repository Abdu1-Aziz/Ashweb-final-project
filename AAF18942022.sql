
create schema AAF18942022;

use AAF18942022;

create table Employee(
Employee_id smallint primary key not null,
Fname varchar(100),
Lname varchar(100),
position varchar(100)
);


create table Study_abroad(
abroad_id int auto_increment primary key not null,
partner_name varchar(100) not null,
program varchar(100) not null
);

create table Partnership(
partnership_id int auto_increment primary key not null,
partnership_name varchar (100) not null,
program varchar (100) not null
);

Create table globalCafe(
Student_id int primary key auto_increment not null,
fname varchar(100) not null,
lname varchar(100),
gender enum('Male', 'Female') not null,
email varchar(100) not null,
phone varchar(20) not null,
class enum ('2020', '2021', '2022', '2023') not null,
course enum('CS', 'BA', 'CE', 'ME', 'EE', 'MIS') not null,
category enum('Music', 'Food', 'Attire', 'Other') not null,
description mediumtext
);

create table buddyUp(
Student_id int primary key auto_increment not null,
fname varchar(100),
lname varchar(100),
gender enum('Male', 'Female') not null,
email varchar(100),
phone varchar(20),
class enum ('2021', '2022', '2023', '2024'),
course enum('CS', 'BA', 'CE', 'ME', 'EE', 'MIS'),
description mediumtext
);

create table cohesionFund(
Student_id int primary key auto_increment not null,
fname varchar(100),
lname varchar(100),
gender enum('Male', 'Female') not null,
email varchar(100),
phone varchar(20),
class enum ('2021', '2022', '2023', '2024'),
course enum('CS', 'BA', 'CE', 'ME', 'EE', 'MIS'),
pname varchar(255),
description mediumtext
);


create table hostFamily(
Student_id int primary key auto_increment not null,
fname varchar(100),
lname varchar(100),
gender enum('Male', 'Female') not null,
email varchar(100),
phone varchar(20),
class enum ('2021', '2022', '2023', '2024'),
course enum('CS', 'BA', 'CE', 'ME', 'EE', 'MIS'),
country varchar(255),
hometown varchar(100),
family_name varchar(100),
description mediumtext
);

create table ODIP(
user_email varchar(100) not null,
user_password varchar(100) not null
); 
insert into ODIP(user_email, user_password) VALUES ('odip.ashesi@ashesi.edu.gh', 'Ashesi2020')
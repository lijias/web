create database infosystem;

use infosystem;

create table infos(
infosid int key auto_increment,  
username  varchar(20)  not null,
leaveword varchar(200)  not null,
Mytime  timestamp default current_timestamp
);
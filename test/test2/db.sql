create database infosystem;

# use infosystem

create table infos(
id int key auto_increment,
username  varchar(20) not null,
leaveword varchar(200) not null,
time timestamp default current_timestamp
);


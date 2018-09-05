create table admin(
id int key auto_increment ,
username varchar(50) not null,
password int not null
);

insert into admin (username,password) values ('张无忌','123');

create table info(
id int key auto_increment,
aid int not null,
name varchar(30) not null,
content text not null,
dateandtime timestamp default current_timestamp
);
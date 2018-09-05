create table 9thleaf_vip 
(
	id int(11) key auto increment unsigned,
	name varchar(255) not null,
	price int(6) not null,
	days int(4) not null,
	create_time timestamp,
	update_time timestamp
);
create database word;

use word;

create table wordInfo
(
  wordId      int           auto_increment primary key,
  userName    varchar(20)   not null,
  content     text          not null,
  wordTime    timestamp     default current_timestamp
);









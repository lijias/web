create database words;

use words;

#会员表
create table userInfo
(
  userId     int           auto_increment primary key,
  userName   varchar(20)   not null,
  password   varchar(20)   not null,
  isLock     int           default 1#是否锁定  0锁定  1未锁
);
insert into userInfo(userName,password,isLock)values('张三丰','123456',1);
insert into userInfo(userName,password,isLock)values('林轻侠','123456',1);
insert into userInfo(userName,password,isLock)values('李逍遥','123456',0);

#留言表
create table wordInfo
(
  wordId      int            auto_increment primary key,
  sender      int            not null,#发送人
  accpter     varchar(20)    not null,#接收人
  content     text           not null,#内容
  wordTime    timestamp      default current_timestamp,
  foreign key (sender) references userInfo(userId)
);

#过滤字
create table filterText
(
  id         int             auto_increment primary key,
  txt        varchar(100)    not null
);
insert into filterText(txt)values('台独');
insert into filterText(txt)values('法轮功');
insert into filterText(txt)values('法轮大法');











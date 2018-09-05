create database db_mails;

use db_mails;

create table mail_info (
 emailId int key auto_increment,
 title       varchar(500) not null,
 content  varchar(500) not null,
 dataandtime  timestamp default current_timestamp
);

insert mail_info (title,content,dataandtime) 
value
('开会通知','为庆祝教师节，学校决定于2006年9月10日上午9：00在大礼堂召开全体教职员工大会。','2006-9-8'),
('邀请信','邀请您参加SUN科技日（9月27-29日）举行的相关活动。--全球开发者的盛会将提升您的开发技能、拓宽职业发展道路、分享最新知识、拓展人际网络联系。','2006-9-6');

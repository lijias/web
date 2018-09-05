-----------------------------------------------------sql
sql 修改默认值 例子
alter table users_info alter column role_id set default 1;

sql 修改字段类型（当需要修改字段名称时使用change；当需要修改字段类型时使用modify，change 比modify功能多，如果要用change修改字段类型和约束,要加上新字段名，新字段名可以和原来一样。）
alter table `9thleaf_account_role` MODIFY COLUMN toplimit  char(10) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '用户新建圈子上限';
alter table `9thleaf_account_tag` change id_tag id_tag varchar(11) COLLATE utf8_unicode_ci NOT NULL COMMENT '标签ID';

sql 增加字段
alter table '9thleaf_corporation' add `bg_img` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '背景图片';

sql 增加数据
INSERT INTO `9thleaf_account_role` (name,role_type,en_name) values ('未实名用户',2,'no');

sql 子查询 （第二个select查出的数据被了临时命名为a，继续查询）
 update 9thleaf_report 
 set report_at=`created_at` 
 where id in (
 select a.id from (
 select id from 9thleaf_report 
 where `report_at` is null) as a
);

子查询 （例子2）
SELECT `c`.*, `ca`.`id` as caid, `ca`.*, (SELECT count(*) FROM (`9thleaf_customer` as c)LEFT JOIN `9thleaf_favourites` as f ON `f`.`customer_id`=`c`.`id` WHERE `c`.`id` = '1' GROUP BY `f`.`customer_id` )as fav
FROM (`9thleaf_customer` as c) 
LEFT JOIN `9thleaf_customer_address` as ca ON `ca`.`customer_id`=`c`.`id` 
WHERE `c`.`id` = '1' AND `ca`.`is_default` = '1'

sql 替换内容
                          需更换的字段       需更换的字段   需被更换的内容             更换的内容
UPDATE `9thleaf_report` SET content = replace(content, '/ueditor/aaa/upload/', '/uploads/ueditor/');

sql 删除重复内容（注意：需命名一个新字段保存需删除的数据 如例子中的select aa.id from(））
delete from `9thleaf_news` where id in (
select aa.id from(
select 4n.id from `9thleaf_news` as 4n where 4n.title IN 
(SELECT 2n.title FROM `9thleaf_news` as 2n GROUP BY 2n.title HAVING count(2n.title) > 1)
AND 
id NOT IN 
(SELECT min(3n.id) FROM `9thleaf_news` as 3n GROUP BY 3n.title HAVING count(3n.title) > 1)
)as aa
);


sql 查询每日每小时峰值
select COUNT(a.request_uri) as zs,HOUR(a.created_at) data_hour,FROM_UNIXTIME(UNIX_TIMESTAMP(a.created_at),"%Y-%m-%d") as data_date 
from `9thleaf_action_log` as a 
where request_uri = '/policy/email' 
GROUP BY data_hour, data_date
ORDER BY data_date DESC,data_hour ASC;

sql邦加查企业用户行业分类
select * 
from `9thleaf_account`
where id_app in(
select id 
from `9thleaf_internal_corp`
where corp_cat_id in (
select id 
from `9thleaf_channel` 
where  pid in (76,699,700)
UNION all
SELECT id 
from `9thleaf_channel` 
where pid in(
select id 
from `9thleaf_channel` 
where  pid in (76,699,700)
)
)
)

用户感兴趣标签和阅读过的内容标签（邦加）
select * from (
select r.account_id,a.id_name,a.account_name,a.gender,2re.region_name as province,re.region_name as area,d.section_name,c.corp_name,a.job,r.name,r.sum,'浏览标签' as t_type 
from 9thleaf_account_read_tag as r 
join 9thleaf_account as a on r.account_id=a.id
left join `9thleaf_region`as re on a.areaid=re.id
left join `9thleaf_region`as 2re on re.id_parent = 2re.id
LEFT JOIN `9thleaf_internal_corp` as c ON `a`.`id_app` = `c`.`id`
LEFT JOIN `9thleaf_channel` as d ON `c`.`corp_cat_id` = `d`.`id`
where a.account_type=2
UNION all
select a.id as account_id,a.id_name,a.account_name,a.gender,2re.region_name as province,re.region_name as area,d.section_name,c.corp_name,a.job,lt.name,lt.sum,'感兴趣标签' as t_type 
from 9thleaf_account as a 
join 9thleaf_account_tag as t on a.id=t.id_account 
join 9thleaf_account_like_tag as lt on FIND_IN_SET(lt.id,t.`id_tag`)
left join `9thleaf_region` as re on a.areaid=re.id
left join `9thleaf_region`as 2re on re.id_parent = 2re.id
LEFT JOIN `9thleaf_internal_corp` as c ON `a`.`id_app` = `c`.`id`
LEFT JOIN `9thleaf_channel` as d ON `c`.`corp_cat_id` = `d`.`id`
where a.account_type=2
) as aa 
order by account_id ;

那如果有个需求，是需要模糊查询多个字符串呢？like 加 in连用，如何写？这时候可以使用mysql的CONCAT函数
SELECT * FROM customers 
WHERE 'Robert Bob Smith III, PhD.' LIKE CONCAT('%',name,'%')

-----------------------------------------------------PHP函数
strip_tags() 去除字符串的标签
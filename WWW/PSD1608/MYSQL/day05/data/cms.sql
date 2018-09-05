--  CMS (Content Mangement System)：内容管理系统
--  创建数据库 cms
CREATE DATABASE cms
CHARACTER SET utf8;
-- 打开数据库
USE cms;

-- 新闻分类表 newType
-- 字段 id  name
CREATE TABLE newtype(
  id  SMALLINT UNSIGNED  KEY AUTO_INCREMENT,
  name  VARCHAR(30) NOT NULL UNIQUE
);
-- 添加表数据
INSERT newtype(name)
VALUE
('国内'),
('国际'),
('体育'),
('娱乐');
--  系统用户表admin
--  id 用户编号    username pwd
CREATE TABLE admin(
  id SMALLINT UNSIGNED KEY AUTO_INCREMENT,
  username VARCHAR(50) NOT NULL UNIQUE,
  pwd CHAR(32) NOT NULL
);
-- 添加表数据
INSERT admin(username,pwd)
VALUE
('alice',MD5('134')),
('tom',MD5('rtrt')),
('rose',MD5('85e')),
('jerry',MD5('erw5'));

-- 新闻表 article
-- 字段  id 新闻编号  title新闻标题   
--          contents新闻内容  tid分类编号
--    aid  用户编号   addtime 新闻发布时间
CREATE TABLE article(
   id SMALLINT UNSIGNED KEY AUTO_INCREMENT,
   title VARCHAR(80) NOT NULL UNIQUE,
   contents TEXT NOT NULL,
   tid SMALLINT UNSIGNED NOT NULL,
   aid SMALLINT UNSIGNED NOT NULL,
   addtime  TIMESTAMP  NOT NULL  DEFAULT current_timestamp
);

-- 添加表数据
-- tid (1国内 2 国际 3 体育 4 娱乐)
-- aid (1 alice)
INSERT article(title,contents,tid,aid)
VALUE
('乌克兰','涅博任科强调，美国将从土耳其撤出的核武器转移至乌克兰会促使其在乌克兰境内建立军事基地',2,1),
('韩国防长','韩民求当天在国会依次同丁世均、执政党新世界党党首李贞铉',2,1),
('身为美国总统 奥巴马平常都吃些啥？','热狗',2,1),
('南海','南海领土完整',1,2),
('台湾问题','一个中国',1,2),
('奥运女排','奥运金牌',3,1),
('乒乓球','男单马龙',3,1),
('王','给点正能量',4,1),
('马','给点正能量',4,1);


-- 多表联合查询
--  字段 新闻编号 标题，新闻分类名, 新闻内容，作者
--    article.title   newtype.name   article.contents  admin.username
SELECT  a.id,a.title,t.name,d.username
FROM  article AS a
INNER JOIN newtype AS t
ON a.tid = t.id
INNER JOIN admin AS d
ON  a.aid =d.id
ORDER BY id DESC;
























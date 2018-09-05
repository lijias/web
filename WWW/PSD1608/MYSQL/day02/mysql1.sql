-- windows 下： cmd 窗口显示中文 
--  设置客户端窗口 SET NAMES gbk;  和mysql服务器通讯

-- 给cms_user 表添加 addr 字段 ，要求在sex后面
ALTER TABLE cms_user
ADD addr VARCHAR(30) NOT NULL DEFAULT '北京'
AFTER sex;

-- 给cms_user 表添加 aa， bb 字段 数据类型 VAHRCHAR(20)
-- 要求在字段最前面
ALTER TABLE cms_user
ADD aa VARCHAR(20) FIRST,
ADD bb VARCHAR(20) FIRST;
--  cms_user 表 删除 aa ,bb 字段
ALTER TABLE cms_user
DROP aa,
DROP bb;
--  cms_user 删除整个表结构
DROP TABLE cms_user;
-- cms_user 表 修改  email 字段类型 VARCHAR(100)
-- 放到 age 后面
ALTER TABLE cms_user
MODIFY email VARCHAR(100) NOT NULL
AFTER age;

-- cms_user 表 修改名称  addr为 address  
-- 放到 age 后面
ALTER TABLE cms_user
CHANGE addr  address VARCHAR(30)
NOT NULL DEFAULT '天津'
AFTER age;
-- 更改 cms_user 表 mysql引擎
ALTER TABLE cms_user
ENGINE=InnoDB;
-- 更改 cms_user 表 编码 utf8
ALTER TABLE cms_user
DEFAULT CHARSET=utf8;





















-- 创建 cms_user 表结构
CREATE TABLE cms_user(
  id SMALLINT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(30) NOT NULL UNIQUE,
  pwd  CHAR(32) NOT NULL,
  age  TINYINT UNSIGNED NOT NULL DEFAULT 18,
  sex  TINYINT(1)  NOT NULL DEFAULT 0,
  email VARCHAR(50) NOT NULL UNIQUE
);
-- 给cms_user表添加数据
INSERT cms_user(name,pwd,email)
VALUE
('tom','tom123','11@163.com'),
('rose','rose123','22@163.com'),
('alice','tom123','33@163.com');






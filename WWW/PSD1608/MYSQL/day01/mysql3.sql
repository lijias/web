-- 打开psd1608数据库
USE psd1608;
-- 查看表
SHOW TABLES;
-- 创建 user 的表结构
CREATE TABLE user(
  name VARCHAR(30),
  age  INT
);
-- 查看 user 的表结构
DESC user;
DESCRIBE user;
SHOW COLUMNS FROM user;
-- 查看user创建表结构的命令代码
SHOW CREATE TABLE user;
-- 给 user 表添加数据
INSERT user(name,age)
VALUE
('tom',18),
('rose',20),
('alice',21);
-- 查询数据  user中数据
SELECT * FROM user;





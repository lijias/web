-- 查看数据库
SHOW DATABASES;
-- 创建数据库 psd1608
CREATE DATABASE psd1608;
SHOW DATABASES;
-- 删除数据库  psd1608
DROP DATABASE psd1608;
-- 创建数据库 psd1608 带编码
CREATE DATABASE psd1608
DEFAULT CHARACTER SET utf8;
-- 查看创建数据库 psd1608的命令
SHOW CREATE DATABASE psd1608;
--  修改psd1608数据库编码为 gbk
ALTER DATABASE psd1608
CHARACTER SET utf8;

SHOW CREATE DATABASE psd1608;

-- 打开psd1608数据库
USE psd1608;
-- 查看当前打开的数据库
SELECT DATABASE();








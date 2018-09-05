--  查询 5+7 5*7
SELECT 5+7,5*7;

--  查询  函数
-- 查看当前打开的数据库
SELECT DATABASE();
-- 查看 MySQL版本
SELECT VERSION();
-- 查看 系统时间
SELECT NOW();
-- 查看 MySQL登录用户
SELECT USER();
-- WHERE 条件 : 条件过滤
-- 比较运算符 > >= < <= !=  <> = <=>判断null

-- 查询表cms_user 中 编号大于3的记录
SELECT * FROM cms_user
WHERE id>3;
-- 查询表cms_user 中 编号小于等于2的记录
SELECT * FROM cms_user
WHERE id<=2;
-- 查询表cms_user 中 编号不等于2的记录
SELECT * FROM cms_user
WHERE id<>2;
-- <=>判断null 

--  给表cms_user 中 编号是 2记录 address改 null值
UPDATE cms_user SET address=null WHERE id=2;
-- 查询表cms_user 中 address字段是null值的记录
SELECT * FROM cms_user
WHERE address<=>null;
-- IS [NOT] NULL  判断null
SELECT * FROM cms_user
WHERE address IS null;

SELECT * FROM cms_user
WHERE address IS NOT null;

-- 查询表cms_user 中 编号2-4的记录
SELECT * FROM cms_user
WHERE id>=2 AND id<=4;

SELECT * FROM cms_user
WHERE id BETWEEN 2 AND 4;

-- 查询表cms_user 中 编号不在2-4的记录
SELECT * FROM cms_user
WHERE id<2 OR id>4;

SELECT * FROM cms_user
WHERE id  NOT BETWEEN 2 AND 4;

-- [NOT] IN(值,值...) (取某几个不连续的值)
--  查询表cms_user 中 编号是 2,3,5的记录
SELECT * FROM cms_user
WHERE id IN(2,3,5);

SELECT * FROM cms_user
WHERE id=2 OR  id=3 OR id=5;
--  查询表cms_user 中 编号不是 2,3,5的记录
SELECT * FROM cms_user
WHERE id NOT IN(2,3,5);

SELECT * FROM cms_user
WHERE id<>2 AND id<>3 AND id<>5;

--  查询 表cms_user 中 name 是jerry 、
-- 密码pwd是123的记录(两字段)
SELECT * FROM cms_user
WHERE name='jerry' AND  pwd='123';

-- 对表cms_user 中  编号是 2 4 7 9 的记录
-- 更改 age为 22
UPDATE cms_user SET age=22
WHERE id IN(2,4,7,9);
-- 对表cms_user 中  编号是 2 4 6 8 的记录
-- 更改 address为 广州
UPDATE cms_user SET address='广州'
WHERE id IN(2,4,6,8);

-- 查询 表cms_user 中 编号在 2-7之间
-- 并且 age 大于19记录
SELECT * FROM cms_user
WHERE id>=2 AND id<=7 AND age>19;

-- 查询 表cms_user 中 age 大于19或 address是
-- 广州的记录
SELECT * FROM cms_user
WHERE age>19 OR address='广州';

-- 查询 表cms_user 中 name 中包含 'o'记录
SELECT * FROM cms_user
WHERE name LIKE '%o%';

-- 查询 表cms_user 中 name 中第二个字母是'o'记录
SELECT * FROM cms_user
WHERE name LIKE '_o%';

-- 查询 表cms_user 中 name 中最后字母是'o'记录
SELECT * FROM cms_user
WHERE name LIKE '%o';

-- 查询 表cms_user 中 name 的值是4个字母的记录
SELECT * FROM cms_user
WHERE name LIKE '____';













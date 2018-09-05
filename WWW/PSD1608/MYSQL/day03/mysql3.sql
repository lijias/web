--子查询使用
--    (1)WHERE
--        a.IN
-- 查询 地址名称是 广州的记录
-- 1. cms_prov   广州名称对应的编号
SELECT id FROM cms_prov
WHERE pname = '广州';
-- 2.cms_user 地址名称是 广州的记录
SELECT * FROM cms_user
WHERE address IN(SELECT id FROM cms_prov
WHERE pname = '广州');
-- 查询 地址名称是 上海,广州的记录
SELECT * FROM cms_user
WHERE address IN(SELECT id FROM cms_prov
WHERE pname='上海' OR pname='广州');
-- (1)WHERE
--  b.比较运算符

-- 查询 age 中大于平均年龄的 记录
-- 1.查询平均年龄
SELECT AVG(age) FROM cms_user;
-- 2.查询 age 中大于平均年龄的 记录
SELECT * FROM cms_user
WHERE age>(SELECT AVG(age) FROM cms_user);

-- 查询 age 中大于（18,19）的 记录
SELECT * FROM cms_user
WHERE age>ALL(SELECT age FROM cms_user
WHERE age IN(18,19));

-- =SOME/ANY 等同于 IN 
-- 查询 age 中等于（18,19）的 记录
SELECT * FROM cms_user
WHERE age=SOME(SELECT age FROM cms_user
WHERE age IN(18,19));

-- FROM:FROM 后除了跟表还可以跟子查询产生的新表
SELECT * FROM (SELECT name,age 
FROM cms_user) AS new;












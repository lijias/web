-- 查询 对 address 分组的记录
--  要求 :显示  address,每组的人数,每组的最大年龄字段
SELECT address,COUNT(*),MAX(age)
FROM cms_user
GROUP BY address;

-- 查询 对 age 分组的记录
--  要求 :显示  age,每组的人数字段
SELECT age,COUNT(*)
FROM cms_user
GROUP BY age;

-- 查询 对 address 分组的记录
--  要求 :显示  address,每组的人数,每组的最大年龄字段
--  要求:显示每组人数大于等3的记录
SELECT address,COUNT(*) AS count,MAX(age)
FROM cms_user
GROUP BY address
HAVING count>=3;

-- 查询 2-7的记录中对 address 分组的记录
--  要求 :显示  address,每组的人数,每组的最大年龄字段
--  要求:显示每组人数大于等3的记录
SELECT address,COUNT(*) AS count,MAX(age)
FROM cms_user
WHERE id>=2 AND id<=7
GROUP BY address
HAVING count>=3
ORDER BY count DESC;

-- 查询 cms_user 并且对编号降序显示
SELECT * FROM cms_user
ORDER BY id DESC;

-- 查询 cms_user 并且对年龄,id 降序显示
SELECT * FROM cms_user
ORDER BY age DESC,id DESC;

-- 查询 cms_user 表中前3条的记录数
SELECT * FROM cms_user
LIMIT 0,3;
--  WHERE id<=3 准确吗？
-- 不准确 ，如果编号不连续 必须LIMIT 0,3

-- 第一个页    每页显示2条
--  $offset = (1-1)*2
SELECT * FROM cms_user
LIMIT 0,2;
-- 第二个页    每页显示2条
--  $offset = (2-1)*2
SELECT * FROM cms_user
LIMIT 2,2;
-- 第三个页    每页显示2条
--  $offset = (3-1)*2
SELECT * FROM cms_user
LIMIT 4,2;
-- 第四个页    每页显示2条
--  $offset = (4-1)*2
SELECT * FROM cms_user
LIMIT 6,2;
-- 第五个页    每页显示2条
--  $offset = (5-1)*2
SELECT * FROM cms_user
LIMIT 8,2;

-- 降序分页：第一页
SELECT * FROM cms_user
ORDER BY id desc
LIMIT 0,2;

-- 降序分页：第二页
SELECT * FROM cms_user
ORDER BY id desc
LIMIT 2,2;











-- (1)不写字段名称的添加
-- (从第一个字段到最后字段值不能省略)
--  cms_user 添加一条记录
INSERT cms_user
VALUE(4,'tina','tina123',21,'上海',
'44@163.com',1);

-- (2)写字段名称的添加
INSERT cms_user(name,pwd,email)
VALUE
('rose','jonh123','10@163.com'),
('tow','jonh123','11@163.com'),
('happy','helo123','12@163.com'),
('okok','wor123','13@163.com');
-- (3)INSERT ...SET...(只能添加一条记录)
INSERT cms_user SET
name='good',pwd='goodfsd',email='99@163.com';

-- 删除 cms_user 中 编号是 6的记录
DELETE FROM cms_user WHERE id=6;
-- 清空整个 cms_user 中的数据
-- 不能重置 AUTO_INCREMENT
DELETE FROM cms_user;
-- 清空整个 cms_user 中的数据
-- 能重置 AUTO_INCREMENT
TRUNCATE cms_user;

-- 更新cms_user 中 pwd 值为 123 
-- 要求:编号是 3的记录
UPDATE cms_user SET pwd='123'
WHERE id=3;

-- cms_user 中 给 age中的值都加1岁
UPDATE cms_user SET age=age+1;

-- 查询 cms_user 中 user，address字段所有信息
SELECT address,name
FROM cms_user;

--  查询 cms_user 中 user，address字段所有信息
-- 并且给  address 起别名为 addr
SELECT address AS addr,name
FROM cms_user;
--  查询 cms_user 中 user，address字段所有信息
--给  表起别名 u
SELECT address,name
FROM cms_user AS u;
--  查询 cms_user 中 user，address字段所有信息
--给  表起别名 u，并且标注 字段来着哪个表
SELECT u.address,u.name
FROM cms_user AS u;































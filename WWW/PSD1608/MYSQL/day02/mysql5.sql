-- 更新 cms_user 中 address 值 
--   编号 135  值为1  编号2468 值为2
UPDATE cms_user SET address=1
WHERE id IN(1,3,5);
UPDATE cms_user SET address=2
WHERE id IN(2,4,6,8);
UPDATE cms_user SET address=3
WHERE id IN(7,9);

-- 修改 cms_user中address类型为 SMALLINT UNSIGNED NOT NULL
ALTER TABLE cms_user
MODIFY address SMALLINT 
UNSIGNED NOT NULL;

-- 创建新的表 cms_prov结构
-- 字段  id  pname
CREATE TABLE cms_prov(
  id SMALLINT UNSIGNED KEY AUTO_INCREMENT,
  pname VARCHAR(30) NOT NULL
);
-- 给 cms_prov 添加信息
INSERT cms_prov(pname)
VALUE
('天津'),
('广州'),
('上海'),
('北京'),
('山东');

--  查询 cms_user表信息
--  显示字段   name，address
SELECT name,address FROM cms_user;

--  查询两个表联合查询 cms_user，cms_prov
--  字段  cms_user 中id,name ,cms_prov中pname
--  并排序
SELECT u.id,u.name,p.pname
FROM cms_user AS u
INNER JOIN cms_prov AS p
ON u.address = p.id
ORDER BY u.id ASC;







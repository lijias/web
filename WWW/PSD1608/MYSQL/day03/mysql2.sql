-- 用 左外链接联合查询 LEFT JOIN
-- 左表 : cms_prov  右表:cms_user
-- 字段  ：  name  pname
SELECT u.name,p.pname
FROM cms_prov AS p
LEFT JOIN cms_user AS u
ON u.address = p.id;

-- 用 右外链接联合查询 RIGHT JOIN
-- 左表 : cms_user 右表:cms_prov
-- 字段  ：  name  pname
SELECT u.name,p.pname
FROM cms_user AS u
RIGHT JOIN cms_prov AS p
ON u.address = p.id;



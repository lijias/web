-- 逻辑外键 原理:父表和子表是一个表
-- 创建无限极菜单分类表 category
-- 字段  id(父表id) name菜单名称    pid(外键列)
-- 当前菜单的 id 是下一级菜单的 pid
-- 当前菜单的pid  上一级菜单的id
CREATE TABLE category(
  id SMALLINT UNSIGNED KEY AUTO_INCREMENT,
  name VARCHAR(30) NOT NULL,
  pid SMALLINT UNSIGNED NOT NULL
);
INSERT category(name,pid)
VALUE
('家用电器',0),
('手机,数码',0),
('电脑,办公',0),
('电视',1),
('空调',1),
('洗衣机',1),
('厨卫大电',1),
('合资品牌',4),
('国产品牌',4),
('壁挂式空调',5),
('柜式空调',5),
('滚筒洗衣机',6),
('洗烘一体衣机',6),
('TCL',9),
('乐视',9);

-- 查询  当前菜单名称 ,父级菜单信息的所有记录

SELECT s.name,p.name
FROM category AS s
INNER JOIN (SELECT * FROM category) AS p
ON s.pid=p.id;

















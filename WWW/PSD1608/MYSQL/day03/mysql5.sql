-- 创建 父表 person
-- id pname
CREATE TABLE person(
  id SMALLINT UNSIGNED KEY AUTO_INCREMENT,
  pname VARCHAR(30) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8;
INSERT person(pname)
VALUE
('a'),
('b'),
('c'),
('d');
-- 创建 子表 (外键表)son
-- id  sname pid
CREATE TABLE son(
  id SMALLINT UNSIGNED KEY AUTO_INCREMENT,
  sname VARCHAR(30) NOT NULL,
  pid SMALLINT UNSIGNED NOT NULL,
  FOREIGN KEY(pid) REFERENCES person(id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;
--  先有参考表记录，后有外键表(子表)记录
-- 外键列只能添加  person 中编号  1 2 3 4
-- 能不能 添加  ('tina',6);
INSERT son(sname,pid)
VALUE
('tom',1),
('rose',2),
('alice',4);

-- 先删外键表(子表)记录，后删参考表(父表)记录
-- 父表不能删除 子表中使用的值记录
DELETE FROM person WHERE id=1;











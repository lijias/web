-- 表约束
--  设置两个字段同时为主键
--  aa  bb

--CREATE TABLE test(
--  aa INT PRIMARY KEY,
--  bb INT PRIMARY KEY
-- );  错误的 产生两个主键

--  设置两个字段同时为主键
CREATE TABLE test(
  aa INT,
  bb INT,
  PRIMARY KEY(aa,bb)
 );
--  再加  (1,1) 主键重复 ：主键中两个值同时相同才叫重复
INSERT test(aa,bb)
VALUE
(1,1),
(1,2),
(2,1);











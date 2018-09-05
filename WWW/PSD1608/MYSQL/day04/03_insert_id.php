<?php
header("Content-Type:text/html;charset=utf-8");

//
//1、连接数据库
$link = mysql_connect("localhost",
		"root","root");
//var_dump($link);
//2、打开数据库
mysql_select_db("cms");
//3、操作-没有返回结果集的sql语句
$query = "insert cms_admin(aname,pwd)
		  value
		  ('jerry007',md5('123456'))";

$result = mysql_query($query);
//输出上一次操作的id号
//3、将上一题插入成功后的用户id输出出来。
echo "用户id为：".mysql_insert_id();
  
//4、关闭数据库
mysql_close();









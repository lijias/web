<?php
/*
 * 1、应用mysql函数库，在cms_admin数据库表中
 * 插入一条数据记录，
 *   执行成功返回：用户添加成功。
 *   否则返回：用户添加失败。
 */
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
		  ('jerry01',md5('123456'))";
echo $query;
$result = mysql_query($query);
var_dump($result);
  
//4、关闭数据库
mysql_close();









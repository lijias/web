<?php
header("Content-Type:text/html;charset=utf-8");
//1、连接数据库
$link = mysql_connect("localhost","root","root");
//2、选择默认数据库
mysql_select_db("cms");
//3、操作-有返回结果集的sql语句 返回 资源
$query = "select id,aname,age from 
		  cms_admin where id<2";
$result = mysql_query($query);
//获取查询的结果
var_dump(mysql_fetch_assoc($result));
echo "<hr/>";
var_dump(mysql_fetch_assoc($result));

//4、关闭数据库 释放资源
mysql_close();















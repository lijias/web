<?php
header("Content-Type:text/html;charset=utf-8");
//1、连接数据库
$link = mysql_connect("localhost","root","root");
//2、选择默认数据库
mysql_select_db("cms");
//3、操作-有返回结果集的sql语句 返回 资源
$query = "select id,aname,age from 
		  cms_admin where id<4";
$result = mysql_query($query);
//从资源中获取结果 resulttype MYSQL_BOTH 
//关联和索引数组
var_dump(mysql_fetch_array($result,MYSQL_BOTH));
//resulttype MYSQL_ASSOC 关联数组
echo "<hr/>";
var_dump(mysql_fetch_array($result,MYSQL_ASSOC));
//resulttype MYSQL_NUM 索引数组
echo "<hr/>";
var_dump(mysql_fetch_array($result,MYSQL_NUM));

//4、关闭数据库 释放资源
mysql_close();















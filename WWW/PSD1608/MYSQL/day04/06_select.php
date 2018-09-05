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
//取得一行结果 赋值给 $row
$row = mysql_fetch_array($result,MYSQL_ASSOC);

while($row){
	//判断完 $row的值，若不为false，则输出
	var_dump($row);
	echo "<hr/>";
	//再次从mysql_query查询的资源中获取结果
	// row可能是数组 也有可能是false
	$row = mysql_fetch_array($result,MYSQL_ASSOC);
}


//4、关闭数据库 释放资源
mysql_close();















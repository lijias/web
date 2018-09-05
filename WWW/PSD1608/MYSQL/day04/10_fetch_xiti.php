<?php
/*
 *5、应用mysql获取结果的函数，将cms_admin表中
 *的数据读取出来放到table表格中。 
 */
header("Content-Type:text/html;charset=utf-8");
//1、连接数据库
$link = mysql_connect("localhost",
		              "root",
		              "root");
//2、选择默认数据库
mysql_select_db("cms");
//3、操作-有返回结果集的sql语句 返回 资源
$query = "select id,aname,age from 
		  cms_admin";
$result = mysql_query($query);
//从mysql_query产生的资源中获取结果
//mysql_fetch_assoc
//输出table表格的外边框
echo "<table border='1' width='500'>";
//输出table表格的表头
echo "<tr><th>ID</th><th>姓名</th>
	  <th>年龄</th></tr>";
// 循环从数据库中读取出数据
 while($row = mysql_fetch_assoc($result)){
 	//循环输出table表格的每一行
 	echo "<tr>";
 	echo "<td>".$row['id']."</td>";
 	echo "<td>".$row['aname']."</td>";
 	echo "<td>".$row['age']."</td>";
 	echo "</tr>";
 }

echo "</table>";

echo "共".mysql_num_rows($result)."行";
//4、关闭数据库 释放资源
mysql_close();















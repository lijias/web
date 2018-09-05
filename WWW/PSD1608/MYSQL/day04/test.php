<?php
//1、连接数据库
mysql_connect("localhost","root","root");
//2、选择默认数据库
mysql_select_db("cms");
//3、操作 - 循环往数据库中放入50条数据
for($i=1;$i<=50;$i++){
	$query = "insert into cms_admin
			  (aname,pwd)
			 values
			  ('tom".$i."','123')";
	mysql_query($query);
} 
//4、关闭数据库
mysql_close();
?>









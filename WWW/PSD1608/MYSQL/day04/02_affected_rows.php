<?php
header("Content-Type:text/html;charset=utf-8");
//1、连接数据库
$link = mysql_connect("localhost","root","root");
//2、选择数据库
mysql_select_db("cms");
//3、操作-更新数据库cms_admin tom的年龄
$query = "update cms_admin 
		  set age=20
		  where id=1";
$result = mysql_query($query);
//2、在上一题完成的基础上，添加返回被影响的行数。
echo "被影响行数".mysql_affected_rows();
echo "<br/>";
if($result==true){
	
	echo "操作成功";
}else{
	echo "操作失败";
}










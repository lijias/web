<?php
header('Content-Type:text/html;charset=utf-8');
//4、应用PDO准备语句。在数据库表cms_user中更新数据，将任意一个用户的密码改为123
$dsn="mysql:host=localhost;dbname=cms2";
$pdo=new PDO($dsn, "root", "root");
$query="update cms_user set password=123 where id=2";
$p=$pdo->prepare($query);
$re=$p->execute();
if ($re){
	echo "c";
}
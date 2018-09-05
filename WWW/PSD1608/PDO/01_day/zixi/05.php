<?php
header('Content-Type:text/html;charset=utf-8');
/*
 * 5、应用PDO准备语句。在数据库表cms_user中更新数据。将用户id用参数
?形式指定。执行sql语句后输出执行结果。
*/
$dsn="mysql:host=localhost;dbname=cms2";
$pdo=new PDO($dsn, "root", "root");
$query="update cms_user set password=123 where id=?";
$p=$pdo->prepare($query);
$id=7;
$p->bindParam(1,$id);
$re=$p->execute();
if ($re){
	echo "c";
}
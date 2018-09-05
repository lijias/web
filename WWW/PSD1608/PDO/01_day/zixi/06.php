<?php
header('Content-Type:text/html;charset=utf-8');
//6、应用PDO准备语句。删除cms_user表中的一条数据，要求制定where条件时id为参数
$dsn="mysql:host=localhost;dbname=cms2";
$pdo=new PDO($dsn, "root", "root");
$query="delete from cms_user where id=?";
$p=$pdo->prepare($query);
$id=7;
$p->bindParam(1,$id);
$re=$p->execute();
if ($re){
	echo "c";
}
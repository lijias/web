<?php
header('Content-Type:text/html;charset=utf-8');
/*
 * 6、应用PDO准备语句。删除cms_user表中的一条数据，要求制定where条件时id为参数
 */
$dsn="mysql:host=localhost;dbname=cms2";
$pdo=new PDO($dsn, "root", "root");
//通知mysql编译sql语句,不执行
$query="delete from cms_user where id=:id";
//返回PDOSStatement类对象
$p=$pdo->prepare($query);
//参数绑定
$id="3";
$p->bindParam(":id", $id);
//PDOSStatement类对象通知mysql执行sql语句
$result=$p->execute();
if ($result) {
	echo "成功";
}else {
	echo "失败";
}
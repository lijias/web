<?php
header('Content-Type:text/html;charset=utf-8');
//4、应用PDO准备语句。在数据库表cms_user中更新数据，将任意一个用户的密码改为123
$dsn="mysql:host=localhost;dbname=cms2";
$pdo=new PDO($dsn, "root", "root");
//通知mysql编译sql语句,不执行
$query="update cms_user set password=? where id=?";
//返回PDOSStatement类对象
$p=$pdo->prepare($query);
/*
 * 5、应用PDO准备语句。在数据库表cms_user中更新数据。将用户id用参数
   ?形式指定。执行sql语句后输出执行结果。
 */
//参数绑定
$password="dsa54654";
$p->bindParam(1, $password);
$id=6;
$p->bindParam(2, $id);
//PDOSStatement类对象通知mysql执行sql语句
$result=$p->execute();
if ($result) {
	echo "成功";
}else {
	echo "失败";
}
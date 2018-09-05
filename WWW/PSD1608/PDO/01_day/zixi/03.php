<?php
header('Content-Type:text/html;charset=utf-8');
//3、应用PDO类,查询cms_user表，将表中查询到的数据输出出来。
$pdo=new PDO("mysql:host=localhost;dbname=cms2", "root", "root");
$statement="select id,username,password from cms_user";
$p=$pdo->query($statement);
foreach ($p as $v){
	echo $v['id']."<br/>";
	echo $v['username']."<br/>";
	echo $v['password']."<br/>";
}

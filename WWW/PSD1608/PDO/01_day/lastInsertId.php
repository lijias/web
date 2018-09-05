<?php
header('Content-Type:text/html;charset=utf-8');
//2、应用PDO类，在cms_user表中插入一条数据，获取插入数据的ID
//$dsn="mysql:host=localhost;dbname=cms2";
//$username="root";
//$passwd"root";
//$pdo=new PDO($dsn, $username, $passwd);
$pdo=new PDO("mysql:host=localhost;dbname=cms2", "root", "root");
$query="insert cms_user (username,password) value ('am','am123')";
echo $pdo->exec($query);
echo "<br/>";
var_dump($pdo->lastInsertId());
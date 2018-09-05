<?php
header('Content-Type:text/html;charset=utf-8');
////2、应用PDO类，在cms_user表中插入一条数据，获取插入数据的ID
$pdo=new PDO("mysql:host=localhost;dbname=cms2", "root", "root");
$query="insert cms_user (username,password) value ('wddwm','21as3d213as1d32')";
$pdo->exec($query);
echo $pdo->lastInsertId();
<?php
header('Content-Type:text/html;charset=utf-8');
//1、应用PDO类完成向项目的数据库表cms_user中更新一条数据，观察更新后的返回。
$pdo=new PDO("mysql:host=localhost;dbname=cms2", "root", "root");
$query="update cms_user  set username='zds' where id=20";
echo $pdo->exec($query);
<?php
	header('Content-Type:text/html;charset=utf-8');
	//通过php调用存储过程
	
	$typeId = 3;
	
	
	$url = "mysql:host=localhost;dbname=news";
	$user = "root";
	$pwd = "root";
	$conn = new PDO($url,$user,$pwd);
	$conn->query("set names utf8");
	$result = $conn->exec("call delNewsType({$typeId})");
	
	echo $result;
	
	
	
	
	
	
	
?>
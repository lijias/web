<?php 
	header("content-type:text/html;charset=utf-8");
	
	//删除记录,系统自动调用触发器
	$url = "mysql:host=localhost;dbname=hello";
	$user = "root";
	$pwd = "root";
	$conn = new PDO($url,$user,$pwd);
	$conn->query("set names utf8");
	$result = $conn->exec("delete from bumen where bmName='测试部';");
	
	echo $result;
	
?>
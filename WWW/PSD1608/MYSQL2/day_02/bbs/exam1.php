<?php
	header('Content-Type:text/html;charset=utf-8');
	//通过php调用存储过程
	
	$typeId = 2;
	
	$conn = mysql_connect("localhost","root","root");
	mysql_query("set names utf8");
	mysql_select_db("news");
	mysql_query("call delNewsType({$typeId})");
	$row = mysql_affected_rows($conn);
	mysql_close($conn);
	
	echo $row;
	
	
	
	
	
	
	
	
	
	
	
	
	
	
?>
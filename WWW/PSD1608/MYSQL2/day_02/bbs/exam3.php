<?php
	header('Content-Type:text/html;charset=utf-8');
	//调用存储过程,并有输出参数
	
	$conn = mysql_connect("localhost","root","root");
	mysql_query("set names utf8");
	mysql_select_db("test");
	//调用存储过程
	mysql_query("call hello(@aa,7)");
	//获得输出参数的值
	$rs = mysql_query("select @aa as msg");
	$row = mysql_fetch_array($rs);
	echo $row["msg"];
	
	mysql_free_result($rs);
	mysql_close($conn);
?>








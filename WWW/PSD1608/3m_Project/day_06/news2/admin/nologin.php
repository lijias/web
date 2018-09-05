<?php 
	//判断当前用户是否登陆
	session_start();
	if($_SESSION["userMsg"] == NULL)
	{
		header("location:success.php?act=nologin");
	}
?>
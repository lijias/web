<?php 
	session_start();
	
	if($_SESSION["userMsg"] == NULL)
	{
		header("location:success.php?act=nologin");
	}
?>
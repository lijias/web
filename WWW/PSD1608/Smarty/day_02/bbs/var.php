<?php 
	header("content-type:text/html;charset=utf-8");
	include_once 'smarty/Smarty.class.php';
	$smarty = new Smarty();
	
	
	//$smarty->assign("userName","田七");
	$smarty->assign("str1","<h1>社会主义好</h1>");
	$smarty->assign("str2","社会主义好社会主义好社会主义好社会主义好社会主义好社会主义好");
	$smarty->assign("str3","社会主义好\n社会主义好\n社会主义好\n社会主义好\n社会主义好\n社会主义好");
	$smarty->display("var.html");
?>





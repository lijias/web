<?php 
	header("content-type:text/html;charset=utf-8");
	include_once 'smarty/Smarty.class.php';
	include_once 'dbio/WordInfo.php';
	include_once 'nologin.php';
	$smarty = new Smarty();
	
	//查询所有留言
	$wordInfo = WordInfo::getWordInfo();
	
	
	$smarty->assign("wordInfo",$wordInfo);
	$smarty->display("show.html");
?>





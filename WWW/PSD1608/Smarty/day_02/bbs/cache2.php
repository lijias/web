<?php 
	header("content-type:text/html;charset=utf-8");
	include_once 'smarty/Smarty.class.php';
	$smarty = new Smarty();
	
	$smarty->caching = true;
	$smarty->cache_lifetime = 5;
	
	
	$smarty->assign("t1",time());
	$smarty->assign("t2",time());
	$smarty->assign("t3",time());
	$smarty->display("cache2.html");
?>





<?php 
	header("content-type:text/html;charset=utf-8");
	include_once 'smarty/Smarty.class.php';
	$smarty = new Smarty();
	
	//开启缓存
	$smarty->caching = true;
	//设置缓存时间
	$smarty->cache_lifetime = 3;
	//设置缓存目录
	//$smarty->setCacheDir("cache");
	
	
	$smarty->assign("t1",time());
	$smarty->assign("t2",time());
	$smarty->assign("t3",time());
	$smarty->display("cache1.html");
?>





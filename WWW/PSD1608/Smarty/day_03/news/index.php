<?php 
	header("content-type:text/html;charset=utf-8");
	include_once 'smarty/Smarty.class.php';
	include_once 'dbio/NewsTypes.php';
	include_once 'dbio/NewsArticles.php';
	$smarty = new Smarty();
	
	//查询所有分类
	$newsTypes = NewsTypes::getNewsTypes();
	//给每个分类，添加两条新闻
	foreach ($newsTypes as $k=>$v)
	{
		$result = NewsArticles::getNewsTwo($v["typeId"]);
		$v["news"] = $result;//给$v多加一个news值
		$newsTypes[$k] = $v;//将数组中的值变更一下
	}
	$hotNews = NewsArticles::getNewsHot();
	$allNews = NewsArticles::getAllNews();
	
	
	
	foreach ($newsTypes as $k=>$v)
	{
		$result= NewsArticles::getAllTypeNews($v["typeId"]);	
		$v["count"] = $result;//给$v多加一个news值
		$newsTypes[$k] = $v;//将数组中的值变更一下
	}
	
	
	

	$smarty->assign("allNews",$allNews);
	$smarty->assign("hotNews",$hotNews);
	$smarty->assign("newsTypes",$newsTypes);
	$smarty->display("index.html");
?>








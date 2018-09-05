<?php 
	header("content-type:text/html;charset=utf-8");
	include_once 'smarty/Smarty.class.php';
	include_once 'dbio/BbsInfo.php';
	$smarty = new Smarty();
	
	//开启页面缓存
	$smarty->caching = true;
	$smarty->cache_lifetime = 240;
	
	//获得当前页的页码
	$currentPage = $_GET["currentPage"];
	$currentPage = $currentPage==NULL?1:$currentPage;
	
	
	$result = BbsInfo::getBbsInfo($currentPage);
	$totalPage = $result[0];//总页数
	$bbsInfo = $result[1];//页面的记录
	
	
	$smarty->assign("totalPage",$totalPage);
	$smarty->assign("currentPage",$currentPage);
	$smarty->assign("bbsInfo",$bbsInfo);
	$smarty->display("index.html",$currentPage);//注意
?>





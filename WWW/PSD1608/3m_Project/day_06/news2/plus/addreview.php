<?php
	header('Content-Type:text/html;charset=utf-8');
	include_once '../dbio/Reviews.php';
	include_once '../dbio/NewsArticles.php';
	include_once 'StaticHtml.php';
	//通过ajax提交，实现发表评论
	
	//获得ajax提交的数据
	$articleId = $_POST["articleId"];
	$face = $_POST["face"];
	$userName = $_POST["userName"];
	$content = $_POST["content"];
	//添加评论
	if($content != NULL)
	{
		$result = Reviews::addReview($articleId, $userName, $content, $face);
	}
	else
	{
		//刚打开页面，将该新闻的添击量加一
		NewsArticles::addHints($articleId);
		$obj = new StaticHtml();
		$obj->index();
	}
	//查询该新闻的所有评论
	$reviews = Reviews::getReviewByArticleId($articleId);
	$str = "";
	foreach ($reviews as $k=>$v)
	{
		$bgColor = $k%2==0?"#FFFBD6":"#CDE7F0";
		$str .= "<div class='reviewDiv' style='background-color:{$bgColor};'>
	    			<div class='reviewDiv1'>
	      			  <img src='../../images/face/{$v["face"]}'>游客：{$v["userName"]} 于 [{$v["dateandtime"]}] 发表评论：
	    			</div>
	    			<div class='reviewDiv1'>{$v["body"]}</div>
	    			<div class='reviewDiv1'><hr class='hr1'></div>
	  			 </div>";
	}
	echo $str;
	
	
	
	
	
	
	
	
?>
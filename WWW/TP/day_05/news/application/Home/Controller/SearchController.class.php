<?php
namespace Home\Controller;


class SearchController extends BaseController{
	
	function index()
	{
		$searchType = $_POST["searchType"];
		$keyword = $_POST["keyword"];
		
		$result = M()->query("select * from newsArticles where $searchType like '%$keyword%'");
		$count = M()->query("select count(*) from newsArticles where $searchType like '%$keyword%'");
		$countnews = $count[0]['count(*)'];
		
		$this->assign("countnews",$countnews);
		$this->assign("result",$result);
		$this->display();	
	}

}
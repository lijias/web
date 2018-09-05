<?php
	namespace Home\Controller;

	class NewsController extends BaseController{
		
		function index()
		{
			$articleId  = $_GET["articleId"];
			$result = M("newsarticles")->where("articleId={$articleId}")->find();
			$reviews = M("reviews")->where("articleId={$articleId}")->select();
			
			$imagepath = $result['imagepath'];
			
			$this->assign("reviews",$reviews);
			$this->assign("imagepath",$imagepath);
			$this->assign("result",$result);
			$this->display();
		}
	}
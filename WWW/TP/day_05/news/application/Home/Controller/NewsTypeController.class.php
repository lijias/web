<?php
namespace Home\Controller;


	class NewsTypeController extends BaseController{
		
		function index($typeId){
			//单独查询一个分类下的新闻
			$type = M("newstypes")->where("typeId={$typeId}")->find();
			//该分类下的新闻
			$articles = M("newsarticles")->where("typeId={$typeId}")->select();
		
			$this->assign("articles",$articles);
			$this->assign("type",$type);
			$this->display();
		}
	}
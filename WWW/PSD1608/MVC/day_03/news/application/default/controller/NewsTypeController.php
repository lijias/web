<?php 
	class NewsTypeController extends BaseController
	{
		public function indexAction()
		{
			$typeId = $_GET["typeId"];
			//查询当前分类下所有新闻
			$newsInfo = M("newsarticles")->field("articleId,title")->where("typeId={$typeId}")->select();
			//查询当前分类的详细信息
			$newsType = M("newstypes")->where("typeId={$typeId}")->find();
			
			
			$this->assign("newsType",$newsType);
			$this->assign("newsInfo",$newsInfo);
			$this->display("newstype.html");
		}
	}
?>





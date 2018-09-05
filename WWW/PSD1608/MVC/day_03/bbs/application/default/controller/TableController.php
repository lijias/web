<?php 
	class TableController extends Controller
	{
		public function indexAction()
		{
			$newsInfo = M("newsarticles")->join("newstypes on newsarticles.typeId=newstypes.typeId")->order("articleId")->select();
			
			
			
			$this->assign("newsInfo",$newsInfo);
			$this->display("table.html");
		}
	}
?>
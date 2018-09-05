<?php 
	class Page1Controller extends Controller
	{
		public function actionIndex($currentPage=1)
		{
			$this->setPageTitle("数据库分页");
			//分页变量
			$pageSize = 3;
			$totalRow = 0;
			$totalPage = 0;
			$start = ($currentPage-1)*$pageSize;
			
			//求总记录数、总页数
			$totalRow = BbsInfo::models()->count();
			//$totalRow = BbsInfo::models()->count("bbsId>3");
			//$totalRow = BbsInfo::models()->countBySql("select sum(clickTimes) from bbsInfo");
			$totalPage = ceil($totalRow/$pageSize);
			
			
			$bbsInfo = BbsInfo::models()->findAll(array(
				"offset"=>$start,
				"limit"=>$pageSize
			));
			
			
			
			
			$data = array(
				"bbsInfo"=>$bbsInfo,
				"currentPage"=>$currentPage,
				"totalPage"=>$totalPage
			);
			$this->render("index",$data);
		}
	}
?>







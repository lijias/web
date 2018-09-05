<?php 
	class Page2Controller extends Controller
	{
		public function actionIndex()
		{
			$this->setPageTitle("自定义分页类");
			
			//分页类
			$totalRow = BbsInfo::models()->count();
			$page = new Page($totalRow,3);
			
			$bbsInfo = BbsInfo::models()->findAll(array(
				"offset"=>$page->firstRow,
				"limit"=>$page->listRows
			));
			
			
			$data = array(
				"bbsInfo"=>$bbsInfo,
				"pageList"=>$page->show()
			);
			$this->render("index",$data);
		}
	}
?>








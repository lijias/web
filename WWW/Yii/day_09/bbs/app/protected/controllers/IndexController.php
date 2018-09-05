<?php 
	class IndexController extends BaseController
	{
		public function actionIndex()
		{
 			$this->setPageTitle("网站首页");
 			
 			//查询表中的所有记录
 			//$bbsInfo = BbsInfo::models()->findAll();
 			//$bbsInfo = BbsInfo::models()->findAll("bbsId>3");
 			/*$bbsInfo = BbsInfo::models()->findAll(array(
 				"condition"=>"bbsId>5",//条件
 				"order"=>"clickTimes desc",//排序
 				"offset"=>0,//起始值
 				"limit"=>3//条数
 			));*/
 			$bbsInfo = BbsInfo::models()->findAllBySql("select * from bbsInfo");
 			
 			
 			$data = array(
 				"bbsInfo"=>$bbsInfo
 			);
			$this->render("index",$data);
		}
		//删除记录
		function actionDelete($bbsId)
		{
			//$result = BbsInfo::models()->deleteAll("bbsId={$bbsId}");
			$result = BbsInfo::models()->deleteByPk($bbsId);
			
			$this->redirect("index.php?r=success/index/act/delete/rst/{$result}");
		}
	}
?>









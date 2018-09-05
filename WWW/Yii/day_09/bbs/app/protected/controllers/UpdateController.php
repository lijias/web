<?php 
	class UpdateController extends Controller
	{
		public function actionIndex($bbsId)
		{
			$this->setPageTitle("修改记录");
			
			//通过bbsId查询一条记录
			//$bbsInfo = BbsInfo::models()->find();
			//$bbsInfo = BbsInfo::models()->find("bbsId={$bbsId}");
			//$bbsInfo = BbsInfo::models()->findByPk($bbsId);
			$bbsInfo = BbsInfo::models()->findBySql("select * from bbsInfo where bbsId={$bbsId}");
			
			
			
			$data = array(
				"bbsInfo"=>$bbsInfo
			);
			$this->render("index",$data);
		}
		//修改记录
		public function actionUpdate($bbsId)
		{
			//$result = BbsInfo::models()->updateAll($_POST);
			//$result = BbsInfo::models()->updateAll($_POST,"bbsId={$bbsId}");
			$result = BbsInfo::models()->updateByPk($bbsId,$_POST);
			
			
			$this->redirect("index.php?r=success/index/act/update/rst/{$result}/bbsId/{$bbsId}");
		}
	}
?>








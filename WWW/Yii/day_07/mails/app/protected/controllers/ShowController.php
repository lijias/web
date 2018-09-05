<?php 
	class ShowController extends Controller
	{
		public function actionIndex($mailId)
		{
			//通过mailId查询一条记录
			$db = Yii::app()->db;
			$st = $db->createCommand("select * from mailInfo where mailId={$mailId}");
			$mailInfo = $st->queryRow();
			
			
			$data = array(
				"mailInfo"=>$mailInfo
			);
			$this->renderPartial("index",$data);
		}
	}
?>







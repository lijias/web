<?php 
	class IndexController extends Controller
	{
		public function actionIndex()
		{
			//查询所有邮件
			$db = Yii::app()->db;
			$st = $db->createCommand("select * from mailInfo");
			$mailInfo = $st->queryAll();
			
			
			$data = array(
				"mailInfo"=>$mailInfo
			);
			$this->renderPartial("index",$data);
		}
		//删除记录
		public function actionDelete($mailId)
		{
			$db = Yii::app()->db;
			$st = $db->createCommand("delete from mailInfo where mailId={$mailId}");
			$result = $st->execute();
			
			$this->redirect("index.php?r=index/index");
		}
	}
?>










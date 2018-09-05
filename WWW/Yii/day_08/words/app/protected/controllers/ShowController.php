<?php 
	class ShowController extends Controller
	{
		public function actionIndex()
		{
			$db = Yii::app()->db;
			$st = $db->createCommand("select * from wordInfo a inner join userInfo b on a.sender=b.userId");
			$wordInfo = $st->queryAll();
			
			
			$data = array(
				"wordInfo"=>$wordInfo
			);
			$this->renderPartial("index",$data);
		}
	}
?>








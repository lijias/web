<?php 
	class LoginController extends Controller
	{
		public function actionIndex()
		{
			//设置页面的标题
			$this->setPageTitle("会员登陆");
			
			$db = Yii::app()->db;
			$st = $db->createCommand("select * from bbsInfo");
			$rs = $st->queryAll();
			
			//print_r($rs);
			
			
			$this->render("index");
		}
	}
?>






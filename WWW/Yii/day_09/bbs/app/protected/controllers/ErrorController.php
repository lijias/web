<?php 
	class ErrorController extends Controller
	{
		public function actionIndex()
		{
			$this->setPageTitle("系统错误页面");
			
			//获得错误信息
			$error = Yii::app()->errorHandler->error;
			
			
			$this->render("index",$error);
		}
	}
?>








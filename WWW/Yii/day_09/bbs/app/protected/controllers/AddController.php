<?php 
	class AddController extends Controller
	{
		public function actionIndex()
		{
			$this->setPageTitle("添加记录");
			
			
			$this->render("index");
		}
		//添加记录
		public function actionAdd()
		{
			$model = BbsInfo::models();
			$model->title = $_POST["title"];
			$model->clickTimes = $_POST["clickTimes"];
			$result = $model->save();
			
			$this->redirect("index.php?r=success/index/act/add/rst/{$result}");
		}
	}
?>










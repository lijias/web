<?php 
	class WriteController extends Controller
	{
		public function actionIndex()
		{
			$this->setPageTitle("发表文章");
			
			
			
			$this->render("index");
		}
	}
?>








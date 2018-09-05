<?php 
	class Cache1Controller extends Controller
	{
		public function actionIndex()
		{
			$this->setPageTitle("片段缓存");
			
			
			$data = array(
				"t1"=>time(),
				"t2"=>time(),
				"t3"=>time()
			);
			$this->render("index",$data);
		}
	}
?>








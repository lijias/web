<?php 
	class Cache2Controller extends Controller
	{
		public function actionIndex()
		{
			$this->setPageTitle("页面缓存");
			
			
			$data = array(
				"t1"=>time(),
				"t2"=>time(),
				"t3"=>time()
			);
			$this->render("index",$data);
		}
		//页面缓存
		public function filters()
		{
			return array(
				array(
					"system.web.widgets.COutputCache",
					"duration"=>3
				)
			);
		}
	}
?>










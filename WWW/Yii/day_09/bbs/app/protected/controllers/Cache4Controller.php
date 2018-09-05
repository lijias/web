<?php 
	class Cache4Controller extends Controller
	{
		public function actionIndex()
		{
			$this->setPageTitle("动态缓存");
			
			$data = array(
				"t1"=>time(),
				"t3"=>time()
			);
			$this->render("index",$data);
		}
		//返回不想缓存的数据
		public function hello()
		{
			return time();
		}
		//开启页面缓存
		public function filters()
		{
			return array(
				array(
					"system.web.widgets.COutputCache",
					"duration"=>10
				)
			);
		}
	}
?>










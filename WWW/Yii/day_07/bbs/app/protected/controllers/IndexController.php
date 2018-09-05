<?php 
	class IndexController extends Controller
	{
		public function actionIndex()
		{
			//设置页面标题
			$this->setPageTitle("网站首页");
			
			$userName = "张三";
			$cityList = array("北京","上海","深圳");
			
			
			//显示指定视图
			$data = array(
				"userName"=>$userName,
				"age"=>30,
				"cityList"=>$cityList
			);
			$this->render("index",$data);
		}
	}
?>








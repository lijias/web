<?php 
	namespace Home\Controller;
	use Think\Controller;
	
	class IndexController extends Controller
	{
		public function index()
		{
			$cityList = array("北京","上海","深圳","山西");
			$userInfo = array("userName"=>"田七","sex"=>"男","address"=>"北京");
			
			
			$this->assign("cityList",$cityList);
			$this->assign("userInfo",$userInfo);
			$this->assign("userName","李四");
			$this->assign("age",30);
			$this->display();
		}
	}
?>








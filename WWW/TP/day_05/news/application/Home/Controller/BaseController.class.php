<?php 
	namespace Home\Controller;
	use Think\Controller;
	
	//所有控制器的父类
	class BaseController extends Controller
	{
		public function _initialize()
		{
			$newsTypes = M("newstypes")->select();
			
			$this->assign("newsTypes",$newsTypes);
		}
	}
?>






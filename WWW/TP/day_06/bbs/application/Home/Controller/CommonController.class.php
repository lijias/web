<?php 
	namespace Home\Controller;
	use Think\Controller;
	
	class CommonController extends Controller
	{
		public function index()
		{
			//调用公用函数
			//$a = hello();
			//echo $a;
			
			//$a = sum(10,20);
			//echo $a;
			
			
			
			$this->assign("aaa",100);
			$this->assign("bbb",200);
			$this->display();
		}
	}
?>









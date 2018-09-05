<?php 
	namespace Home\Controller;
	use Think\Controller;
	
	class AjaxController extends Controller
	{
		public function index()
		{
			$this->display();
		}
		//ajax处理方法
		public function haha()
		{
			$msg = $_POST["msg"];
			
			echo "你输入的是：{$msg}";
		}
	}
?>






<?php 
	namespace Home\Controller;
	use Think\Controller;
	
	class AddController extends Controller
	{
		public function index()
		{
			$this->display();
		}
		//添加记录
		public function add()
		{
			//$result = M("bbsinfo")->add($_POST);
			$result = M("bbsinfo")->data($_POST)->add();
			
			if($result > 0)
			{
				$this->success("添加记录成功！",__APP__."/Index/index.html");
				//$this->redirect("Index/index",NULL,3,"添加记录成功！");
			}
			else
			{
				$this->error("添加记录失败！",__APP__."/Add/index.html");
				//$this->redirect("Add/index",NULL,3,"添加记录失败！");
			}
		}
	}
?>







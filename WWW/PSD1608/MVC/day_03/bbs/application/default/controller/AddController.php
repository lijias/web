<?php 
	class AddController extends Controller
	{
		public function indexAction()
		{
			$this->display("add.html");
		}
		//添加记录
		public function addAction()
		{
			//注意：用$_POST当参数，表单元素名与字段名必须相同
			$result = M("bbsinfo")->insert($_POST);
			//$result = D("BbsInfo")->insert($_POST);
			if($result > 0)
			{
				$this->success("添加记录成功！",APP."/Index/index.html");
				//$this->redirect(APP."/Index/index.html");
			}
			else
			{
				$this->success("添加记录失败！",APP."/Add/index.html");
				//$this->redirect(APP."/Add/index.html");
			}
		}
	}
?>







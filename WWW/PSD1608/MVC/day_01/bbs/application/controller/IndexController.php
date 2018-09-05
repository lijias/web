<?php 
	class IndexController extends Controller
	{
		public function indexAction()
		{
			$this->assign("userName","田七");
			$this->display("index.html");
		}
	}
?>







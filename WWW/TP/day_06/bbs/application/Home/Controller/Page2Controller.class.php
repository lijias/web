<?php 
	namespace Home\Controller;
	use Think\Controller;
	use Think\Page;//导入分页类
	
	class Page2Controller extends Controller
	{
		public function index()
		{
			//获得总记录数
			$totalRow = M("bbsinfo")->count();
			//实例化分页类
			$page = new Page($totalRow,3);
			
			
			$bbsInfo = M("bbsinfo")->limit($page->firstRow,$page->listRows)->select();
			
			
			$this->assign("pageList",$page->show());//分页栏
			$this->assign("bbsInfo",$bbsInfo);
			$this->display();
		}
	}
?>









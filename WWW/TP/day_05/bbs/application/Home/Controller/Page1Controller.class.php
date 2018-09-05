<?php 
	namespace Home\Controller;
	use Think\Controller;
	
	class Page1Controller extends Controller
	{
		public function index($currentPage=1)
		{
			//分页变量
			$pageSize = 3;
			$totalRow = M("bbsinfo")->count();
			$totalPage = ceil($totalRow/$pageSize);
			$start = ($currentPage-1)*$pageSize;
			
			
			$bbsInfo = M("bbsinfo")->limit($start,$pageSize)->select();
			
			
			$this->assign("totalPage",$totalPage);
			$this->assign("currentPage",$currentPage);
			$this->assign("bbsInfo",$bbsInfo);
			$this->display();
		}
	}
?>








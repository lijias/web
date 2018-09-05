<?php 
	class PageController extends Controller
	{
		public function indexAction()
		{
			//分页变量
			$currentPage = $_GET["currentPage"];
			$currentPage = $currentPage==NULL?1:$currentPage;
			$pageSize = 3;
			$totalRow = M("bbsinfo")->count();
			$totalPage = ceil($totalRow/$pageSize);
			$start = ($currentPage-1)*$pageSize;
			
			
			$bbsInfo = M("bbsinfo")->limit("{$start},{$pageSize}")->select();
			
			
			$this->assign("currentPage",$currentPage);
			$this->assign("totalPage",$totalPage);
			$this->assign("bbsInfo",$bbsInfo);
			$this->display("page.html");
		}
	}
?>




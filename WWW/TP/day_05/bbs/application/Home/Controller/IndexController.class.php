<?php 
	namespace Home\Controller;
	use Think\Controller;
	
	class IndexController extends Controller
	{
		public function index()
		{
			//$bbsInfo = D("BbsInfo")->select();
			//$bbsInfo = D("bbsinfo")->select();
			$bbsInfo = M("bbsinfo")->select();
			//$bbsInfo = M("bbsinfo")->where("bbsId>3")->select();
			//$bbsInfo = M("bbsinfo")->order("clickTimes desc")->select();
			//$bbsInfo = M("bbsinfo")->limit(0,3)->select();
			//$bbsInfo = M("bbsinfo")->field("bbsId,title")->select();
			
			
			$this->assign("bbsInfo",$bbsInfo);
			$this->display();
		}
		//删除记录
		public function delete($bbsId)
		{
			$result = M("bbsinfo")->where("bbsId={$bbsId}")->delete();
			
			if($result > 0)
			{
				$this->success("删除记录成功！",__APP__."/Index/index.html");
			}
			else
			{
				$this->success("删除记录失败！",__APP__."/Index/index.html");
			}
		}
	}
?>











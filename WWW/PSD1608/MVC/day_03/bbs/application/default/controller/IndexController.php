<?php 
	class IndexController extends Controller
	{
		//相当于子类构造函数
		public function _initialize()
		{
			//echo "大家好";
		}
		public function indexAction()
		{
			//$bbsInfo = D("BbsInfo")->select();
			//$bbsInfo = M("bbsinfo")->field("bbsId,title")->select();
			$bbsInfo = M("bbsinfo")->select();
			//$bbsInfo = D("BbsInfo")->where("bbsId>5")->select();
			//$bbsInfo = M("bbsinfo")->where("bbsId>3")->select();
			//$bbsInfo = M("bbsinfo")->order("clickTimes desc")->select();
			//$bbsInfo = M("bbsinfo")->where("bbsId>3")->order("clickTimes desc")->select();
			//$bbsInfo = M("bbsinfo")->limit("0,3")->select();
			
			
			$this->assign("bbsInfo",$bbsInfo);
			$this->display("index.html");
		}
		//删除记录
		public function deleteAction()
		{
			$bbsId = $_GET["bbsId"];
			
			$result = M("bbsinfo")->where("bbsId={$bbsId}")->delete();
			if($result > 0)
			{
				$this->success("删除记录成功！",APP."/Index/index.html");
			}
			else
			{
				$this->success("删除记录失败！",APP."/Index/index.html");
			}
		}
	}
?>











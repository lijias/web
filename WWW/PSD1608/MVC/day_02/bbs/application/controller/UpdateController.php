<?php 
	class UpdateController extends Controller
	{
		public function indexAction()
		{
			$bbsId = $_GET["bbsId"];
			//查询一条记录
			$bbsInfo = M("bbsinfo")->where("bbsId={$bbsId}")->find();
			
			
			$this->assign("bbsInfo",$bbsInfo);
			$this->display("update.html");
		}
		//修改记录
		public function updateAction()
		{
			$bbsId = $_GET["bbsId"];
			$result = M("bbsinfo")->where("bbsId={$bbsId}")->update($_POST);
			if($result > 0)
			{
				$this->success("修改记录成功！",APP."/Index/index.html");
			}
			else
			{
				$this->success("修改记录失败！",APP."/Update/index/bbsId/{$bbsId}.html");
			}
		}
	}
?>







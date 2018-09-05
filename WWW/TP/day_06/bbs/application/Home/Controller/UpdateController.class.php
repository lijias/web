<?php 
	namespace Home\Controller;
	use Think\Controller;
	
	class UpdateController extends Controller
	{
		public function index($bbsId)
		{
			$bbsInfo = M("bbsinfo")->where("bbsId={$bbsId}")->find();
			
			
			$this->assign("bbsInfo",$bbsInfo);
			$this->display();
		}
		//修改记录
		public function update($bbsId)
		{
			$result = M("bbsinfo")->where("bbsId={$bbsId}")->save($_POST);
			
			if($result > 0)
			{
				$this->success("修改记录成功！",__APP__."/Index/index.html");
			}
			else
			{
				$this->success("修改记录失败！",__APP__."/Update/index/bbsId/{$bbsId}.html");
			}
		}
	}
?>








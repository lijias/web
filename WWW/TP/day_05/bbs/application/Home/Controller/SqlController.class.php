<?php 
	namespace Home\Controller;
	use Think\Controller;
	
	class SqlController extends Controller
	{
		public function index()
		{
			$bbsInfo = M()->query("select * from bbsInfo");
			
			
			$this->assign("bbsInfo",$bbsInfo);
			$this->display();
		}
		//删除记录
		public function delete($bbsId)
		{
			$result = M()->execute("delete from bbsInfo where bbsId={$bbsId}");
			
			if($result > 0)
			{
				$this->success("删除记录成功！",U("Sql/index"));
			}
			else
			{
				$this->success("删除记录失败！",U("Sql/index"));
			}
		}
	}
?>








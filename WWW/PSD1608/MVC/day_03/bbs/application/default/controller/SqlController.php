<?php 
	class SqlController extends Controller
	{
		public function indexAction()
		{
			//执行sql语句,查询所有记录
			$bbsInfo = M()->queryAll("select * from bbsInfo");
			
			
			$this->assign("bbsInfo",$bbsInfo);
			$this->display("sql.html");
		}
		//删除记录
		public function deleteAction()
		{
			$bbsId = $_GET["bbsId"];
			
			$result = M()->exec("delete from bbsInfo where bbsId={$bbsId}");
			
			if($result > 0)
			{
				$this->success("删除记录成功!",APP."/Sql/index.html");
			}
			else
			{
				$this->success("删除记录失败!",APP."/Sql/index.html");
			}
		}
	}
?>









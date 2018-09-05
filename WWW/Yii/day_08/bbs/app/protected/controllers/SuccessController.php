<?php 
	class SuccessController extends Controller
	{
		public function actionIndex($act,$rst=NULL)
		{
			$this->setPageTitle("系统提示信息");
			$message = "";//提示信息
			$jumpUrl = "";//跳转地址
			
			if($act == "delete")//删除记录
			{
				if($rst > 0)
				{
					$message = "删除记录成功！";
					$jumpUrl = "index.php?r=index/index";
				}
				else
				{
					$message = "删除记录失败！";
					$jumpUrl = "index.php?r=index/index";
				}
			}
			else if($act == "add")//添加记录
			{
				if($rst > 0)
				{
					$message = "添加记录成功！";
					$jumpUrl = "index.php?r=index/index";
				}
				else
				{
					$message = "添加记录失败！";
					$jumpUrl = "index.php?r=add/index";
				}
			}
			else if($act == "update")//修改记录
			{
				$bbsId = $_GET["bbsId"];
				if($rst > 0)
				{
					$message = "修改记录成功！";
					$jumpUrl = "index.php?r=index/index";
				}
				else
				{
					$message = "修改记录失败！";
					$jumpUrl = "index.php?r=update/index/bbsId/{$bbsId}";
				}
			}
			else if($act == "sqldel")//删除记录
			{
				if($rst > 0)
				{
					$message = "删除记录成功！";
					$jumpUrl = "index.php?r=sql/index";
				}
				else
				{
					$message = "删除记录失败！";
					$jumpUrl = "index.php?r=sql/index";
				}
			}
			
			
			$data = array(
				"message"=>$message,
				"jumpUrl"=>$jumpUrl
			);
			$this->render("index",$data);
		}
	}
?>






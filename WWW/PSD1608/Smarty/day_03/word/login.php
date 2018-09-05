<?php 
	header("content-type:text/html;charset=utf-8");
	include_once 'smarty/Smarty.class.php';
	include_once 'dbio/UserInfo.php';
	$smarty = new Smarty();
	session_start();
	
	//获得表单提交的数据
	$userName = $_POST["userName"];
	$password = $_POST["password"];
	//表单提交(会员登陆)
	if($userName != NULL)
	{
		$userInfo = UserInfo::checkLogin($userName, $password);
		if($userInfo == NULL)
		{
			header("location:success.php?act=login&rst=0");
		}
		else
		{
			//用户锁定
			if($userInfo["isLock"] == 0)
			{
				header("location:success.php?act=login&rst=2");
			}
			else
			{
				$_SESSION["userMsg"] = $userInfo;
				header("location:success.php?act=login&rst=1");
			}
		}
	}
	
	
	$smarty->display("login.html");
?>





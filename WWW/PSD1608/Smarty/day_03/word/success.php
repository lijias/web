<?php 
	header("content-type:text/html;charset=utf-8");
	include_once 'smarty/Smarty.class.php';
	$smarty = new Smarty();
	session_start();
	
	//获得url中的参数
	$act = $_GET["act"];
	$rst = $_GET["rst"];
	$message = "";
	$jumpUrl = "";
	
	if($act == "login")//会员登陆
	{
		if($rst == 0)
		{
			$message = "会员登陆失败！";
			$jumpUrl = "login.php";
		}
		elseif($rst == 2)
		{
			$message = "该帐号己被管理员锁定，无法正常登陆！";
			$jumpUrl = "login.php";
		}
		else
		{
			$message = "会员登陆成功！";
			$jumpUrl = "show.php";
		}
	}
	elseif($act == "logout")//退出登陆
	{
		unset($_SESSION["userMsg"]);
		$message = "退出登陆成功！";
		$jumpUrl = "login.php";
	}
	elseif($act == "nologin")//非法访问
	{
		$message = "您还没有登陆，无权访问该页面！";
		$jumpUrl = "login.php";
	}
	elseif($act == "addword")//添加留言
	{
		if($rst > 0)
		{
			$message = "发表留言成功！";
			$jumpUrl = "show.php";
		}
		else
		{
			$message = "发表留言失败！";
			$jumpUrl = "writer.php";
		}
	}
	
	
	$smarty->assign("message",$message);
	$smarty->assign("jumpUrl",$jumpUrl);
	$smarty->display("success.html");
?>





<?php
	header('Content-Type:text/html;charset=utf-8');
	include_once '../dbio/Manager.php';
	session_start();
	//管理员登陆
	
	//获得表单提交的数据
	$userName = $_POST["userName"];
	$password = $_POST["password"];
	$checkCode = $_POST["checkCode"];
	$trueCode = $_SESSION["trueCode"];
	
	if($trueCode == $checkCode)
	{
		$userInfo = Manager::checkLogin($userName, $password);
		if($userInfo == NULL)
		{
			echo "<script type='text/javascript'>";
			echo "	alert('用户名或密码输入有误！');";
			echo "	window.location='../index.html';";
			echo "</script>";
		}
		else
		{
			$_SESSION["userMsg"] = $userInfo;
			echo "<script type='text/javascript'>";
			echo "	alert('登陆成功，正在进入后台管理...');";
			echo "	window.location='../admin/index.php';";
			echo "</script>";
		}
	}
	else
	{
		echo "<script type='text/javascript'>";
		echo "	alert('验证码输入有误！');";
		echo "	window.location='../index.html';";
		echo "</script>";
	}
	
	
	
	
	
	
	
	
	
?>
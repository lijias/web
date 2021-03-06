<?php
include "./common/config.inc.php";
include "./common/db.inc.php"; 
//收集用户输入的信息之前，对用户是否有进行登录进行判断
if($_POST){
	//收集用户名
	Log::JLog('登录',$_POST);
	$username = isset($_POST['username'])?$_POST['username']:"";
	$password = isset($_POST['password'])?$_POST['password']:"";
	if($username==""){
		echo "用户名不能为空";
		exit;
	}
	
	if($password==""){
		echo "密码不能为空";
		exit;
	}
	//去数据库比对数据
	$query = "select id from user 
			  where 
			 username='".$username."' and password='".$password."' ";	
	Log::JLog('sql语句',$query);
	$result = mysql_query($query);
	//如果能正确匹配到，那么函数mysql_num_rows()>0
	if(mysql_num_rows($result)>0){
		$row = mysql_fetch_assoc($result);
		//登录成功
		$_SESSION['id'] = $row['id'];
		$_SESSION['username'] =$username;
		//跳转回首页
		header("location:index.php");
	}else{
		echo "登录失败";
		exit;
	}
	
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>用户登录_新闻视界</title>
<link href="styles/reset.css" rel="stylesheet" type="text/css" media="all" />
<link href="styles/layout.css" rel="stylesheet" type="text/css" media="all" />
<link href="styles/common.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<div id="header-wrapper">
	<div class="wrapper">
		<div id="header">
			<div class="side-left logo">
				<a href="#" title="换一个角度看新闻">新闻视界</a>
			</div>
			<div class="side-center page-title"><span>登录</span></div>
			<div class="side-right login-bar"><a href="register.html" target="_blank">免费注册</a><a href="index.html" target="_blank">返回首页</a></div>
		</div>
	</div>
</div>
<div id="login-wrapper">
	<div id="login-main">
		<form action="" method="post" id="login-form">
		<h1 class="login-title">用户登录</h1>
		<input type="text" class="login-input-username" name="username" value="请输入登录账号"/>	
		<input type="password" class="login-input-password" name="password"/>
		<div class="login-remmber-me"><span><input type="checkbox" name="remember" checked="checked" value="1"/>&nbsp;下次自动登录</span><a href="#">忘记密码</a></div>	
		<input type="submit" value="登 录" class="login-submit-button"/>		
		<div class="other-login">
			<p>可以使用以下方式登录：</p>
			<ul class="other-login-list clear">
				<li><a href="#" class="qq" title="QQ登录">QQ登录</a></li>
				<li><a href="#" class="weibo" title="微博账号登录">微博账号登录</a></li>
				<li><a href="#" class="baidu" title="百度账号登录">百度账号登录</a></li>
				<li><a href="#" class="renren" title="人人网账号登录">人人网账号登录</a></li>
				<li><a href="#" class="weixin" title="微信账号登录">微信账号登录</a></li>
			</ul>
		</div>
		</form>
	</div>
</div>
</body>
</html>

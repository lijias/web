<?php
header('Content-Type:text/html;charset=utf-8');
include 'common.php';
if ($_POST){
	//用户
	$username=$_POST['username'];
	if ($username==""){
		echo "邮箱不能为空";
		exit;
	}
	if (!isEmail($username)){
		echo "邮箱不合法";
		exit;
	}
	//密码
	$password=$_POST['pwd'];
	if ($password==""){
		echo "密码不能为空";
		exit;
	}
	if (!isPassword($password, 6, 8)){
		echo "你密码错啦";
		exit;
	}
	//日期
	$brithday=$_POST['brithday'];
	if ($brithday==""){;
	    echo "日期不能空";
	    exit;
	}
	if (!isDate($brithday)){
		echo "你日期错啦";
		exit;
	}
	//手机号码
	$number=$_POST['number'];
	if ($number==""){
	    echo "号码不能空";
	    exit;
	}
	if (!isNumber($number)){
	    echo "你号码错啦";
	    exit;
	}else{
		echo "你成功啦少年";
	}	
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Insert title here</title>
</head>
<body>
<center>用户注册</center><br /><br />
<form action="" method="post">
用户名 :<input type="text" name="username" /><br /><br />
密&nbsp;&nbsp;&nbsp;码 :<input type="password" name="pwd" /><br /><br />
出生日期 :<input type="text" name="brithday"/><br /><br />
手机号码 :<input type="text" name="number" /><br /><br />
<input type="submit"  value="注册"/>
</form>
</body>
</html>
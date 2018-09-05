<?php
header('Content-Type:text/html;charset=utf-8');
mysql_connect("localhost","root","root");
mysql_select_db("cms2");
if (isset($_COOKIE['username']) && $_COOKIE['username']!=""){
	header("location:zixiindex.php");
}
if ($_POST){
	$username = $_POST["username"];
	if ($username==""){
		echo "用户名不能空";
		exit();
	}
    $password = $_POST["password"];
	if ($password==""){
		echo "密码不能空";
		exit();
	}
	$query="select id from cms_admin
	        where aname='".$username."'
	        and pwd='".$password."'";
	$result=mysql_query($query);
	if ($row=mysql_fetch_assoc($result)){
		setcookie("username",$username,time()+24*3600);
		setcookie("id",$row['id'],time()+24*3600);
		header("location:zixiindex.php");
	}else{
		echo "登录失败";
	}
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>登录系统</title>
</head>
<body>
<center>用户登录</center><br/><br/>
<form action="" method="post">
用户名:<input type="text" name="username"/><br/>
密&nbsp;&nbsp;码:<input type="password" name="password"/><br/>
<input type="submit" value="登录"/>
</form>
</body>
</html>
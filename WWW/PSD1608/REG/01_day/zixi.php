<?php
include 'yanzheng/common.php';
header('Content-Type:text/html;charset=utf-8');
if ($_POST){
	$u=$_POST['username'];
	if ($u==""){
		echo "ubunengkong";
		exit;
	}
	if (!isEmail($u)){
		echo "ucuole";
		exit;
	}
	$p=$_POST['pwd'];
	if ($p==""){
		echo "pbunengkong";
		exit;
	}
	if (!isPassword($p, 6, 8)){
		echo "pcuole";
		exit;
	}
	$b=$_POST['brithday'];
	if ($b==""){
		echo "bbunengkkong";
	    exit;
	}
	if (!isDate($b)){
		echo "bcuole";
		exit; 
	}
	$n=$_POST['number'];
	if ($n==""){
		echo "nbunengkong";
		exit;
	}
	if (!isNumber($n)){
		echo "ncuole";
		exit;
	}else {
		echo "huanyingnishaonian";
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
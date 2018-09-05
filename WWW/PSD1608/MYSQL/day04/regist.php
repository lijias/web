<?php
//用户注册功能 
header("Content-Type:text/html;charset=utf-8");
//1、连接数据库
$link = mysql_connect("localhost","root","root");
//2、选择默认数据库
mysql_select_db("cms");
//3、操作 将用户在表单输入的用户名和密码 放入到数据库
//用户名密码来自表单
if(!empty($_POST)){
	//若$_POST不为空，则说明用户提交数据
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$query = "insert cms_admin(aname,pwd)
			  value
			  ('{$username}','".md5($password)."')";
	$result = mysql_query($query);
	if($result==true){
		echo "注册成功,您的id号为：".mysql_insert_id();
	}else{
		echo "注册失败";
	}
}

//4、关闭数据库
mysql_close();



?>
<center>用户注册</center>
<br/><br/>
<form action="" method="POST">
用户名：<input type="text" name="username" /><br/><br/>
密&nbsp;&nbsp;码：<input type="password" name="password" /><br/><br/>
<input type="submit" value="注册" /> 
</form>








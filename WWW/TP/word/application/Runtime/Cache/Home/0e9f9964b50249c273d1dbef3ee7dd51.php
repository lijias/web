<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
<script>
function check(){
	if(document.getElementById("username").value=="")
	{
		alert("用户名不能为空!!");
		return false;
	}
	else if(document.getElementById("password").value=="")
	{
		alert("密码不能为空!!");
		return false;		
	}
}
</script>
</head>
<body>
	<form action="/TP/word/index.php/Index/login.html" method="post" onsubmit="return check()">
		<table border=1>
			<tr>
				<th colspan="2">开发部留言板</th>
			</tr>
			<tr>
				<td>用户名</td>
				<td><input type="text" name="username" id="username"/></td>
			</tr>
			<tr>
				<td>口令</td>
				<td><input type="password" name="password" id="password"/></td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<input type="submit" value="提交"/>
					<input type="reset" value="重写"/>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>
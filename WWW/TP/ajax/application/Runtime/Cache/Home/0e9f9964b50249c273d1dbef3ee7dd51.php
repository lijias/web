<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
<script type="text/javascript" src="/TP/ajax/library/jquery/jquery-1.4.js"></script>
<script type="text/javascript">

function check()
{
	$.ajax
	({
		type:"post",
		url:"/TP/ajax/index.php/Index/select.html",
		data:{
			"username":$("#username").val(),
			"password":$("#password").val()
		},
		success:function(re)
		{
			$("#sss").html(re)
		}
	});
}
</script>
</head>
<body>
<span id="sss"></span>
	<form action="#" method="post">
		<table border="1">
			<tr>
				<td>用户名:</td><td><input type="text" name="username" id="username"/></td>
			</tr>
			<tr>
				<td>密码:</td><td><input type="password" name="password" id="password"/></td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<input type="button" value="提交" id="submit" onclick="check()"/>
					<input type="reset" value="重置"/>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>
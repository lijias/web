<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>
<font size='5'>小小笔记本</font>
<hr>
<form action="/TP/leaveword/index.php/index/add" method="post">
	<table border=1 bordercolor="#0cf" width='400' height='200' >
		<tr>
			<td valign='top' width='400' height='200'>
				<table>
				<tr>
					<td colspan=2><a href="/TP/leaveword/index.php/see/index">查看留言</a></td>
				</tr>
				<tr>
					<td>昵称:    <input type="text" name="username"/><font color="red">昵称长度为2~16</font></td>
				</tr>	
				<tr>
					<td>内容:      <font color="red">留言内容长度为2~200</font></td>
				</tr>
				<tr>
					<td align="center"><textarea name="content"></textarea></td>
				</tr>
				<tr>
					<td align="center"><input type='submit' value='提交'/>&nbsp;&nbsp;&nbsp;<input type='reset' value='重写'/></td>
				</tr>											
				</table>
			</td>
		</tr>
	</table>
</form>
</body>
</html>
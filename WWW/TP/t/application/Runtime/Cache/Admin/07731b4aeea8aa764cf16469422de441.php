<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>
<div>当前操作：添加分类</div>
<form action="" method="post">
<table>
	<tr>
		<td>分类名：</td>
		<td><input type="text" name="tname"/></td>
	</tr>
	<tr>
		<td>父分类：</td>
		<td><select name="fid">
				<option value="0">顶级</option>
				<?php echo ($str); ?>
		</select></td>
	</tr>
	<tr>
		<td colspan="2"><input type="submit" value="添加"/></td>
	</tr>
</table>
</form>
</body>
</html>
<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>
<div>当前操作：添加品牌</div>
<form action="/19_project/index.php/Admin/Brand/save" method="post" enctype="multipart/form-data">
<table>
	<tr>
		<td>品牌名：</td>
		<td><input type="text" name="bname"/></td>
	</tr>
	<tr>
		<td>图片：</td>
		<td><input type="file" name="upload"/></td>
	</tr>
	<tr>
		<td>分类：</td>
		<td><select name="typeid">
			<?php if(is_array($arr)): foreach($arr as $key=>$v): ?><option value="<?php echo ($v["id"]); ?>"><?php echo ($v["tname"]); ?></option><?php endforeach; endif; ?>	
		</select></td>
	</tr>
	<tr>
		<td colspan="2"><input type="submit" value="添加"/></td>
	</tr>
</table>
</form>
</body>
</html>
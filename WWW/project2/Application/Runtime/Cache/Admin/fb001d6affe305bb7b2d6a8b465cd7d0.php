<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>
<div>当前操作：修改分类</div>
<form action="/19_project/index.php/Admin/Type/usave" method="post">
<table>
	<tr>
		<td>分类名：</td>
		<td><input type="hidden" name="id" value="<?php echo ($_GET['id']); ?>"/><input value="<?php echo ($arr["tname"]); ?>" type="text" name="tname"/></td>
	</tr>
	<tr>
		<td>父分类：</td>
		<td><select name="fid" id="fid">
				<option value="0">顶级</option>
				<?php echo ($str); ?>
		</select></td>
	</tr>
	<tr>
		<td colspan="2"><input type="submit" value="修改"/></td>
	</tr>
</table>
</form>
</body>
</html>
<script type="text/javascript">
document.getElementById("fid").value=<?php echo ($arr["fid"]); ?>;


</script>
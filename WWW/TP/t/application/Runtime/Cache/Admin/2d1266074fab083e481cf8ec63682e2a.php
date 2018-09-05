<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>
<div>当前操作：管理分类</div>
<table width="100%">
	<tr>
		<th>图片</th>
		<th>品牌</th>
		<th>管理</th>
	</tr>
	<?php if(is_array($arr)): foreach($arr as $key=>$v): ?><tr>
		<td><img src="/TP/t/Public/brand/<?php echo ($v["imagename"]); ?>" width="100px"/></td>
		<td><?php echo ($v["bname"]); ?></td>
		<td><a href="/TP/t/admin.php/Brand/update/id/<?php echo ($v["id"]); ?>">修改</a>&nbsp;|&nbsp;<a href="/TP/t/admin.php/Brand/delete/id/<?php echo ($v["id"]); ?>">删除</a></td>
	</tr><?php endforeach; endif; ?>
</table>
</body>
</html>
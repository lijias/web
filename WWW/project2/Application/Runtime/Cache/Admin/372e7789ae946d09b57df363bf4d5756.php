<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>
<div>当前操作：管理产品</div>
<table width="100%">
	<tr>
		<th>图片</th>
		<th>名称</th>
		<th>会员价格</th>
		<th>操作</th>
	</tr>
	<?php if(is_array($arr)): foreach($arr as $key=>$v): ?><tr>
		<td><img src="/project2/Public/product/<?php echo ($v["imagename"]); ?>" width="100"/></td>
		<td><?php echo ($v["title"]); ?></td>
		<td><?php echo ($v["userprice"]); ?></td>
		<td><a href="/project2/index.php/Admin/Product/update/id/<?php echo ($v["id"]); ?>">修改</a>&nbsp;|&nbsp;<a href="/project2/index.php/Admin/Product/delete/id/<?php echo ($v["id"]); ?>">删除</a></td>
	</tr><?php endforeach; endif; ?>
</table>
<div><?php echo ($pageStr); ?></div>
</body>
</html>
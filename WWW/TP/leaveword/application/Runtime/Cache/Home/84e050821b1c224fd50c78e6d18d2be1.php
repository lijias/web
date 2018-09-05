<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>
<a href="/TP/leaveword/index.php/index/index">返回留言页面</a>
<?php if(is_array($result)): foreach($result as $key=>$v): ?><table border=1 width="500" cellspacing=0 cellpadding=0 bordercolor="#0cf">
	<tr>
		<td width="150">昵称: <?php echo ($v["username"]); ?></td><td>留言时间: <?php echo ($v["time"]); ?></td>
	</tr>
	<tr>
		<td colspan=2>留言内容:</td>
	</tr>
	<tr>
		<td colspan=2 height="100" valign="top"><?php echo ($v["leaveword"]); ?></td>
	</tr>
</table><?php endforeach; endif; ?>
</body>
</html>
<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>
<table border="1" align="center">
	<?php if(is_array($result)): foreach($result as $key=>$v): ?><tr>
			<td><?php echo ($v["aid"]); ?></td><td><?php echo ($v["dateandtime"]); ?></td><td><?php echo ($v["name"]); ?></td><td><?php echo ($v["content"]); ?></td>
		</tr><?php endforeach; endif; ?>
		<tr>
			<td colspan=4><?php echo ($pageList); ?></td>
		</tr>
</table>
</body>
</html>
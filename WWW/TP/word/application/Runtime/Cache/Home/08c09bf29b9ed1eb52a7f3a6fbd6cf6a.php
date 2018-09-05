<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
<script>
	function checkout()
	{
		if(confirm("是不是要退出啊!!"))
			{
				window.location = "/TP/word/index.php/Index/index.html";
			}
	}
</script>
</head>
<body>
	<a href="/TP/word/index.php/Add/index.html">发布信息</a>&nbsp;&nbsp;&nbsp;
	<a href="#" onclick="checkout()">退出系统</a>
	<br>
	留言信息:
	<table border=1>
		<tr>
			<th>发送人</th><th>发送时间</th><th>接收人</th><th>信息内容</th>
		</tr>
		<?php if(is_array($result)): foreach($result as $key=>$v): ?><tr>
			<td><?php echo ($v["username"]); ?></td><td><?php echo ($v["dateandtime"]); ?></td><td><?php echo ($v["name"]); ?></td><td><?php echo ($v["content"]); ?></td>
		</tr><?php endforeach; endif; ?>
	</table>
</body>
</html>
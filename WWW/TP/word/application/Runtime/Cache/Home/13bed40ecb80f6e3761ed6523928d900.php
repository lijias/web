<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
<script type="text/javascript" src="/TP/word/library/jquery/jquery-1.4.js"></script>
<script>
	function checkout()
	{
		if(confirm("是不是要退出啊!!"))
		{
			window.location = "/TP/word/index.php/Index/index.html";
		}
	}
	function check()
	{
		$.ajax
		({
			type:"post",
			url:"/TP/word/index.php/Add/add.html",
			data:
				$("form").serialize()
			,
			success:function(re)
			{
			
				 $("#span").html(re)	
				
			}
		});
	}
</script>
</head>
<body>
 <span id="span"></span>
	<a href="#" onclick="checkout()">退出系统</a>
	<br><br>
	
		发送信息:
	<br>
		<form action="#" method="post">
			<table border="1">
				<tr>
					<td>接收人:</td><td><input type="text" name="name" id="name"/></td>
				</tr>
				<tr>
					<td>信息内容:</td><td><textarea name="content" id="content"></textarea></td>
				</tr>
				<tr>
					<td colspan="2" align="center">
						<a href="" onclick="check()">提交</a>
						<input type="reset" value="复位"/>
					</td>
				</tr>
			</table>
			</form>
		<br><br><br>
		留言信息:
		<table border=1>
			<tr>
				<th>发送人</th><th>发送时间</th><th>接收人</th><th>信息内容</th>
			</tr>
			<?php if(is_array($info)): foreach($info as $key=>$v): ?><tr>
				<td><?php echo ($v["username"]); ?></td><td><?php echo ($v["dateandtime"]); ?></td><td><?php echo ($v["name"]); ?></td><td><?php echo ($v["content"]); ?></td>
			</tr><?php endforeach; endif; ?>
			<tr>
				<td	colspan="4" align="center">
					<?php echo ($pageList); ?>
				</td>
			</tr>
		</table>
</body>
</html>
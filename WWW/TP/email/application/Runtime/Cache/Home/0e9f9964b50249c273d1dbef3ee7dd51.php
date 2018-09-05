<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>
      <form>
      	<table border='1' bordercolor='blue'>
      		<tr>
      			<th>邮件ID</th><th>邮件标题</th><th>邮件日期</th><th>是否删除</th><th>王盟</th>
      		</tr>
      		<?php if(is_array($result)): foreach($result as $key=>$v): ?><tr>
      			<td><?php echo ($v["ID"]); ?></td><td><a href="/TP/email/index.php/mailContent/index/ID/<?php echo ($v["ID"]); ?>.html"><?php echo ($v["title"]); ?></a></td><td><?php echo ($v["dataandtime"]); ?></td><td><a href="/TP/email/index.php/index/del/ID/<?php echo ($v["ID"]); ?>.html" onclick="check()">删除</a></td>
      			<td><img src="/TP/email/public/images/dog.gif"></td>
      		</tr><?php endforeach; endif; ?>
      	</table>
      </form>
</body>
</html>
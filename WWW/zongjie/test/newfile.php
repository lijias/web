<?php
if ($_POST) 
{
	$pdo = new PDO("mysql:host=localhost;dbname=test", "root", "root");
	$stm = $pdo->query("select paixu from xuesheng order by id desc limit 1");
	$px = $stm->fetchAll(PDO::FETCH_ASSOC);
	$name = $_POST['name'];
	if ($px)
	{
		$p = $px[0]['paixu'];
		$pdo->exec("insert into xuesheng(name,paixu) value('$name',$p+1)");
	}
	else 
	{
		$pdo->exec("insert into xuesheng(name) value('$name')");
	}
}	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
<style type="text/css">
	#header
	{
		align: center;
		width:1000px;
		height:150px;
		margin:0 auto;
		background: #f5f5f5;
		border: 1px solid #dd;
	}
#left
	{
		float:left;
		width:150px;
		height:300px;
		margin:15px 20px 15px 170px;
		background: #f5f5f5;
	}
#mean
	{
		float:left;
		width:835px;
		height:300px;
		margin:15px 0 15px; 
		background: #f5f5f5;
		
	}
#foot
	{
		clear:both;
		margin:0 0 0 170px;
		width:1000px;
		height:150px;
		background: #f5f5f5;
		
	}	
</style>
</head>
<body>
	<div id='header'>头</div>
	<div id='left'>侧</div>
	<div id='mean'>
		<form action="" method="post">
			<table>
				<tr>
					<th>学生姓名</th>
				</tr>
				<tr>
					<th><input type="text" name="name"/></th>
				</tr>
				<tr>
					<th><input type="submit" value="提交"/></th>
				</tr>
			</table>
		</form>
	</div>
	<div id='foot'>尾</div>
</body>
</html>
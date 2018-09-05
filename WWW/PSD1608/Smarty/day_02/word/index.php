<?php 
	header("content-type:text/html;charset=utf-8");
	include_once 'smarty/Smarty.class.php';
	include_once 'dbio/WordInfo.php';
	$smarty = new Smarty();
	
	//获得表单提交的数据
	$userName = $_POST["userName"];
	$content = $_POST["content"];
	//表单提交(添加留言)
	if($content != NULL)
	{
		$result = WordInfo::addWordInfo($userName, $content);
		if($result > 0)
		{
			echo "<script type='text/javascript'>";
			echo "	alert('发表留言成功！');";
			echo "	window.location='show.php';";
			echo "</script>";
		}
		else
		{
			echo "<script type='text/javascript'>";
			echo "	alert('发表留言失败！');";
			echo "	window.location='index.php';";
			echo "</script>";
		}
	}
	
	
	$smarty->display("index.html");
?>












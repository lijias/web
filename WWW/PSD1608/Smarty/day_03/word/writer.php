<?php 
	header("content-type:text/html;charset=utf-8");
	include_once 'smarty/Smarty.class.php';
	include_once 'dbio/WordInfo.php';
	include_once 'dbio/FilterText.php';
	include_once 'nologin.php';
	$smarty = new Smarty();
	
	//获得表单提交的数据
	$accpter = $_POST["accpter"];
	$content = $_POST["content"];
	$sender = $_SESSION["userMsg"]["userId"];
	//表单提交了(发表留言)
	if($content != NULL)
	{
		//过滤字
		$filterText = FilterText::getFilterText();
		foreach ($filterText as $v)
		{
			$txt = $v["txt"];
			$len = mb_strlen($txt,"utf-8");
			$star = "************************";
			$star = substr($star,0,$len);
			$content = str_replace($txt,$star,$content);
		}
		//添加记录
		$result = WordInfo::addWord($sender, $accpter, $content);
		header("location:success.php?act=addword&rst={$result}");
	}
	
	
	
	$smarty->display("writer.html");
?>










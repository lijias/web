<?php
	header('Content-Type:text/html;charset=utf-8');
	//获得表单提交的数据
	$title = $_POST["title"];
	$content = $_POST["content"];
	
	echo "{$title}<hr>{$content}";
?>
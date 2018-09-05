<?php
	header('Content-Type:text/html;charset=utf-8');
	include_once 'hello/Person.php';
	use haha\Person;//引用指定空间下的类
	
	$p = new Person();
	$p->show();
?>
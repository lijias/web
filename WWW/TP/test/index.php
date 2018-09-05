<?php
	namespace aaa\bbb;//定义当前文件的命名空间
	header('Content-Type:text/html;charset=utf-8');
	include_once 'hello/Person.php';
	
	
	//$p = new ccc\Person();//引用指定空间下的类
	$p = new \aaa\bbb\ccc\Person();//引用指定空间下的类
	$p->show();
?>
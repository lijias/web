<?php
session_start();
function __autoload($classname){
	include $classname.'.class.php';
} 
$c = new Code(80,30,4);
//将验证码的字符串给session
$_SESSION['code'] = $c->word;
//输出验证码
$c->outImage();
?>
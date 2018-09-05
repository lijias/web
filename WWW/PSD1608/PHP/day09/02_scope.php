<?php
header('Content-Type:text/html;charset=utf-8');
// 动态变量
function fn(){
	$a =0;
	$a++;
	echo $a.'<br/>';
}
fn();//1
fn();//1
fn();//1
// 静态变量 static
function fn2(){
	static $a=0;
	$a++;
	echo $a.'<br/>';
}
fn2();//1
fn2();//2
fn2();//3






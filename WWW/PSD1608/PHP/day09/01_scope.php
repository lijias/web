<?php
header('Content-Type:text/html;charset=utf-8');
$n = 5;
function isTest(){
	$n = 12;//局部变量
}
isTest();
echo $n;
echo '<br/>';
$n = 5;
function isTest2($n){//形参：值传递
	$n += 7;//局部变量
}
isTest2($n);//实参
echo $n;
echo '<br/>';
$n = 5;
function isTest3(){
	global $n;
	$n = 12;//全局变量
}
isTest3();
echo $n;
echo '<br/>';
$n = 5;
function isTest4(){
	$GLOBALS['n'] = 12;//全局变量
}
isTest4();
echo $n;
echo '<br/>';
$n = 5;
function isTest5(&$n){//形参：引用传递
	$n += 7;//全局变量
}
isTest5($n);//实参
echo $n;
echo '<br/>';
// 超全局变量
// 获得当前文件所在的根相对路径
echo $_SERVER['REQUEST_URI']; 
echo '<br/>'; 
echo $_SERVER['PHP_SELF'];
echo '<br/>';
function test(){
	echo $_SERVER['REQUEST_URI'];
}
test();















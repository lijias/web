<?php
header('Content-Type:text/html;charset=utf-8');
define('USER','tom');
//define('USER','rose');错误常量一旦定义不能重复定义
echo USER;
echo '<br/>';
echo constant('USER'); 
echo '<br/>';
// 常量是超全局变量
function test(){
	echo USER;
}
test();




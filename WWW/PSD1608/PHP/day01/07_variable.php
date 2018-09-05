<?php
header('Content-Type:text/html;charset=utf-8');
//多个变量赋相同的值
$a = $b =$c = $d = 18;
echo $a,$b,$c,$d;
echo '<br/>';
//(2)可变变量
$hello ='world';
$world = 'good';
$good = 'ok';
echo $$$hello; // ok
echo '<br/>';
$a = 'b';
$b = 'c';
$c = 'end';
echo $$$a; //end
echo '<hr/>';
// (3)引用变量:& 将多个变量名称指向一个内存地址，
//           相当于给变量起别名
$a = 20;
$b = &$a;
$b = 33;
echo $a; //33









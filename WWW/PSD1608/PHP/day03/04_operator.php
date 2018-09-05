<?php
header('Content-Type:text/html;charset=utf-8');
$a = 'hello';
$b ='world';
// 输出 形如 : hello - world
echo $a,'-',$b; // 测试输出
echo '<hr/>';
// 字符(连接)运算符：(符号: .)
// 将字符串结果赋给变量 $link,一个整体 
$link = $a.'-'.$b;
echo $link;
echo '<hr/>';
// 输出形如 one|two|three 字符串
// 将字符串结果赋给变量 $link输出
$a ='one'; 
$b='two'; 
$c='three';
$link = $a.'|'.$b.'|'.$c;
echo $link;









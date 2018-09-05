<?php
header('Content-Type:text/html;charset=utf-8');
// if单分支语句
$a =5;
if($a>8){
   echo 'hello world<br/>';
   echo 'happy<br/>';
}
echo 'ok';
echo '<hr/>';
//如果if后面的大括号中语句组只有一条语句,大花括号可以省略，不推荐省略
$a = 5;
if($a>8)
	echo 'hello world<br/>';
// 下面顺序语句
echo 'happy<br/>';
echo 'ok';
echo '<hr/>';
//  比较运算符 ==布尔值;  赋值运算符 = 的使用
$a = 0;
if($a==0){
	echo 'good<br/>';
}
echo '<br/>';
$a = 0;
if($a=0){ // 总是fasle
	echo 'good<br/>';
}
echo '<br/>';
$a = 0;
if($a=5){ // 总是true
	echo 'good<br/>';
}

echo '<br/>';
/* 判断 $var 是否大于 3,  
 * 如果 $var>3 给 $n = 7;
 * 否则 给  $n =9;
 * 最后输出 $n的值.
 */
$var = 5;
if($var>3){
	$n = 7;
}else{
	$n = 9;
}
echo $n;













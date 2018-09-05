<?php
header('Content-Type:text/html;charset=utf-8');
/* $a=7; $b=3;
 * 判断 如果 $a>$b
 * 给 $n =1 ,否则 给 $n=2;  
 * 并且最后输出 $n的结果
 */
$a=7;
$b=3;
if($a>$b){
	$n=1;
}else{
	$n=2;
}
echo $n;
echo '<br/>';
// 三目(三元 )运算符
$a=7;
$b=3;
//$a>$b?$n=1:$n=2;
$n = $a>$b?1:2;
echo $n;

echo '<br/>';
// PHP5.3以上支持
$a=7;
$b=3;
//$n = $a>$b?:2;
echo $n;




















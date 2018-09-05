<?php
header('Content-Type:text/html;charset=utf-8');

$a = 5;
$b = 6;
if($a= 9>$b && $b++){
  $a ++;	
  $b ++;
}
/* 1.  9>$b && $b++
 * 2.  没短路  执行 $b++ 
 * 3. $a =  true
 * 4. 布尔值不支持自增自减
 * 5. if条件 true 执行if后面的大括号
 */
echo $a,$b;//true=1,8
echo '<hr/>';

$a = 5;
$b = 6;
if($a= 9>$b || $b++){
	$a ++;
	$b ++;
}
echo '<hr/>';
/* 1. 9>$b || $b++
 * 2. 短路了   $b++ 不执行
 * 3. $a =true
 * 4. 布尔不支持自增自减
 * 5. if条件 true 执行if后面的大括号
 */
echo $a,$b;// 1,7













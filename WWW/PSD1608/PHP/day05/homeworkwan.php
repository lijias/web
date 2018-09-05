<?php
header('Content-Type:text/html;charset=utf-8');
$var = true;  // 松散比较true==1
switch($var){
	  case 0 :
          echo 0;
	      break;
	  case 1:
	      echo 1;
	  default:
		  echo 'other';
		  break;
	  case 2:
		  echo 2;
		  break;
};

echo '<hr/>';
//运算符优先级
$a = 1;
$b = 2;
$c = 3;
if($a = 5 && $b =7 || $c=8){
	   $a++;
	   $b++;
	   $c++;
}
/* 1. 5 && $b =7 || $c=8
 * 2. 没短路 执行 $b =7 || $c=8
 * 3. 短路了  不执行$c=8 
 * 4. $b = true
 * 5. $a = true
 * 6. if条件 true 执行if后的大括号代码
 * 7. 布尔值不支持自增自减
 */
echo $a,$b,$c;//true=1,true=1,4















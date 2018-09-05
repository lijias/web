<?php
header('Content-Type:text/html;charset=utf-8');
// 嵌套循环
// 2.  外循环轮次，内循环带循环的小算法
// 求具体5!=1*2*3*4*5(累乘算法)
$sum =1;
for($i=1;$i<=5;$i++){
   $sum *= $i;
}
echo $sum;
echo '<br/>';
// 求 范围 1! --10!
for($k=1;$k<=10;$k++){
	$sum =1;
	for($i=1;$i<=$k;$i++){
		$sum *= $i;
	}
	echo $k.'!='.$sum.'<br/>';
} 

/* $var=123494321
 * 判断一个具体变量 是否是回文(对称)算法 
 **/
$var=123494321;
$half = floor(strlen($var)/2);
$flag = true;
for($i=0;$i<$half;$i++){
	$x =substr($var,$i,1);//循环截取前一半的每一位
	$y =substr($var,-$i-1,1);//截取后一半对应的每一位
    /*  
      $x = 0   1  2  3  $i 
      $y = -1 -2 -3 -4  -$i-1
     */
	if($x!=$y){
		$flag =false;
		break;
	}
}
if($flag){
	echo $var.'是回文的';
}else{
	echo $var.'不是回文';
}
echo '<hr/>';
/* $var=123494321
 * 判断一个范围10-9999中的是回文(对称)算法
**/
for($var=10;$var<=9999;$var++){
	$half = floor(strlen($var)/2);
	$flag = true;
	for($i=0;$i<$half;$i++){
		$x =substr($var,$i,1);//循环截取前一半的每一位
		$y =substr($var,-$i-1,1);//截取后一半对应的每一位
		/*$x = 0   1  2  3  $i
		$y = -1 -2 -3 -4  -$i-1*/
		if($x!=$y){
			$flag =false;
			break;
		}
	}
	if($flag){
		echo $var.'是回文的<br/>';
	}
	
}














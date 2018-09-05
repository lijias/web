<?php
header('Content-Type:text/html;charset=utf-8');
// for循环:输出 3次hello world
for($i=1;$i<=3;$i++){
	echo 'hello world<br/>';
}
/* 1. 无条件执行一次 $i=1
 * 2. $i<=3  ->true
 * 3 输出  hello world
 * 4.$i++ --> $i=2
 * 5.$i<=3  -->true
 * 6. 输出  hello world
 * 7. $i++ --> $i=3
 * 8. $i<=3  ->true
 * 9.输出  hello world
 * 10. $i++ ->$i=4
 * 11. $i<=3 -> false 结束循环
 */
for($i=1;$i<=3;$i++){
	echo 'hello world<br/>';
}
echo $i,'<br/>';
// 输出 3次 happy ,$i=5初始值开始
for($i=5;$i<=7;$i++){
	echo 'happy<br/>';
}
echo $i.'<br/>';//8
// 输出 3次 good ,$i=5初始值开始, 步长 $i-- 
//   $i=5 4 3   $i>=3
for($i=5;$i>=3;$i--){
	echo 'good<br/>';
}
echo $i.'<br/>';//2
echo '<hr/>';
// 有变量参与的输出
for($i=1;$i<=10;$i++){
	echo '第'.$i.'行<br/>';
}
echo '<hr/>';
// 用for输出  h1-h6  标题标记
for($i=1;$i<=6;$i++){
	echo '<h'.$i.'>标题字</h'.$i.'>';
}
echo '<br/>';
// 用for输出 font 要求 size="1~7"
for($i=1;$i<=7;$i++){
 echo '<font size="'.$i.'">文本</font><br/>';
}
//  带条件的输出或 更改步长的输出
//  输出 1-10的偶数
for($i=1;$i<=10;$i++){
	if($i%2==0){
	   echo $i.'<br/>';
	}
}
// 输出 1-10的奇数(两种方法)
for($i=1;$i<=10;$i++){
	if($i%2!=0){
	  echo $i.'<br/>';
	}
}
echo '<br/>';
for($i=1;$i<=10;$i+=2){
	echo $i.'<br/>';
}
echo '<hr/>';
/* 1.  3 8 13 18 23 28 33
 * 2.  3 6 12 24 48 96
 * 3.  输出 1-100 中能被 3 同时能被 7整除的数
 */ 
for($i=3;$i<=33;$i+=5){
	echo $i.'<br/>';
}
echo '<br/>';
for($i=3;$i<=96;$i*=2){
	echo $i.'<br/>';
}
echo '<br/>';
for($i=1;$i<=100;$i++){
	if($i%3==0 && $i%7==0){
	   echo $i.'<br/>';
	}
}
echo '<br/>';
// 1+2+...+100 的和(累加求和)
$sum = 0;
for($i=1;$i<=100;$i++){
	$sum += $i;
}
/*  $sum = 0;
 *  $sum = $sum +  $i;  
 *    1  =    0  +  1
 *    3  =    1  +  2
 *    6   =   3  +  3
 *    10   =  6  +  4
 *    ...
 */
echo $sum;
echo '<br/>';
// 阶乘 5! = 1*2*3*4*5 (累乘)
$sum = 1;
for($i=1;$i<=5;$i++){
	$sum *= $i;
}
echo $sum;





















 
 
 
 
 
 
 
 


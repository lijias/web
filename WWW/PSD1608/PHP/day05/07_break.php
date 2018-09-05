<?php
header('Content-Type:text/html;charset=utf-8');
// 输出 1-10 中的前4个数
for($i=1;$i<=10;$i++){
   if($i>4){
   	 break;
   }
   echo $i.'<br/>'; 
}
echo '<br/>';
/*continue 用在 switch,循环
     如果switch中 与break 功能相同。
     如果在循环中跳过当前执行的语句中
     后面的代码,而执行下一次循环   
*/
// 输出 1-10  除了4的数
for($i=1;$i<=10;$i++){
	if($i==4){
	  continue;
	}
	echo $i.'<br/>';
}
echo '<hr/>';
//  输出 1-10的偶数
for($i=1;$i<=10;$i++){
	if($i%2==0){
		echo $i.'<br/>';
	}
}
// 方法二  continue :输出 1-10的偶数
for($i=1;$i<=10;$i++){
	if($i%2!=0){
		continue;
	}
	echo $i.'<br/>';
}

























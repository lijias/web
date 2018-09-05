<?php
header('Content-Type:text/html;charset=utf-8');
// 输出1-5的数
for($i=1;$i<=5;$i++){
	echo $i.'<br/>';
}
// 省略表达式1
$i = 1;
for(;$i<=5;$i++){
	echo $i.'<br/>';
}
// 省略表达式1 和 表达式2
$i = 1;
for(;;$i++){
	if($i>5){
	  break;
	}
	echo $i.'<br/>';
}
// 省略表达式1 和 表达式2 和 表达式3
$i = 1;
for(;;){
	if($i>5){
		break;
	}
	echo $i.'<br/>';
	$i++;
}

echo '<hr/>';
// (2)for中每个表达式可以有多条语句，
//   并且每条语句用逗号隔开
for($a=1,$b=2,$c=3;$b<=5,$c<=9,$a<=3;
        $a++,$b+=3,$c*=2){
	echo $a.'--'.$b.'--'.$c.'<br/>';
}
/*  3 次
 *  $a  $b   $c  
 *  1   2    3
 *  2   5    6
 *  3   8    12
 */













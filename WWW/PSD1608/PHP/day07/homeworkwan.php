<?php
header('Content-Type:text/html;charset=utf-8');
// 方法一
$n = 5;
for($i=$n;$i>=1;$i--){ //行
	for($j=1;$j<=$i;$j++){ //列
		echo '*&nbsp;';
	}
	echo '<br/>';
}
echo '<br/>';
//方法二
$n = 5;
for($i=1;$i<=$n;$i++){ //行
	for($j=1;$j<=$n-$i+1;$j++){ //列
		echo '*&nbsp;';
	}
	echo '<br/>';
}
echo '<hr/>';

$n =5;
for($i=1;$i<=$n;$i++){
	for($j=1;$j<=$n;$j++){
		if($i==1 || $i==$n || $j==$n-$i+1){
		   echo '*&nbsp;';
		}else{
		   echo '&nbsp;&nbsp;';
		}
	}
	echo '<br/>';
}
echo '<hr/>';
$n =9;
for($i=1;$i<=$n;$i++){
	for($j=1;$j<=$n;$j++){
		if($i==1 || $i==$n || $j==1 ||$i==ceil($n/2)){
			echo '*&nbsp;';
		}else{
			echo '&nbsp;&nbsp;';
		}
	}
	echo '<br/>';
}

echo '<hr/>';

// 判断具体一个变量 $var=3753是否包含7
$var =3753;
$flag =false;
for($i=0;$i<strlen($var);$i++){
	$x =substr($var,$i,1); // 截取每一位
	if($x==7){
		$flag = true;
		break;
	}
}
if($flag){
	echo $var.'变量包含7';
}else{
	echo $var.'变量不包含7';
}
echo '<hr/>';
// 判断范围 10-999 中包含 7的值
for($k=10;$k<=99;$k++){
	$flag =false;
	for($i=0;$i<strlen($k);$i++){
		$x =substr($k,$i,1); // 截取每一位
		if($x==7){
			$flag = true;
			break;
		}
	}
	if($flag){
		echo $k.'变量包含7<br/>';
	}
}
echo '<hr/>';
// 判断具体一个变量 $var =11 是否是素数

$var =11;
$flag =true;
for($i=2;$i<$var;$i++){
   if($var%$i==0){
   	  $flag =false;
   	  break;
   }
}
if($flag){
	echo $var.'是素数';
}else{
	echo $var.'不是素数';
}
echo '<br/>';
for($k=2;$k<=100;$k++){
	$flag =true;
	for($i=2;$i<$k;$i++){
		if($k%$i==0){
			$flag =false;
			break;
		}
	}
	if($flag){
		echo $k.'是素数<br/>';
	}
}































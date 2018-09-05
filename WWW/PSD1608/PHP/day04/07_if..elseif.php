<?php
header('Content-Type:text/html;charset=utf-8');

$week =3; // 一周中的星期几 0-6 0代表星期日
if($week==0){
	echo '星期日';
}elseif($week==1){
	echo '星期一';
}elseif($week==2){
	echo '星期二';
}elseif($week==3){
	echo '星期三';
}elseif($week==4){
	echo '星期四';
}elseif($week==5){
	echo '星期五';
}elseif($week==6){
	echo '星期六';
}else{
	echo '超出范围';
}
echo '<hr/>';
//输出： 上旬  1-10  中旬 11-20  下旬  21-31 其他超出范围
$day = 12;
if($day>=1 && $day<=10){
	echo '上旬';
}elseif($day>=11 && $day<=20){
	echo '中旬';
}elseif($day>=21 && $day<=31){
	echo '下旬';
}else{
	echo '超出范围';
}

echo '<hr/>';
// 等同于多分支语句的 if嵌套
//输出： 上旬  1-10  中旬 11-20  下旬  21-31 其他超出范围
$day = 12;
if($day>=1 && $day<=10){
	echo '上旬';
}else{
	if($day>=11 && $day<=20){
		echo '中旬';
	}else{
		if($day>=21 && $day<=31){
			echo '下旬';
		}else{
			echo '超出范围';
		}
	}
}














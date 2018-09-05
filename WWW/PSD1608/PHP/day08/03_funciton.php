<?php
header('Content-Type:text/html;charset=utf-8');
date_default_timezone_set('PRC');
getWeek();
echo '<br/>';
echo 'hello world<br/>';
echo 'hello world<br/>';
echo 'hello world<br/>';
echo 'hello world<br/>';
echo 'hello world<br/>';
echo 'hello world<br/>';
echo 'hello world<br/>';
echo 'hello world<br/>';
echo 'hello world<br/>';

getWeek();
echo '<br/>';
echo 'hello world<br/>';
echo 'hello world<br/>';
echo 'hello world<br/>';
echo 'hello world<br/>';
getweek();
function getWeek(){
	$week = date('w');// 0-6
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
}







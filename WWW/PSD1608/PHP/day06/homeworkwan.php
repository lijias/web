<?php
header('Content-Type:text/html;charset=utf-8');
// (1)输出  5 8 11 14 17 20 23 26
for($i=5;$i<=26;$i+=3){
	echo $i.'<br/>';
}
// 输出  1 4 9 16 25 36 49 64
for($i=1;$i<=8;$i++){
	//echo $i*$i.'<br/>';
	echo pow($i,2).'<br/>';
}
//输出  1-100中  能被 5 或 能被 7整除的数
for($i=1;$i<=100;$i++){
	if($i%5==0 || $i%7==0){
	   echo $i.'<br/>';
	}
}
echo '<hr/>';
$link ='';
$link .='<ul>';
for($i=1;$i<=5;$i++){
	$link.='<li>hello'.$i.'</li>';
}
$link .='</ul>';
echo $link;







<?php
header('Content-Type:text/html;charset=utf-8');
$arr =array(
		0=>array('user'=>'tom','age'=>22,'sex'=>'男'),
		1=>array('user'=>'rose','age'=>18,'sex'=>'男'),
		2=>array('user'=>'tina','age'=>23,'sex'=>'女'),
		3=>array('user'=>'alice','age'=>17,'sex'=>'男')
);

foreach($arr as $key=>$val){ // $val:一维数组 行
	                         //$key : 0 1 2 3
	foreach($val as $k=>$v){ //列  $k: user age sex
		echo $v.'&nbsp;';
	}
	echo '<br/>';
}

// 工作常用：重点
foreach($arr as $key=>$val){//$val:一维数组
	echo $val['user'].$val['sex'].$val['age'].'<br/>';
}







<?php
header('Content-Type:text/html;charset=utf-8');
//  将两个数组组成一个关联数组
/* $arr = array(
        'user' => 'tom',
		'age' =>20,
		'sex' =>'男',
		'salary'=>8888.67,
		'married'=>true
); */
$arr1=array(
		'user',
		'age',
		'sex',
		'salary'
);
$arr2=array(
		'tom',
		20,
		'男',
		8888.89
);
$newArr =array();
foreach($arr1 as $k=>$v){// $k= 0 1 2 3
	
	$newArr[$v] =$arr2[$k];
	// $newArr['user'] ='tom';
	// $newArr['age'] =20;...
	
}
echo '<pre>';
print_r($newArr);
echo '</pre>';







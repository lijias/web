<?php
header('Content-Type:text/html;charset=utf-8');
//(2) $数组名称[[$key]]=$value;
// 索引数组 -- 省略键名称
$arr[] ='tom';
$arr[] ='rose';
$arr[] ='jerry';
echo '<pre>';
print_r($arr);
echo '</pre>';
// 索引数组 -- 不省略键名称
$arr = array();
$arr[3] ='one';
$arr[7] ='two';
$arr[12] ='three';
$arr[7] ='four';
echo '<pre>';
print_r($arr);
echo '</pre>';
// 关联数组
$arr = array();
$arr['user'] ='tom';
$arr['age'] =20;
$arr['sex'] ='男';
$arr['salary'] =8888.67;
echo '<pre>';
print_r($arr);
echo '</pre>';














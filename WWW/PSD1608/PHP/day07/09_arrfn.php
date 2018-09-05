<?php
header('Content-Type:text/html;charset=utf-8');
// array_map:将回调函数作用到给定数组的单元上 
// 回调函数：将一个函数名称作为另一个函数的参数使用
//array array_map ( callable $callback , array $arr1 [, array $... ] )
// 将数组中的每个值转为小写
$arr = array('tT','FGa','fdA');
$newArr = array_map('strtoupper',$arr);
echo '<pre>';
print_r($newArr);
echo '</pre>';
// 方法二:不用array_map 
$newArr = array();
foreach($arr as $k=>$v){
	$newArr[] = strtolower($v);
}  
echo '<pre>';
print_r($newArr);
echo '</pre>';









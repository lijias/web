<?php
header('Content-Type:text/html;charset=utf-8');
// 数组(Array)
//空数组(没成员值的数组)
$arr = array();
var_dump($arr);
echo '<br/>';
// 有值的数组
$arr = array('a','b','c');
var_dump($arr);
echo '<br/>';
print_r($arr);
echo '<br/>';
//  echo可以输出数组中的某一值 b
echo $arr[1];
echo '<hr/>';
// 对象(Object)
$obj = new stdClass();
var_dump($obj);
echo '<hr/>';
// 资源类型(Resource)
$handle = fopen('02_string.php','r');
var_dump($handle);

echo '<hr/>';

//a.声明变量并且赋NULL或null
$null = NULL;
var_dump($null);
echo '<br/>';
//b.声明变量但未赋值
$null2;
var_dump($null2);
echo '<br/>';
//c.unset()删除变量中的值
$var ='hello';
var_dump($var);
unset($var);
var_dump($var);






















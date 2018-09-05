<?php
header('Content-Type:text/html;charset=utf-8');
$int = 20;
$bool = true;
$float = 56.7;
$str1 = 'abc';
$str2 = '12.5';//合法的数值字符串
$str3 = '6.7.8.8';
$arr = array('a','b');
var_dump(is_integer($int));
echo '<br/>';
var_dump(is_int($int));
echo '<br/>';
var_dump(is_long($float));
echo '<hr/>';
//(9)is_numeric
//描述：  检测变量是否是数值(整数，浮点,合法的数值字符串)
var_dump(is_numeric($int));
echo '<br/>';
var_dump(is_numeric($float));
echo '<br/>';
var_dump(is_numeric($str1));
echo '<br/>';
var_dump(is_numeric($str2));
echo '<br/>';
var_dump(is_numeric($str3));
echo '<hr/>';
//(10)is_scalar
//描述：  检测变量是否是标量(整数，浮点,布尔,字符串)
var_dump(is_scalar($int));
echo '<br/>';
var_dump(is_scalar($str1));
echo '<br/>';
var_dump(is_scalar($arr));
echo '<br/>';














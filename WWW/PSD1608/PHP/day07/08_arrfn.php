<?php
header('Content-Type:text/html;charset=utf-8');
// in_array:判断变量是否是数组中的值
$var = true;
$arr = array('a','b','c','d');
//松散比较  true=='a'  -->true
var_dump(in_array($var,$arr));
echo '<br/>';
// $strict为true $needle在$haystack中的值进行严格比较，值和类型都有等
var_dump(in_array($var,$arr,true));
// 严格比较true==='a' -->false
echo '<br/>';
// array_key_exists:判断变量是否是数值中的键名称
$var ='blue';
$arr = array('red'=>'one','blue'=>'two');
var_dump(array_key_exists($var,$arr));
echo '<hr/>';
/* array_push:在数组的尾部添加一个或多个成员值，并返回新数组的长度
         array_unshift:在数组的头部添加一个或多个成员值，并返回新数组的长度
         
         array_pop:在数组的尾部删除一个成员值，并返回该值
         array_shift:在数组的头部删除一个成员值，并返回该值 
 */
$arr = array('a','b','c');
echo array_push($arr,'d','e');
echo '<pre>';
print_r($arr);
echo '</pre>';
echo array_unshift($arr,'f','g');
echo array_unshift($arr,'h');
echo '<pre>';
print_r($arr);
echo '</pre>';
echo array_pop($arr);
echo '<pre>';
print_r($arr);
echo '</pre>';
echo array_shift($arr);
echo '<pre>';
print_r($arr);
echo '</pre>';

























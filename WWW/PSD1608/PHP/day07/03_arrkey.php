<?php
header('Content-Type:text/html;charset=utf-8');
/*(1)数组中第一个省略的键名称,并且之前
           的数组中的成员值对应的键名称都是负数，
           该键名称的编号是0.  */
$arr = array(
  -3 =>'a',
  -20=>'b',
  -2 =>'c',
  'd',
  'e' 		
);
echo '<pre>';
print_r($arr);
echo '</pre>';
/*(2)数组中第一个省略的键名称,并且之前
           的数组中的成员值对应的键名称有正数,负数，
           该键名称的编号是最大值+1.  
 * 
 */
$arr = array(
		-3 =>'a',
		32=>'b',
		10 =>'c',
		'd',
		'e'
);
echo '<pre>';
print_r($arr);
echo '</pre>';
//(3)数组中键名称是浮点型转为整型，向下取整
$arr = array(
		-3 =>'a',
		1.9=>'b',
		10 =>'c'
);
echo '<pre>';
print_r($arr);
echo '</pre>';
// (4)数组中键名称合法的数字字符串，如果数值
//整数转为整型，如果数值是浮点型该字符串
$arr = array(
		-3 =>'a',
		'1.9'=>'b',
		'10' =>'c'
);
echo '<pre>';
var_dump($arr);
echo '</pre>';
/* (5)数组中键名称是布尔，true 转 1，
        false转为0
   (6)数组中键名称是null 转为空字符串
 */

$arr = array(
		true =>'a',
		false=>'b',
		null =>'c',
		'' =>'d'
);
echo '<pre>';
print_r($arr);
echo '</pre>';

echo '<hr/>';
$arr = array(
    'a', //[0]
	'b', //[1]
	true=>'c',//[1]
	false=>'d',//[0]
	1.9=>'e',//[1]
	'1.9'=>'f',//[1.9]
	'1'=>'g',// [1]
	'0'=>'h', //[0]
	'true'=>'i',//[true]
	null=>'j',//['']
	''=>'k',//['']
    1=>'l', //[1]
	2=>'m'  //[2]		
);
echo '<pre>';
print_r($arr);// [0]=>h,[1]=>l,[1.9]=>f
              // [true]=>i,[]=>k,[2]=>m
echo '</pre>';

echo '<hr/>';
// 下面是空数组的是
$arr1 =array(); // 只有该数组是空数组
$arr2 = array('','','');
$arr3 = array(null,null,null);
$arr4 = array(false,false,false);

echo '<pre>';
print_r($arr1);
print_r($arr2);
print_r($arr3);
print_r($arr4);
echo '</pre>';





















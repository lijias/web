<?php
header('Content-Type:text/html;charset=utf-8');
/*(7) 变量函数:将函数名称(字符串)赋值给变量，而使用
        变量时带小括号,那PHP引擎能正常解析函数  */
$var ='rtTT';
$fn = 'strtolower';
echo $fn($var); // strtolower($var);
echo '<hr/>';
function isTest(){
	echo 'hello';
}
isTest();
echo '<br/>';
$fn = 'isTest';
$fn();

echo '<hr/>';
//
/*将回调函数作用到给定数组的单元上 
 * @param  callback  $fn
 * @param  array  $arr
 * @param array
 * function_exists :判断函数是否存在
 */
function arrayMap($fn,$arr){
	foreach($arr as $v){
		//$newArray[] = $fn($v);//变量函数
     $newArray[] = function_exists($fn)
                        ?$fn($v):$v;
	}
	return $newArray;
}
// 将数组中的每个值转为小写
$arr = array('3fdf','2eTT','dRe');
$newArr = arrayMap('strtolower',$arr);
echo '<pre>';
print_r($newArr);
echo '</pre>';
// 将数组中的每个值获得平方的值
$newArr = arrayMap('isPing',$arr);
function isPing($n){
	return $n*$n;
}
echo '<pre>';
print_r($newArr);
echo '</pre>';





















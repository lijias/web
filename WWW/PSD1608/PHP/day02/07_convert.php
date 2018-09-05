<?php
header('Content-Type:text/html;charset=utf-8');
/*其它类型转为字符型
 * 用 echo输出 举例，在输出之前转为字符串   
 *  a.整型和浮点型转为数值本身
 */
echo 28;  // '28'
echo '<br/>';
echo 4.78; // '4.78'
echo '<br/>';
/*b.布尔类型转为字符型 true 转为'1', 
 * false转为空字符串  */
$married = true;
echo $married; // '1'
echo '<br/>';
$married = false;
echo $married; //空字符串

echo '<hr/>';
// c.null转为字符型 空字符串
echo 'A',null,'B'; //AB
echo '<br/>';
echo 'A','null','B';//AnullB
echo '<br/>';
echo 'A',true,'B';//A1B
echo '<br/>';
echo 'A','true','B';//AtrueB
echo '<br/>';
echo 'A',2e3,'B';//A2000B
echo '<br/>';
echo 'A','2e3','B';//A2e3B
echo '<br/>';
echo 'A','7true','B';//A7trueB
echo '<br/>';
echo 'A','null7','B';//Anull7B
echo '<br/>';
echo '<hr/>';
//d.数组转为字符型 Array字符串
$arr = array('a','b','c');
echo $arr;
echo '<br/>';
//e.资源转为字符型 Resource id #数字 字符串
$handle = fopen('02_string.php','r');
echo $handle;



















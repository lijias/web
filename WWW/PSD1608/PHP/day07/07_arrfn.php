<?php
header('Content-Type:text/html;charset=utf-8');
//explode: 使用一个字符串分割另一个字符串为数组
// array explode ( string $delimiter ,string $string [, int $limit ] )
// $limit 为正数 分割值个数，为负值省略的字符个数
$str = 'a|b|c|d|e';
$arr = explode('|',$str);
echo '<pre>';
print_r($arr);
echo '</pre>';
$arr = explode('|',$str,2);
echo '<pre>';
print_r($arr);
echo '</pre>';
$arr = explode('|',$str,-2);
echo '<pre>';
print_r($arr);
echo '</pre>';
echo '<hr/>';
/*单一入口 index.php  
 *  $str ='/psd1608/cms/index.php/Update/index/id/3'
 *  转为数组 获得 index.php 对应的键名称
 */
$str ='/psd1608/day03/cms/index.php/List/del/id/3';
$arr = explode('/',$str);
echo '<pre>';
print_r($arr);
echo '</pre>';
foreach($arr as $k=>$v){
	if($v=='index.php'){
	   $index = $k;
	   break;
	}
}
echo $index;
echo '<hr/>';
// 获得文件扩展名
$str ='fr.dfd.gif.png.jpg';
// 方法一： substr  strrpos
$ext = substr($str,strrpos($str,'.')+1);
echo $ext;
echo '<br/>';
// 方法二： explode  end :获得数组中的最后一个值
$str ='fr.dfd.gif.png.jpg';
$arr = explode('.',$str);
echo end($arr);
echo '<hr/>';
$arr = array('a','b','c','d','e');
echo current($arr);//a
echo '<br/>';
echo next($arr); //b
echo '<br/>';
echo next($arr); //c
echo '<br/>';
echo current($arr); //c
echo '<br/>';
echo end($arr); //e
echo '<br/>';
echo prev($arr); //d
echo '<br/>';
echo reset($arr); //a



































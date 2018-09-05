<?php
header('Content-Type:text/html;charset=utf-8');
$var = 'abcDddDefg';
echo strpos($var,'b');//1
echo '<br/>';
echo strpos($var,'d');//4 区别大小写
echo '<br/>';
echo stripos($var,'d');//3 不区别大小写
echo '<br/>';
echo strrpos($var,'d');//5 最后出现的编号位置， 区别大小写
echo '<br/>';
echo strripos($var,'d');//6 最后出现的编号位置， 不区别大小写
echo '<hr/>';
$var = 'abcDddDefg';
echo strstr($var,'d');//ddDefg
echo '<br/>';
echo strstr($var,'d',true);//abcD
echo '<br/>';
echo stristr($var,'d');//DddDefg 不区分大小写
echo '<br/>';
$var = 'abcDddDefg';
echo strchr($var,'d');//ddDefg
echo '<br/>';
echo strrchr($var,'d');//dDefg 区分大小写

echo '<hr/>';
$var ='abcde';
echo strrev($var);
echo '<br/>';
//str_replace:字符串的替换
$var ='abcbdbebfbg';
echo str_replace('b','<span style="color:
	 red">*</span>',$var);
echo '<br/>';
$var ='abcbdbebfbg';
$str = str_replace('b',null,$var);
echo $str;
echo strlen($str);
echo '<br/>';
$var ='abcbdbebfbg';
$search = array('a','b','c');
echo str_replace($search,null,$var);
echo '<hr/>';
$str =<<<TT
  Tom & Jerry
  D>A D<E
  he said "I'm fine"
TT;
echo htmlspecialchars($str,ENT_QUOTES);
echo '<hr/>';
$pwd1 ='123456';
echo  md5($pwd1);
echo '<br/>';
echo sha1($pwd1);
echo '<br/>';
echo  md5(sha1(md5($pwd1)));
echo '<hr/>';
// strip_tags:从字符串中去除 HTML 和 PHP 标记
$str ='<span>T</span><span>0</span><span>v</span><span>Z</span>';
echo $str;
echo strlen($str);
echo '<br/>';
echo strip_tags($str);
echo strlen(strip_tags($str));
echo '<br/>';
//使用可选的第二个参数指定不被去除的字符列表
$var ='<div><a href="#">链接</a></div>';
echo strip_tags($var,'<a>');



















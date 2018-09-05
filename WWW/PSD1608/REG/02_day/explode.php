<?php
header('Content-Type:text/html;charset=utf-8');
/*
 * 3、字符串的分割
   有如下字符串：
   $str = "this is a test"
   用字符串中的字母 s 对字符串进行分割
 */
$str = "this is a test";
$arr = explode("s",$str);
echo "<pre>";
var_dump($arr);
echo "</pre>";
echo implode("s",$arr);

<?php
header('Content-Type:text/html;charset=utf-8');
/*
 * 1、有如下地址：
    $url = "http://www.baidu.com/index.php"
    $url = "../image/a.jpg"
   写一个自定义函数，获取不同url地址下的文件名称
 */
function laLa($url){
  $t = strrpos($url,"/");
  $f = substr($url,$t+1);
  return $f;
}
$url = "http://www.baidu.com/index.php";
echo laLa($url);
/*echo "<hr/>";
$p="//";
preg_match_all($p,$url,$match);*/

 
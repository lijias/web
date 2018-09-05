<?php
header('Content-Type:text/html;charset=utf-8');
// (1) $变量名称 =array([[$key=>]$value,...]);
//  空数组
$arr = array();
print_r($arr);
echo '<br/>';
// 索引数组-- 省略键名称
$arr = array('a','b','c');
echo '<pre>';
print_r($arr);
echo '</pre>';
// 索引数组 ---不省略键名称
$arr = array(
   3 =>'one',
   7 =>'two',
   12=>'three',
   7 =>'four'	
);
echo '<pre>';
print_r($arr);
echo '</pre>';
// 关联数组
$arr = array(
  'user' => 'tom',
  'age' =>20,
  'sex' =>'男',
  'salary'=>8888.67,	
  'married'=>true
);
echo '<pre>';
print_r($arr);
echo '</pre>';









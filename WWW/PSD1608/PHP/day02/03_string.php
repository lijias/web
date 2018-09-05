<?php
header('Content-Type:text/html;charset=utf-8');
$str = 'abcdefg';
// (a)编号从零开始，{} 还可以用[]替代
// 获得 一个字母 c;(查)
echo $str{2};
echo '<br/>';
// 获得 一个字母 f;(查)
echo $str[5];
echo '<br/>';
//将  字母d 改为 t (改)
$str{3} = 'twz';
echo $str;
echo '<br/>';
// 将字母a 删除(改变形)
$str{0} ='';
var_dump($str);
echo '<br/>';
// 在$str 最后添加一个字母 z(添加)
$str{7} ='zabc';
echo $str;
echo '<br/>';
// (b)当编号大于字符长度，用一个空格填补
$str{20} ='w';
var_dump($str);

















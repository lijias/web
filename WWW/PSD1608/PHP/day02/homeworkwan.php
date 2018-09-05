<?php
header('Content-Type:text/html;charset=utf-8');
$a = 18;
$b =19;
$b = 14;
$B = 22;
$c = $a +$b; //18+14
echo $a,$b,$c;// 18,14,32
echo '<br/>';

$product ='灯泡';
$price =18.56;
$price = 35.5;
$useYear = 8;
$engery = true;

echo $product,'<br/>',$price,'<br/>',$useYear,'<br/>',$engery;
echo '<br/>';
var_dump($product,$price,$useYear,$engery);

echo '<br/>';

// 字符类型，定界符(单引号和双引号的区别)
$var ='happy';
echo '字符串内容是:',$var,'<br/>';
echo '字符串内容是:$var<br/>';
echo "字符串内容是:$var<br/>";
echo '<br/>';

// 单引号和双引号在HTML实体和转义字符的使用
// 要求：用双引号输出字符串
echo "<p align=\"center\">段落内容</p>";


























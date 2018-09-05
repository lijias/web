<?php
header('Content-Type:text/html;charset=utf-8');
//应用正则表达式,匹配邮箱
$subject="johs-ds@qq.com";
$pattern="/\w+([\.\-]\w+)?@\w+\.(com|cn|org|net)/";
preg_match_all($pattern,$subject,$match);
var_dump($match);
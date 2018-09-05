<?php
header('Content-Type:text/html;charset=utf-8');
/*
 * 应用正则表达式,匹配下面的字符串
 * heeeeello
 * 要求限制e出现的次数,范围可以0-无限大
 */
$subject="heeeeello";
$pattern="/he*llo/";
preg_match_all($pattern,$subject,$match);
var_dump($match);
<?php
header('Content-Type:text/html;charset=utf-8');
//正则匹配手机号码
$subject="13578632154";
$pattern="/^1[34578]\d{9}$/";
preg_match_all($pattern,$subject,$match);
var_dump($match);
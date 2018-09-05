<?php
header('Content-Type:text/html;charset=utf-8');
//正则匹配日期格式为YYYY-MM-DD或YYYY-MM-DD
$subject="2013-12-29";
$pattern="/^\d{4}([\-\/])\d{2}\\1\d{2}$/";
preg_match_all($pattern,$subject,$match);
var_dump($match);
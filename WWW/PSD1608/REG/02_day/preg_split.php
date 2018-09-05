<?php
header('Content-Type:text/html;charset=utf-8');
/*
 * 4、有如下的字符串
    $str = "th:i,s i.s@ a te%st"
    应用字符串的分割处理函数。在字符串中按照特殊符号进行分割。
 */
$subject = "th:i,s i.s@ a te%st";
$pattern = "/[\:\,\.\@\%]/";
var_dump(preg_split($pattern,$subject));
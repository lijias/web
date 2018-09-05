<?php
header('Content-Type:text/html;charset=utf-8');
/*
 * 2、给一组邮箱地址
   $emails = array("tom@qq.com","jack.john@qq.com","163.com");
   找出合法的邮箱地址。
 */
$emails = array("tom@qq.com","jack.john@qq.com","163.com");
$pattern = "/\w+([\.\-]\w+)?@\w+\.(com|cn|org|net)/";
var_dump( preg_grep($pattern,$emails));
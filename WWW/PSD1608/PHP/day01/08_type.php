<?php
header('Content-Type:text/html;charset=utf-8');
/* PHP弱类型语言：数据类型，由存储值决定 (比如：瓶子：酱油，醋，酒等) 
 * C ,java 强类型语言：必须声明变量类型(酒瓶)
 */
$userName ='rose';
$age = 18;
$sex = '男';
$addr = '北京';
$salary = 8888.88;
$married = true;  // true false
var_dump($userName,$age,$sex,$addr,$salary,$married);
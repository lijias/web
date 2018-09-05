<?php
$ob=new Redis();
$ob->connect('127.0.0.1',6379);
//$str=$ob->hget("t1",'key1');//一次多一个值
//var_dump($str);
//hash表中值得个数
//$len=$ob->hlen('t1');
//var_dump($len);
$re=$ob->hGetAll('t1');
var_dump($re);
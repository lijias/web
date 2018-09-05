<?php
//往内存中写数据，
$ob=new Redis();
//连接redis
$ob->connect("127.0.0.1",6379);
//写，set
//$re=$ob->set("key2",'nihao,123');
//$re=$ob->setnx("key2","ceshi");

$re=$ob->set('key3','1');
var_dump($re);
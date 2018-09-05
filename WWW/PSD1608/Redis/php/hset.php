<?php
$ob=new Redis();
$ob->connect('127.0.0.1',6379);
$ob->hset("t1",'key1','nihao');
$ob->hset('t1','key2','wohao');
$ob->hset('t1','key3','dajiahao');
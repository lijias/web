<?php
$ob=new Redis();
$ob->connect("127.0.0.1",6379);
$re=$ob->del("key2");
var_dump($re);
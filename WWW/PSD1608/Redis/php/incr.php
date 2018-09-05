<?php
$ob=new Redis();
//连接redis
$ob->connect("127.0.0.1",6379);
$ob->incrby("key3",10);
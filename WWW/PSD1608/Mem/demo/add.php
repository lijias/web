<?php
require '../class/memcached.class.php';
$m=new Memcached(
	array( 
               'servers' => array('127.0.0.1:11211'), 
               'debug'   => false, 
               'compress_threshold' => 10240, 
               'persistant' => true)
);
//$re=$m->add("name_1",'小宋');
$re=$m->add('student_1',array('name'=>'xiaosong','age'=>22));
var_dump($re);
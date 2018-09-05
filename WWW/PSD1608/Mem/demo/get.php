<?php
header("content-type:text/html;charset=utf-8");
require '../class/memcached.class.php';
$m=new Memcached(
		array(
				'servers' => array('127.0.0.1:11211'),
				'debug'   => false,
				'compress_threshold' => 10240,
				'persistant' => true)
);
$key="student_1";
var_dump($m->get($key));
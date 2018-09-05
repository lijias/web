<?php
header('Content-Type:text/html;charset=utf-8');
$filename="test.txt";
touch($filename);
var_dump(file_put_contents($filename,"金卡舒肤佳东方红街上看到付款计划"));
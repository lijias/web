<?php
header('Content-Type:text/html;charset=utf-8');
$married = true;
var_dump($married);//bool(true) 
echo '<br/>';
echo $married;// '1'
echo '<hr/>';
$married = false;
var_dump($married);//bool(false) 
echo '<br/>';
echo $married;//空字符串''

<?php
header('Content-Type:text/html;charset=utf-8');
function __autoload($classname){
 include $classname.'.class.php';
}
$m=new Mobile();
echo $m->voltage;
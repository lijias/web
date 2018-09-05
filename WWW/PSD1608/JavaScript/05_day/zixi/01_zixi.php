<?php
header('Content-Type:text/html;charset=utf-8');
//另外建立一个test.php文件，在test.php文件中应用autoload魔术方法，实例化Mobile类，访问类的成员方法call
function __autoload($classname){
	include $classname.'.class.php';
}
$m = new Mobile();
$m->call();
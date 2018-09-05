<?php
header('Content-Type:text/html;charset=utf-8');
//单例模式
class Single{
public $name="bobo";
static $obj=null;

private function __construct(){

}

static function Getobj(){
if (is_null(self::$obj)){
self::$obj=new Single();
//$obj=new Single();
}
return self::$obj;
//return $obj;
}
function __destruct(){
echo "bye";
}
}
$obj=Single::Getobj();
echo $obj->name;
$obj1=Single::Getobj();
echo $obj1->name;
<?php
header('Content-Type:text/html;charset=utf-8');
class iiii{
public $name="tom";
static $obj=null;

private function __construct(){

}
static function Gobj(){
if (is_null(self::$obj)){
self::$obj=new iiii();
}
return self::$obj;
}
function __destruct(){
echo "lalalal";
}
}
$obj=iiii::Gobj();
echo $obj->name;
$obj1=iiii::Gobj();
echo $obj1->name;
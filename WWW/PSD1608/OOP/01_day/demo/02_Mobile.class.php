<?php
header('Content-Type:text/html;charset=utf-8');
/*
 * 在Mobile类里面，在成员方法call中对成员属性进行访问。
   给类定义中给成员属性符初值：voltage=110
   在类外访问成员方法call
 */
class Mobile{
 //定义成员属性	
 public $voltage=110;
 //定义成员方法
 function call(){
     echo $this->voltage." I can make a phone call";
 }
}

//类的实例化
$m=new Mobile;
//类对象访问成员方法
$m ->call();








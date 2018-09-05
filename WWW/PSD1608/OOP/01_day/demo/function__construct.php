<?php
header('Content-Type:text/html;charset=utf-8');
/*
 * 5、在Mobile类里面,定义构造方法，在构造方法中给成员属性voltage
   赋初值。在类外对成员属性voltage进行访问。
 */
class Mobile{
 //定义成员属性	
 public $voltage=220;
 //定义成员方法
 function __construct($voltage){
    $this->voltage =$voltage;
 }
 function call(){
     echo $this->voltage." I can make a phone call";
 }
}
$p = new Mobile(110);
echo $p->voltage;
<?php
/*
 * 6、在Mobile类里面,定义析构方法，在析构方法中输出"bye"
   在类外实例化类Mobile。观察输出。
 */
header('Content-Type:text/html;charset=utf-8');
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
 function __destruct(){
     echo "<br/>bye";
 }
}
$p = new Mobile(110);
echo $p->voltage;

<?php
header('Content-Type:text/html;charset=utf-8');
/*
 * 1、定义一个电话类Mobile，电话类有成员属性voltage(电压)
   成员方法：call()
 */
class Mobile{
 //定义成员属性	
 public $voltage;
 //定义成员方法
 function call(){
     echo "I can make a phone call";
 }
}
/*
 * 2、实例化类Mobile,通过类对象给成员属性
 * voltage赋初值220.
 * 通过类对象读取出成员属性voltage的值。
 */
//类的实例化
$m=new Mobile;
//对成员属性赋值
$m -> voltage=220;
//对成员属性读取
echo $m->voltage;
/*
 * 3、应用Moblie类的类对象，对成员方法call()进行访问。
   成员方法call()完成功能：输出"I can make a phone call"
 */
echo "<br/>";
$m->call();
















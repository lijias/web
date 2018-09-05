<?php
header('Content-Type:text/html;charset=utf-8');
/*
 * 1、定义一个电话类Mobile，电话类有成员属性voltage(电压)
   成员方法：call()

2、实例化类Mobile,通过类对象给成员属性voltage赋初值220.通过类对象读取出成员属性voltage的值。

3、应用Moblie类的类对象，对成员方法call()进行访问。
   成员方法call()完成功能：输出"I can make a phone call"

4、在Mobile类里面，在成员方法call中对成员属性进行访问。
   给类定义中给成员属性符初值：voltage=110
   在类外访问成员方法call

5、在Mobile类里面,定义构造方法，在构造方法中给成员属性voltage
   赋初值。在类外对成员属性voltage进行访问。

6、在Mobile类里面,定义析构方法，在析构方法中输出"bye"
   在类外实例化类Mobile。观察输出。

 */
class Zixi{
	//成员属性
 public $voltage=110;
    //成员方法
 function __construct($voltage){
     $this->voltage=$voltage;
 }
 function call(){
 	$this->select();
   echo $this->voltage." I can make a phone call";
 }
 function select(){
   echo "我擦咧</br>";
 }
 function __destruct(){
  echo "<br/>bye";
 }
}
$z=new Zixi(220);
//$z->voltage=220;
//echo $z->voltage;
$z->call();
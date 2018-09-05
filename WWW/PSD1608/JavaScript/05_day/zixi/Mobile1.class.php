<?php
header('Content-Type:text/html;charset=utf-8');
//1、定义一个Mobile1类，声明成员属性voltage，给成员属性赋初值
//   110，实例化类后访问成员属性并输出值。
//   Mobile.class.php
/*
 * 2、应用上一题定义的类，在类中声明一个成员方法，message(),
在message()中输出，I can send a message.
在类外应用类对象访问成员方法message
*/
/*
 * 3、应用上一题的类，在类中定义构造方法，在构造方法中给成员属性 voltage赋初值 220,
 * 在类外访问成员属性voltage并输出结果。
 */
/*
 * 4、在上一题中的类里定义析构方法，输出bye，实例化类后观察析构方法的输出。
 */
class Mobile1{
	public $voltage;
	
	function __construct($voltage){
		$this->voltage=$voltage;
	}
	
	function message(){
		echo "I can send a message.";
	}
	
	function __destruct(){
		echo "<br/>bye";
	}
}
$m=new Mobile1(220);
//$m->voltage=110;
echo $m->voltage;
echo "<br/>";
$m->message();

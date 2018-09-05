<?php
header('Content-Type:text/html;charset=utf-8');
/*
 * 3、定义父类Person.class.php，定义子类Teacher.class.php，
 *   在父类中有成员属性$name = "tom",有成员方法walk()，
 *   输出内容“I can walk”，在子类中继承父类Person,在实例化子类对象，
 *   访问父类中的成员属性和成员方法。观察输出。
 */
include 'Person.class.php';
class Teacher extends Person{
 public $school;
 
 function walk(){
 echo "I'm teacher".person::walk();
 }
 function teach(){
 echo "I can teacher";
 }
}
$t=new Teacher();
//echo $t->name;
$t->walk();
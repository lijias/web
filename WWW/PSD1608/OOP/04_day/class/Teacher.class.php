<?php
header('Content-Type:text/html;charset=utf-8');
/*
 * 1、定义Person 类，定义Teacher类继承Person类，实例化Teacher类，
   判断Teacher类的类对象是否属于Person类。如果属于，则输出
   yes，否则输出no
 */
include 'Person.class.php';
class Teacher extends  Person{

}
$t=new Teacher();
$p=new Person();
if ($t instanceof Person){
    echo "yes";
}else {
	echo "no";
}
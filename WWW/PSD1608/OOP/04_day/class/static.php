<?php
header('Content-Type:text/html;charset=utf-8');
/*
 * 3、在Person中声明被static修饰的成员属性$country，在类里和类外分别对成员属性$country进行访问。
 */
class Person{
//声明成员方法$COUNTRY
static $COUNTRY="china";

function walk(){
echo self::$COUNTRY;
echo "i can walk";
}
//声明成员方法test
static function test(){
echo "nihao";
}
}
echo Person::$COUNTRY;
echo "<hr/>";
$p=new Person();
$p->walk();
echo "<hr/>";
echo Person::test();
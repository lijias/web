<?php
header('Content-Type:text/html;charset=utf-8');
/*
 * 1、定义Person 类，定义Teacher类继承Person类，实例化Teacher类，
   判断Teacher类的类对象是否属于Person类。如果属于，则输出
   yes，否则输出no
 */
/*
 * 2、在Person类中声明常量COUNTRY，试着在类里和类外访问常量
   COUNTRY
 */
class Person{
const COUNTRY="china";
function walk(){
echo "i can walk";
}
}
echo Person::COUNTRY;
<?php
header('Content-Type:text/html;charset=utf-8');
abstract class Person{
abstract function name();
}
class Student extends Person{
function name(){}
}
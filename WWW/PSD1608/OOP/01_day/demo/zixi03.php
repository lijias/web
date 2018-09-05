<?php
header('Content-Type:text/html;charset=utf-8');
//类的语法定义
class Moble{
     //成员   
      public $value=100;
   //构造方法
      function __construct($value){
        $this-> value=$value;
        
   }
	//方法 行为
      function call(){
      echo   $this->value."I can make a phone call";
      }
      function __destruct(){
      echo "bye";
      }
}
//实例化
$m=new Moble(200);

//读取
$m->call();

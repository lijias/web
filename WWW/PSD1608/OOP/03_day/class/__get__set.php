<?php
header('Content-Type:text/html;charset=utf-8');
/*
 * 2、在Mobile类里面应用魔术方法__set对私有化成员属性voltage值进行过滤，
 * 要求取值为110和220,默认取值为220 ，
 * 应用魔术方法__get或者设置的私有化成员属性。
 */
class Mobile{
  private $voltage;
  private $model;
  
  function __set($variable,$value){
  	 //过滤私有化的成员属性
     if ($variable=="voltage"){
     $voltage_arr=array("220","110");
       if (in_array($value,$voltage_arr)){
      	      $this->voltage=$value;
      }else {
              $this->voltage="220";
      }
    }
  }
  
  function __get($variable){
     return  $this->$variable;
  }
}
$m=new Mobile();
$m->voltage="110";
echo $m->voltage;
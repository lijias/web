<?php
header('Content-Type:text/html;charset=utf-8');
/*
 * 2、在Mobile类里面应用魔术方法__set对私有化成员属性voltage值进行过滤，
 * 要求取值为110和220,默认取值为220 ，
 * 应用魔术方法__get或者设置的私有化成员属性。
 */
class Mobile{
private $voltage;

function __set($var,$value){
 if ($var=="voltage"){
 	$votage_arr=array("110","220");
  if (in_array($value,$votage_arr)){
   $this->voltage=$value;
  }else{
   $this->voltage="220";
  }
 }
}
function __get($var){
  echo $this->$var;

}
}
$m=new Mobile();
$m->voltage="110";
$m->voltage;
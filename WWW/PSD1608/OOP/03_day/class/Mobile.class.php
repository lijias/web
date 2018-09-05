<?php
header('Content-Type:text/html;charset=utf-8');
/*
 * 1、定义一个Mobile类，类有私有化成员属性voltage，
 *   要求私有化成员属性voltage的取值可以为110和220两个值，
 *   超出这个范围，取值为220.
 */
class Mobile{
  private $voltage;
  
  function setVoltage($voltage){
  $voltage_arr=array("110","220");
  if (in_array($voltage,$voltage_arr)){
   $this->voltage=$voltage;
   }else {
   $this->voltage="220";
   }
  } 
  function getVoltage(){
  return  $this->voltage;
  } 
}
$m=new Mobile();
$m->setVoltage(123);
echo $m->getVoltage();
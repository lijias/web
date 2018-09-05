<?php
header('Content-Type:text/html;charset=utf-8');
/*
 * 4、应用魔术方法__call，将类中两个成员方法改写到魔术方法__call中。
              两个方法名称分别为       a()输出字符串 hello a,
                    b()输出字符串 hello b,
 */
class person{

function __call($method,$args){
   $method_arr=array("a","b");
   if (in_array($method,$method_arr)){
   echo "hello ".$method;
   }else {
   echo $method."这个成员方法不存在.";
   }
 }
}
$c=new person;
$c->a();
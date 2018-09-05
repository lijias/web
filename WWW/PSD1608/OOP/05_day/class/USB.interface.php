<?php
header('Content-Type:text/html;charset=utf-8');
/*
 * 习题：
   1、定义接口USB,在接口中有如下抽象方法start,stop,run，
         定义子类Mouses，继承接口USB.

 */
//定义接口USB
interface USB{
function start();
function run();
function stop();
}
//定义子类Mouses，继承接口USB.
class Mouses implements USB{
 function start(){
 	echo "加载<br/>";
 }
 function run(){
    echo "运行<br/>";
 }
 function stop(){
 	echo "停止<br/>";
 }
}
//风扇
class Fan implements USB{
 function start(){
 	echo "风扇加载<br/>";
 }
 function run(){
    echo "风扇运行<br/>";
 }
 function stop(){
 	echo "风扇停止<br/>";
 }
}
//Computer类
class Computer{
function useUsb(USB $u){
 $u->start();
 $u->run();
 $u->stop();
}
}
//Worker连接usb与computer
class Worker{
function getWork(){
 $m=new Mouses();
 $c=new Computer();
 $f=new Fan();
 $c->useUsb($f);
 $c->useUsb($m);
}
}
$w=new Worker();
$w->getWork();






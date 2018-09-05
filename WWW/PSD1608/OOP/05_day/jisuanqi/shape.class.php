<?php
header('Content-Type:text/html;charset=utf-8');
abstract class Shape{
//周长
abstract function cir();
//面积
abstract function area();
//输出
abstract function view(); 
}
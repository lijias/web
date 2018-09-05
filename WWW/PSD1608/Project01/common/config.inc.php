<?php
session_start();
header('Content-Type:text/html;charset=utf-8');
function __autoload($classname){
include $classname.'.class.php';
}
//实例化DB.php
//__construct($server,$username,$password,$dbname)
$server="localhost";
$username="root";
$password="root";
$dbname="cms2";
$db=new DB($server,$username,$password,$dbname);
mysql_query("set names utf8");
//
$pdo=new PDO("mysql:host=localhost;dbname=cms2", "root", "root");
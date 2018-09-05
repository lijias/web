<?php
header('Content-Type:text/html;charset=utf-8');
//
//1、连接数据库
$link = mysql_connect("localhost","root","root");
//2、选择默认数据库
mysql_select_db("cms2");
mysql_query("set names utf8");
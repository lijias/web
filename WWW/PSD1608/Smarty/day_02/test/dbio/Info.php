<?php
header('Content-Type:text/html;charset=utf-8');
@include_once '../conn/DbConn.php';
@include_once 'conn/DbConn.php';

 class info{
 			static  function addInfo($name,$content,$aid){
 				$sql = "insert info (name,content,aid) value ('{$name}','{$content}',{$aid})";
 				$conn = DbConn::getInstance();
 				$result = $conn->exec($sql);
 				return $result;
 			}
 			static  function selInfo(){
 				$sql = "select * from info as a inner join admin as b on aid = b.id";
 				$conn = DbConn::getInstance();
 				$result = $conn->queryAll($sql);
 				return $result;
 			}
 		}
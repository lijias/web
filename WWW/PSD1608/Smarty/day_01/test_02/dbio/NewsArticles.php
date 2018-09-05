<?php 
	@include_once '../conn/DbConn.php';
	@include_once 'conn/DbConn.php';
	//留言
	class leaveWord
	{
        static function addLeaveWord($u,$l){
        	$sql = "insert infos (username,leaveword ) values ('$u','$l')";
        	$add = DbConn::getInstance();
        	$resule = $add->exec($sql);
        	return $resule;
        }
        static function selLeaveWord(){
        	$sql = "select * from infos";
        	$add = DbConn::getInstance();
        	$resule = $add->queryAll($sql);
        	return $resule;
        }
	}


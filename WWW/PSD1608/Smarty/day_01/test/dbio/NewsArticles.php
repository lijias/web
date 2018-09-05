<?php 
	@include_once 'conn/DbConn.php';
	@include_once '../conn/DbConn.php';
	
	//邮件
	class Email
	{
        static function selectEmail(){
        	$selectEmail = DbConn::getInstance();
        	$result=$selectEmail->queryAll("select * from mail_info");
        	return $result;
        }
        static function selEmail($emailId){
        	$selEmail = DbConn::getInstance();
        	$result=$selEmail->queryAll("select * from mail_info where emailId=$emailId");
        	return $result;
        }
        static function delEmail($emailId){
        	$delEmail = DbConn::getInstance();
        	$result=$delEmail->exec("delete from mail_info where emailId=$emailId");
        	return $result;
        }
	}

	
	//print_r($re);
	/*foreach ($result as $v)
	{
		echo $v['typeName']."<br/>";
		echo $v['title']."<br/>";
		echo $v['dateandtime']."<br/>";
	} */
?>
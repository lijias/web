<?php 
	@include_once 'conn/DbConn.php';
	@include_once '../conn/DbConn.php';
	
	//邮件
	class Email
	{
		//删除一条邮件
		static function delOneEmails($id){
			$sql = "delete from pre_mail where ID=$id";
			$conn = DbConn::getInstance();
			$result = $conn->exec($sql);
			return $result;
		}
		
		//查询一条邮件
		static function getOneEmails($id){
			$sql = "select * from pre_mail where ID=$id";
			$conn = DbConn::getInstance();
			$result = $conn->queryOne($sql);
			return $result;
		}
		
         //查询邮件表
         static function getEmails(){
         	$sql = "select * from pre_mail";
         	$conn = DbConn::getInstance();
         	$result = $conn->queryAll($sql);
         	return $result;
         }
	}

?>
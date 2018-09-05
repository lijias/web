<?php
include "../common/config.inc.php";
include "../common/pdo.inc.php";
		
//article表deleted=1
if($_POST){
	//获取用户选择的要回收的新闻id
	$ids = isset($_POST['selectbox'])?$_POST['selectbox']:"";
	//$ids是用户要回收的新闻id,格式是数组
	//PDO通知mysql做准备
	$query = "update article set deleted=1
			  where id=?";
	$statm = $pdo->prepare($query);
	//绑定参数
	foreach($ids as $id){
		$statm->bindParam(1,$id);
		//执行
		$result = $statm->execute();
		//会把删除失败的新闻id记录到日志里
		if(!$result){
			echo "更新新闻失败".$id;			
		}
	}
	echo "新闻回收成功";
	
}
?>


















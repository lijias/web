<?php
//恢复新闻 将deleted=1的新闻改为deleted=0
include "../common/config.inc.php";
include "../common/pdo.inc.php";

//PDO通知mysql做准备
$query = "update article set deleted=0 
		  where id=?";
$statm = $pdo->prepare($query);
//绑定参数
$id = $_GET['id'];
$statm->bindParam(1,$id);

//执行
$result = $statm->execute();
if($result){
	echo "恢复成功";
}else{
	echo "恢复失败";
}



?>







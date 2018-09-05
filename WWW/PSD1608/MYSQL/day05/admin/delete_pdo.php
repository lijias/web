<?php
include "../common/config.inc.php";
include "../common/pdo.inc.php";

//删除新闻纪录
//PDO通知mysql做准备
$query = "delete from article where 
		  deleted=1 and id=?";
$statm = $pdo->prepare($query);
//绑定参数
$id = $_GET['id'];
$statm->bindParam(1,$id);
//执行
$result = $statm->execute();
if($result){
	echo "删除成功";
}else{
	echo "删除失败";
}
 
?>






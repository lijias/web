<?php
//完成新闻的回收
include "../common/db.inc.php";
include "../common/config.inc.php";

$query = "update article set deleted=1 where 
		 id=".$_GET['id'];
$result = mysql_query($query);
if($result){
	echo "回收成功";
}else{
	echo "回收失败";
}
?>
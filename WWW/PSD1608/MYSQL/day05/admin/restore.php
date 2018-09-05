<?php
//恢复新闻 将deleted=1的新闻改为deleted=0
include "../common/config.inc.php";
include "../common/db.inc.php";

$query = "update article set deleted=0 
		  where id=".$_GET['id'];
$result = mysql_query($query);
if($result){
	echo "恢复成功";
}else{
	echo "恢复失败";
}

?>
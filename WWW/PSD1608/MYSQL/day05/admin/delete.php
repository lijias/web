<?php
include "../common/config.inc.php";
include "../common/db.inc.php";

$query = "delete from article where id=".$_GET['id']." and deleted=1";
$result = mysql_query($query);
if($result){
	echo "删除成功";
}else{
	echo "删除失败";
}
?>
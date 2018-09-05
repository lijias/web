<?php
include '../common/config.inc.php';
header('Content-Type:text/html;charset=utf-8');
//var_dump($_POST);
if ($_POST) {
	$ids=$_POST['ids'];
	if (!empty($ids)) {
		$statement="delete from cms_article where id=?";
		$p=$pdo->prepare($statement);
		$cgsc_id="";
		$scsb_id="";
		foreach ($ids as $v){
			$p->bindParam(1,$v);
			$result=$p->execute();
			if ($result) {
				$cgsc_id.="##".$v;
			}else {
				$scsb_id.="##".$v;
			}
		}
		echo "成功删除id为 ".$cgsc_id."<br/>";
		echo "删除失败id为 ".$scsb_id;
	}else {
		echo "没数据";
	}
}else {
	echo "这不是你该来的地方";
}
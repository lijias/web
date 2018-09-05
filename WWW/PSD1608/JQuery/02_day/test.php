<?php
header('Content-Type:text/html;charset=utf-8');
$id=isset($_POST['id'])?$_POST['id']:0;

	if($id==100){
		echo 1;
	}else{
		echo 2;
	}

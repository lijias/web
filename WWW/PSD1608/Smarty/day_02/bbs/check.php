<?php
	header('Content-Type:text/html;charset=utf-8');
	//为ajax应用做处理
	
	$cityCode = $_POST["cityCode"];
	
	if($cityCode == "010")
	{
		echo "北京";
	}
	elseif($cityCode == "022")
	{
		echo "天津";
	}
	else 
	{
		echo "不知道";
	}
	
	
?>
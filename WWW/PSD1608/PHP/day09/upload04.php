<?php
header('Content-Type:text/html;charset=utf-8');
include 'inc/common.function.php';
echo '<pre>';
print_r($_FILES);
echo '</pre>';
// 1. 将关联+关联的二维数组转为索引+关联的二维数组
foreach($_FILES as $val){
	              // $val 一维数组
	$arr[] = $val;
	// $arr[0] = array('name'=>'1.jpg','type'=>'image/jpeg');
	// $arr[1] = array('name'=>'2.jpg','type'=>'image/jpeg');
	
}

echo '<pre>';
print_r($arr);
echo '</pre>';


// 多文件上传
foreach($arr as $v){// 一维数组
	if($v['error']==0){
	  $filename =$v['name'];
	  $ext = exTension($filename);
	  $filename =uuid().'.'.$ext;
	  move_uploaded_file($v['tmp_name'],'upload/'.$filename);
	}
} 
























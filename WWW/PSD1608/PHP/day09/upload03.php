<?php
header('Content-Type:text/html;charset=utf-8');
include 'inc/common.function.php';
echo '<pre>';
print_r($_FILES);
echo '</pre>';

// 三维数组转为索引+关联的二维数组
foreach($_FILES as $val){ //$val 二维数组
	foreach($val['name'] as $k=>$v){
		              // $k 0 1 2
		              //$v 1.jpg 2.jpg 3.jpg
	   $arr[$k]['name'] = $v;
	   $arr[$k]['type'] = $val['type'][$k];
	   $arr[$k]['tmp_name'] = $val['tmp_name'][$k];
	   $arr[$k]['error'] = $val['error'][$k];
	   $arr[$k]['size'] = $val['size'][$k];
	}
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
























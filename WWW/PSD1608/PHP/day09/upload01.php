<?php
header('Content-Type:text/html;charset=utf-8');
echo '<pre>';
print_r($_FILES);
echo '</pre>';
//上传的文件名称
/* echo $_FILES['pic']['name']; */

// 1. 判断上传是否为 0 成功
if($_FILES['pic']['error']==0){
	//2.避免上传文件名称冲突，重命名唯一标识文件名称
	// 2.1 获得上传文件名称
	$filename = $_FILES['pic']['name'];
	// 2.2 获得文件名称扩展名
	$ext = substr($filename,strrpos($filename,'.')+1);
	// 2.3 获得重命名唯一标识的文件名
	$filename =md5(microtime()).'.'.$ext;
	//echo $filename;
	//3 将临时目录和文件上传到目标位置上
	move_uploaded_file($_FILES['pic']['tmp_name'],'upload/'.$filename);
}






















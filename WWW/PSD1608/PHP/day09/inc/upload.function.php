<?php
header('Content-Type:text/html;charset=utf-8');
/*将上传接受的信息都转为 索引+关联的二维数组
 *@param
 *@return array 
 */
function newArr(){
	foreach($_FILES as $val){
		if(is_string($val['name'])){
			// 单文件或单独命名多文件上传（关联+关联）
		    // $val 一维数组
		   $newArr[] = $val;
		}else{
			// 以数组形式命名多文件上传（三维数组）
			// $val 二维数组
			foreach($val['name'] as $k=>$v){
				      // $k 0 1 2
				      // $v 1.jpg 2.jpg 3.jpg
				$newArr[$k]['name'] =$v;
				$newArr[$k]['type'] =$val['type'][$k];
				$newArr[$k]['tmp_name'] =$val['tmp_name'][$k];
				$newArr[$k]['error'] =$val['error'][$k];
				$newArr[$k]['size'] =$val['size'][$k];
			}
		}
		
	}
	return $newArr;
}
/* 单文件或多文件上传
 * @param
 * @return  mixed 返回重命名后的新的二维数组，目的将来重命名后的文件存入数据
 *   成功返回数组失败返回false
 */
function uploadFile(){
	//1.获得新的 索引+关联的二维数组(循环每个文件上传)
	$arr = newArr();
	foreach($arr as $v){//$v 一维数组
		//2.判断 上传报错 0 成功
		if($v['error']==0){
			//3避免上传文件冲突给文件重命名
			$filename = $v['name'];
			$ext =exTension($filename);
			$filename = uuid().'.'.$ext;
			// 保存重命名后的文件
			$v['name'] = $filename;
			$fileArrr[] = $v;
			//4.临时目录和文件名称移动到目标位置上
			move_uploaded_file($v['tmp_name'],'upload/'.$filename);
		}else{
		   return false;
		}
		
	}
	return $fileArrr;
}






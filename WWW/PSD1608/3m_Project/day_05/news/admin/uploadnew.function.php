<?php
header('Content-Type:text/html;charset=utf-8');
/* 获得文件扩展名
 *@param string $n
*@return string
*/
function exTension($n){
	return substr($n,strrpos($n,'.')+1);
}
/* 获得唯一标识名称
 * @param
* @return string
*/
function uuid(){
	return md5(microtime().rand(1000,9999));
}

/*将上传接受的信息都转为 索引+关联的二维数组
 * @param
 * @return $arr
 */
function newArr(){
  foreach($_FILES as $val){
	if(is_string($val['name'])){
		//单上传和单独命名多上传 关联+关联二维数组
		// $val 一维数组
		$arr[] = $val;
	}else{
		//以数组形式命名多上传 ，三维数组
		// $val 二维数组
		foreach($val['name'] as $k=>$v){
			$arr[$k]['name'] = $v;
			$arr[$k]['type'] =$val['type'][$k];
			$arr[$k]['tmp_name'] =$val['tmp_name'][$k];
			$arr[$k]['error'] =$val['error'][$k];
			$arr[$k]['size'] =$val['size'][$k];
		}
	}
  }
  return $arr;
}
/*单文件或多文件上传
 * 设置上传类型:默认支持 jpg,png,gif 类型
 *@param   可选参数  array $typeArr=array('jpg','gif','png')
 *检测是否有上传文件的文件夹,如果没有创建文件夹
 *@param  可选参数   string  $path='./' 同级路径
 *@return  mixed 返回重名后的新二维数组,目的将文件名称存人数据库中
 * 成功返回 数组失败返回 fasle 
 */
function uploadFile($path='./',$typeArr=array('jpg','png','gif')){
	//1.获得新的 索引+关联的二维数组(循环每个文件上传)
	$arr =newArr(); 
	foreach($arr as $v){//$v 一维数组
		//要求2.如果没有创建文件夹 mkdir 创建目录
		//file_exists 判断目录或文件是否存在
		if(!file_exists($path)){
		    mkdir($path);
		}
		//2.判断 上传报错 0 成功
		if($v['error']==0){
			//3.避免上传文件冲突给文件重命名
			$filename = $v['name'];
			$ext = exTension($filename);
			//要求1.判断$ext 是否是 $typeArr的值
			if(in_array($ext,$typeArr)){
				$filename = uuid().'.'.$ext;
				// 将每个文件重命名的名称存储
				$v['name'] = $filename;
				$newArr[] =$v;
				//4临时目录和文件名称移动到目标位置上
				move_uploaded_file($v['tmp_name'], $path.'/'.$filename);
			}else{
				return false;
			}
		}else{
			return false;
		}
	}
	$p=$path.'/'.$filename;
	return $p;
}









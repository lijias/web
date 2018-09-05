<?php
header('Content-Type:text/html;charset=utf-8');
$old_p="bb";
$new_p="dd";
fuZhi($old_p, $new_p);
function fuZhi($old_p,$new_p){
	//判断$new_p是否存在
if (file_exists($new_p)){
	//存在
	//判断$new_p是不是文件
  if (is_file($new_p)){
   echo "无法复制";
   exit;
  }
 }else {
 	//不存在
 	//新建
   mkdir($new_p);
 }
 //打开
 $dir = opendir($old_p);
 //循环读取
 while ($f=readdir($dir)){
   if ($f!="." && $f!=".."){
   	//区分拼装函数
    $old_f = $old_p."/".$f;
    $new_f = $new_p."/".$f;
    //判断是不是目录
    if (is_dir($old_f)){
    	//若是目录
    	//重复执行
       fuZhi($old_f, $new_f);
    }else {
    	//若不是目录是文件
    	//复制文件
      copy($old_f,$new_f);
    }
   }
 }
 //释放
 closedir($dir);
}
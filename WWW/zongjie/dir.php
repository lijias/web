<?php
//获取目录"D:/www/17_zongjie/test"下的子目录及文件。
$path="D:/www/17_zongjie/test/////";
function getDir($p){
	$reArr=array();
	//去掉末尾的/
	//$p=rtrim($p,"/");
	$p=preg_replace("/\/+$/","",$p);
	//打开目录
	$d=opendir($p);
	//读目录下的内容
	while(($content=readdir($d))!==false){
		if($content != '.' && $content!='..'){
			$newPath=$p."/".$content;
			if(is_dir($newPath)){
				$reArr[]="dir:".$newPath;
				$reArr1=getDir($newPath);
				$reArr=array_merge($reArr,$reArr1);
			}else{
				$reArr[]="file:".$newPath;
			}
			
		}
	}
	//关闭
	closedir($d);
	return $reArr;
}
$re=getDir($path);

var_dump($re);






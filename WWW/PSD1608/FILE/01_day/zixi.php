<?php
header('Content-Type:text/html;charset=utf-8');
   /*对目录中的内容进行判断
   文件还是目录
   若是文件，则输出：文件：文件名称
   若是目录，则输出：目录：目录名称*/

/*$f ="../01_day";
$dir=opendir($f);
while($d=readdir($dir)){
if (!($d=="." || $d=="..")){
	
	if (is_dir($d)){
  		 echo "目录:".$d."<br/>";
  		 
}else{
  		 echo "文件:".$d."<br/>";
}
}
}


closedir($dir);
*/
$f ="bb";
$dir=opendir($f);
while($d=readdir($dir)){
if (!($d=="." || $d=="..")){
	//必须拼装路径不然is_dir is_file无法识别
	$d = $f.'/'.$d;
	if (is_dir($d)){
  		 echo "文件夹:".$d."<br/>";
}else{
  		 echo "文件:".$d."<br/>";
}
}
}


closedir($dir);








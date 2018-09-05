<?php
header('Content-Type:text/html;charset=utf-8');
//
$d_n=0;
//
$f_n=0;
//
$p="../02_day";
tongji($p);
echo "目录数:".$d_n;
echo "<br/>";
echo "文件数:".$f_n;
function tongji($p){
	global $d_n;
	global $f_n;
$dir=opendir($p);
while ($f=readdir($dir)){
	//过滤 . ..
 if ($f != "." && $f != ".."){
    //
    $f=$p."/".$f;
    if (is_dir($f)){
    	//是目录,则有可能此目录下存在
    	//子目录或者文件
    	//bb/123456
     tongji($f);
     $d_n++;
    }else{
     $f_n++;
    }
 }
}
//
closedir($dir);
}

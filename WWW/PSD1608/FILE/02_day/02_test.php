<?php
header('Content-Type:text/html;charset=utf-8');

$p="bb";
echo  sum($p);
function sum($p){
 $size=0;
 $dir=opendir($p);
 while ($f=readdir($dir)){
 if ($f!="." && $f!=".."){
   $f=$p."/".$f;
   if (is_dir($f)){
    $size+=sum($f);
   }else{
    $size+=filesize($f);
   }
  }
 }
 closedir($dir);
 return $size;
}
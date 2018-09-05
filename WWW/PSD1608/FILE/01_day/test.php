<?php
header('Content-Type:text/html;charset=utf-8');
$filename="note.html";
echo g_Get($filename);
function g_Get($filename){
   $size = filesize($filename);
   $unit = "";
   if ($size>pow(2,40)){
    $size=$size/pow(2,40);
    $unit = "TB";
   }elseif ($size>pow(2,30)){
    $size=$size/pow(2,30);
    $unit = "GB";
   }elseif ($size>pow(2,20)){
    $size=$size/pow(2,20);
    $unit = "MB"; 
   }elseif ($size>pow(2,10)){
    $size=$size/pow(2,10);
    $unit = "KB";
   }else{
    $unit = "b";
   }
   return $size.$unit;
}
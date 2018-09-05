<?php
header('Content-Type:text/html;charset=utf-8');
$filename="dog.jpg";
$angle=315;
xuan($filename, $angle);
function xuan($filename,$angle){
$info=getimagesize($filename);
$type=$info[2];
$type_array=array(1=>"gif",2=>"jpeg",3=>"png");
$type_str=$type_array[$type];
$fun="imagecreatefrom";
$function=$fun.$type_str;
$img=$function($filename);
$bgd_color=imagecolorallocate($img,0,255,0);
$des_img=imagerotate($img,$angle,$bgd_color);
header("Content-Type:image/png");
imagepng($des_img);
imagedestroy($img);
imagedestroy($des_img);
}
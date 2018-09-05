<?php
header('Content-Type:text/html;charset=utf-8');
$filename="dog.gif";
$des_w=40;
$des_h=40;
thumb($filename, $des_w, $des_h);
function thumb($filename,$des_w ,$des_h){
   $fileinfo =getimagesize($filename);
   $w =$fileinfo[0];
   $h =$fileinfo[1];
   $t =$fileinfo[2];
   $t_array=array(1=>"gif",2=>"jpeg",3=>"png");
   $t_str=$t_array[$t];
   $fun="imagecreatefrom";
   $function=$fun.$t_str;
   $src_img =$function($filename);
   
   $des_img =imagecreatetruecolor($des_w,$des_h);
   
   imagecopyresampled($des_img,$src_img,
                    0,0,
                    0,0,
                    $des_w ,$des_h,
                    $w ,$h);
   
header("Content-Type:image/png");
imagepng($des_img);

imagedestroy($des_img);
imagedestroy($src_img);
}
<?php
$filename="t.jpg";
fXxuan($filename);
function fXxuan($filename){
list($w,$h,$type)=getimagesize($filename);
$type_array=array(1=>"gif",2=>"jpeg",3=>"png");
$type_str=$type_array[$type];
$fun="imagecreatefrom";
$function=$fun.$type_str;
$src_img=$function($filename);
//
$des_img=imagecreatetruecolor($w,$h);
//
for ($i=0;$i<$w;$i++){
  $des_x=$w-$i-1;
  $des_y=0;
  $src_x=$i;
  $src_y=0;
  $src_w=1;
  $src_h=$h;
imagecopy($des_img,$src_img,
          $des_x,$des_y,
          $src_x,$src_y,
          $src_w,$src_h);
}
//
header("Content-Type:image/png");
imagepng($des_img);
//
imagedestroy($des_img);
imagedestroy($src_img);
}
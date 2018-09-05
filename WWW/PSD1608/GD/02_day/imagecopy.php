<?php
//
$filename="i-1.jpg";
$x_filname="logo.png";
function waterMark($filename,$x_filname){
//获取大图片信息
$d_info=getimagesize($filename);
$d_w=$d_info[0];
$d_h=$d_info[1];
//类型
$d_type=$d_info[2];
//类型和图片格式字符串之间的对应关系
$d_type_array=array(1=>"gif",2=>"jpeg",3=>"png");
$d_type_str=$d_type_array[$d_type];
//拼装函数
$fun="imagecreatefrom";
$d_function=$fun.$d_type_str;
//获取大图片资源
$des_img=$d_function($filename);

//获取水印图片信息
$x_info=getimagesize($x_filname);
$x_w=$x_info[0];
$x_h=$x_info[1];
//类型
$x_type=$x_info[2];
//类型和图片格式字符串之间的对应关系
$x_type_array=$d_type_array;
$x_type_str=$x_type_array[$x_type];
//拼装函数
$x_function=$fun.$x_type_str;
//获取水印图片资源
$src_img=$x_function($x_filname);

// $des_w=($x_w/4);
// $des_h=($x_h/4);
// $dess_img =imagecreatetruecolor($des_w,$des_h);

// $touming = imagecolorallocatealpha($dess_img, 77,77,77,127); 

// imagefill($dess_img,0,0,$touming);
// imagesavealpha($dess_img , true); 
// imagecopyresampled($dess_img,$src_img,
//                     0,0,
//                     0,0,
//                     $des_w ,$des_h,
//                     $x_w ,$x_h);
//
$des_x=$d_w-($des_w+5);
// $des_x = ($d_w-$x_w)/2;
$des_y=$d_h-($des_h+5);
// $des_x = ($d_h-$x_h)/2;
$src_x=0;
$src_y=0;
// imagecopy($des_img,$src_img,
//           $des_x ,$des_y,
//           $src_x,$src_y,
//           $x_w ,$x_h);
imagecopy($des_img, $src_img, ($d_w-$x_w)+2, ($d_h-$x_h)+2, 0, 0, $x_w, $x_h);
//
header("Content-Type:image/png");
imagepng($des_img);
//
imagedestroy($des_img);
imagedestroy($src_img);
}
waterMark($filename, $x_filname);
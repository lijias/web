<?php
header('Content-Type:text/html;charset=utf-8');
$filename = "dog.gif";
$img=imagecreatefromgif($filename);
$info=getimagesize($filename);
$w=$info[0];
$h=$info[1];
//
$blue=imagecolorallocate($img,0,0,255);
//
$font=5;
$string="xixixixi";
//$x=原图片宽度-(文字宽度+希望间隔)
$x= $w-(imagefontwidth($font)*strlen($string)+5);
//$y=原图片高度-(文字高度+希望间隔)
$y=$h-(imagefontheight($font)+5);
imagestring($img,$font,$x,$y,$string,$blue);
//
header("Content-Type:image/png");
imagepng($img);
//
imagedestroy($img);
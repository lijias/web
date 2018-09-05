<?php
session_start();
/* 验证码
     -画布(浅色,随机)
     -干扰(随机出现的线,随机出现的点)
     -输出文字
     -展示
     -释放资源
*/
$img=imagecreatetruecolor(100,40);
//
$bgcolor=imagecolorallocate($img,rand(200,255),rand(200,255),rand(200,255));
imagefill($img,0,0,$bgcolor);
//干扰
for ($i=1;$i<100;$i++){
   $color=imagecolorallocate($img,rand(100,200),rand(100,200),rand(100,200));
   imagesetpixel($img,rand(1,99),rand(1,39),$color);
}
for ($i=1;$i<10;$i++){
   $color=imagecolorallocate($img,rand(100,200),rand(100,200),rand(100,200));
   imageline($img,rand(1,99),rand(1,39),rand(1,99),rand(1,39),$color);
}
//输出文字
$word="";
$lenth=4;
$codes="qwertyuiopasdfghjklmnbvcxz123456789";
for ($i=0;$i<$lenth;$i++){
  $scolor=imagecolorallocate($img,rand(0,100),rand(0,100),rand(0,100));
  $str=substr($codes,rand(0,strlen($codes)-1),1);
  //
  $word .= $str;
  $x=(100/$lenth)*$i+5;
  $y=rand(5,10);
  imagestring($img,5,$x,$y,$str,$scolor);
}
//
$_SESSION['yanzhengma']=$word;
//展示
header("content-Type:image/png");
imagepng($img);
//清理
imagedestroy($img);
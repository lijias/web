<?php
session_start();
//验证码程序
/*
 *     - 创建画布
        - 创建干扰
        - 输出文字
        - 输出
        - 释放资源
 */ 
//创建画布
$img = imagecreatetruecolor(80,30);
//创建验证码画布的背景色，浅色  随机
$bgcolor = imagecolorallocate($img,rand(200,255),rand(200,255),rand(200,255));
//填充画布
imagefill($img,0,0,$bgcolor);

// - 创建干扰
//100个点 和 10条线
//完成100个随机出现的点
for($i=0;$i<100;$i++){
	  $color = imagecolorallocate($img,rand(100,200),rand(100,200),rand(100,200)); 
	  imagesetpixel($img,rand(1,79),rand(1,29),$color);
}

//画10条线
for($i=0;$i<10;$i++){
	$color = imagecolorallocate($img,rand(100,200),rand(100,200),rand(100,200));
	imageline($img,rand(1,79),rand(1,29),rand(1,79),rand(1,29),$color);
}

//- 输出文字
//给出大字符串
$codes = "0123456789abcdefghijklmnopqrstuvwxyz";
//每次从大字符串中取一个字母，保存到code中
$code = "";
//定义一个变量，确定验证码的长度
$length = 4;
//循环从大字符串中取字母
//设置一个变量，用来保存验证码字符串
$session_code = "";
for($i=0;$i<$length;$i++){
	 $color = imagecolorallocate($img,rand(0,100),rand(0,100),rand(0,100));
	  //取字母
	  $code = substr($codes,rand(0,strlen($codes)-1),1);
	  //保存验证码到seesion_code
	  $session_code.=$code;
	  //写字
	  $font = 5;
	  $x = (80/$length)*$i+5;
	  $y = rand(5,10);	  
	  imagestring($img,$font,$x,$y,$code,$color);
}
//此时的session_code应该是4位
//将session_code保存到session中
$_SESSION['code']=$session_code;



//输出
header("Content-Type:image/png");
imagepng($img);

//释放资源
imagedestroy($img);
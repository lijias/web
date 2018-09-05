<?php
session_start();
header('Content-Type:text/html;charset=utf-8');
class Zixi{
public $img;
public $weight;
public $heigeht;
public $lenght;	
public $word;
//赋初始值
function __construct($weight,$heigeht,$lenght){
 $this->weight=$weight;
 $this->heigeht=$heigeht;
 $this->lenght=$lenght;
}
//输出
function outImg(){
 //创建
 $this->bg();
 //干扰
 $this->ganRao();
 //保存到session
 $this->word();
 //输出验证码
 $this->outWord();
 //输出
 $this->out();
 //
}
//创建
private function bg(){
 $this->img=imagecreatetruecolor($this->weight,$this->heigeht);
 $bg_color=imagecolorallocate($this->img,rand(200,250),rand(200,250),rand(200,250));
 imagefill($this->img,0,0,$bg_color);
}
//干扰
private function ganRao(){
//100个点
 for ($i=1;$i<=100;$i++){
 	$d_color=imagecolorallocate($this->img,rand(100,199),rand(100,199),rand(100,199));
 	imagesetpixel($this->img,rand(1,$this->weight-1),rand(1,$this->heigeht-1),$d_color);
}
 for ($i=1;$i<=10;$i++){
 	$x_color=imagecolorallocate($this->img,rand(100,199),rand(100,199),rand(100,199));
 	imageline($this->img,rand(1,$this->weight-1),rand(1,$this->heigeht-1),rand(1,$this->weight-1),rand(1,$this->heigeht-1),$x_color); 	
}
}
//验证码文字并保存到session
private function word(){
 $code="1234567890qwertyuioplkjhgfdsazxcvbnm";
 for ($i=0;$i<$this->lenght;$i++){
 	$this->word.=substr($code,rand(1,strlen($code)-1),1); 
}
 $_SESSION['vcode']=$this->word;
}
private function outWord(){
 for ($i=0;$i<$this->lenght;$i++){
 	$z_color=imagecolorallocate($this->img,rand(1,99),rand(1,99),rand(1,99));
 	$font=5;
 	$x=($this->weight/$this->lenght)*$i+5;
 	$y=rand(5,10);
 	$code=substr($this->word,$i,1);
 	imagestring($this->img,$font,$x,$y,$code,$z_color);
}
}
//输出
private function out(){
 header("Content-Type:image/png");
 imagepng($this->img);
}
//释放
function __destruct(){
 imagedestroy($this->img);
}
}
$zixi=new Zixi(80,30,4);
$zixi->outImg();
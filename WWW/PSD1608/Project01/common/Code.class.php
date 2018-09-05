<?php
session_start();
header('Content-Type:text/html;charset=utf-8');
class Code{
     public $img;//画布资源
     public $weight;//画布的宽
     public $height;//画布的高
     public $lenght;//文字的位数
     public $words;//验证码文字
     
    //构造方法 给成员属性赋初值
    function __construct($weight,$height,$lenght){
     $this->weight=$weight;
     $this->height=$height;
     $this->lenght=$lenght;
    }
    //出口程序
    function outImg(){
    //背景	
    $this->bg();
    //干扰
    $this->ganRao();
    //生成验证码文字并保存到session中
    $this->getWord();
    //输出验证码图片到图片上
    $this->outWord();
    //输出
    $this->out();
    }
    //干扰
    private function ganRao(){
    //随机输出100个点
    	for ($i=1;$i<=100;$i++){
    $dcolor=imagecolorallocate($this->img,rand(100,200),rand(100,200),rand(100,200));
    imagesetpixel($this->img,rand(1,$this->weight-1),rand(1,$this->height-1),$dcolor);
    	}
    //随机输出10条线
        for ($i=1;$i<=10;$i++){
    $xcolor=imagecolorallocate($this->img,rand(100,200),rand(100,200),rand(100,200));
    imageline($this->img,rand(1,$this->weight-1),rand(1,$this->height-1),rand(1,$this->weight-1),rand(1,$this->height-1),$xcolor);
    	}
    }
	//创建背景
	private function bg(){
	$this->img=imagecreatetruecolor($this->weight,$this->height);
	$bgcolor=imagecolorallocate($this->img,rand(200,255),rand(200,255),rand(200,255));
	imagefill($this->img,0,0,$bgcolor);
	}
	//文字
	//生成验证码文字
	private function getWord(){
	$code="1234567890qwertyuioplkjhgfdsazxcvbnm";
	for ($i=0;$i<$this->lenght;$i++){
	$this->words.=substr($code,rand(0,strlen($code)-1),1);
	$_SESSION['vcode']=$this->words;
	}
	}
	//将验证码文字在图片上输出
	private function outWord(){
	for ($i=0;$i<=$this->lenght;$i++){	
	$zcolor=imagecolorallocate($this->img,rand(0,99),rand(0,99),rand(0,99));
	$font =5;
	$x=($this->weight/$this->lenght)*$i+5;
	$y=rand(5,10);
	$code=substr($this->words,$i,1);
	imagestring($this->img,$font,$x,$y,$code,$zcolor);
	}
	}
	//输出
	private function out(){
	header("Content-Type:image/png");
	imagepng($this->img);
	}
	//释放资源
	function __destruct(){
	imagedestroy($this->img);
	}
}
//实例化
//$code = new Code(80,30,4);
//读取创建+输出
//$code->outImg();
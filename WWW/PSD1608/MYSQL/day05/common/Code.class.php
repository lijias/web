<?php
//将验证码程序封装到类里面
class Code{
	public $height; //验证码的高
	public $width;  //验证码的宽
	public $num;    //验证码的位数
	public $img;    //gd资源
	public $word;   //生成的字符串给session
	
	
	function __construct($width,$height,$num){
		$this->height = $height;
		$this->width = $width;
		$this->num = $num;
		//生成了一个字符串
		$this->word = $this->getWord();
		
		
	}
	
	//出口程序
	function outImage(){
		//创建画布（浅色，颜色随机）
		$this->bg();
		//调用干扰程序
		$this->disturb();
		//调用文字
		$this->printWord();
		$this->printImage();
		
	}
	
	function bg(){
		//创建gd资源
		$this->img = imagecreatetruecolor($this->width,$this->height);
		$color = imagecolorallocate($this->img,rand(200,255),rand(200,255),rand(200,255));
		//填充背景色
		imagefill($this->img,0,0,$color);
	}
	
	//干扰
	function disturb(){
		//100个随机的点
		for($i=0;$i<100;$i++){
			$color = imagecolorallocate($this->img,rand(100,200),rand(100,200),rand(100,200));
			imagesetpixel($this->img,rand(1,79),rand(1,29),$color);
		}
		//10条线
		for($i=0;$i<10;$i++){
			$color = imagecolorallocate($this->img,rand(100,200),rand(100,200),rand(100,200));
			imageline($this->img,rand(1,79),rand(1,29),rand(1,79),rand(1,29),$color);
		}
	}
	
	//产生文字，预留给session 输出图片
	function getWord(){
		$codes = "abcdefghijklmnopqrstuvwxyz0123456789";
		$word = ""; //用来保存产生的文字
		for($i=0;$i<$this->num;$i++){
			//字符串截取
			$word.= substr($codes,rand(0,strlen($codes)-1),1);
			
		}
		return $word;
	}
	//将getWord() abcd产生的字符串 输出到图片
	function printWord(){
		for($i=0;$i<$this->num;$i++){
			$font = 5;
			$x = ($this->width/$this->num)*$i+5;
			$y = rand(5,10);
			$m = substr($this->word,$i,1);
			imagestring($this->img,$font,$x,$y,$m,$color);
		}
	}
	
	
	//输出
	function  printImage(){
		header("Content-Type:image/png");
		imagepng($this->img);
	}
	
	//释放资源
	function __destruct(){
		imagedestroy($this->img);
	}
}
?>
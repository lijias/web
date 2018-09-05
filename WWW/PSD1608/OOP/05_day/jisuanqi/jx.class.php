<?php
header('Content-Type:text/html;charset=utf-8');
class jx extends Shape{
 public $name="矩形";
 public $width;//宽
 public $height;//长
 
 function __construct($array=array()){
 if (!empty($array)) {
 		  $this->width=$array['width'];
          $this->height=$array['height'];
 	}

 }
 function cir(){
 	//(宽+长)*2
 $zc=($this->width+$this->height)*2;
 return $zc;
 }
 function area(){
 	//宽*长
 $mj=$this->width*$this->height;
 return $mj;
 }
 function view(){
 echo "<form action='index.php?p=jx' method='post'>";
 echo $this->name."的宽<input type='test' name='width'/>";
 echo "<br/>";
 echo $this->name."的长<input type='test' name='height'/>";
 echo "<br/>";
 echo "<input type='submit' value='计算'/>";
 echo "</form>";
 }
}
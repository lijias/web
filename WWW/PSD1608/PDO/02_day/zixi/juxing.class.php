<?php
header('Content-Type:text/html;charset=utf-8');
class juxing  extends  Type{
public $name="矩形";
public $width;
public $height;

function __construct($arr=array()){
	if(!empty($arr)){
$this->width=$arr['width'];
$this->height=$arr['height'];
	}
}
function ric(){
$zc=($this->height+$this->width)*2;
return $zc;
}
function area(){
$mj=$this->height*$this->width;
return $mj;
}
function shuchu(){
echo "<form action='' method='POST'>";
echo $this->name."的宽:<input type='text' name='width'/>";
echo "<br/>";
echo $this->name."的长:<input type='text' name='height'/>";
echo "<br/>";
echo "<input type='submit' value='计算'/>";
echo "</form>";
}
}
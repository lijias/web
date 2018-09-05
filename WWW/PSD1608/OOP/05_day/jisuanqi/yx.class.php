<?php
header('Content-Type:text/html;charset=utf-8');
class yx extends Shape{
public $name="圆形";
public  $r;//半径

function __construct($array=array()){
	if (!empty($array)) {
		$this->r=$array['banjing'];
	}
} 
function cir(){
	$zc = 2*pi()*$this->r;
	return $zc;
}
function area(){
	$mj=pi()*$this->r*$this->r;
	return $mj;
}
function view(){
	echo "<form action='index.php?p=yx' method='POST'>";
	echo $this->name."的半径为:<input type='text' name='banjing'/>";
	echo "<br/>";
	echo "<input type='submit' value='计算'/>";
	echo "</form>";
}
}
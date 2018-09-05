<?php
header('Content-Type:text/html;charset=utf-8');
class sjx extends Shape{
public $name="三角形";
public $bian1;
public $bian2;
public $bian3;

function __construct($array=array()){
	if (!empty($array)) {
	$this->bian1=$array['bian1'];
	$this->bian2=$array['bian2'];
	$this->bian3=$array['bian3'];
	}
}
function cir(){
	$zc=$this->bian1+$this->bian2+$this->bian3;
	return $zc;
}
 function area(){
 	$p=($this->bian1+$this->bian2+$this->bian3)/2;
 	$mj=sqrt($p*($p-$this->bian1)*($p-$this->bian2)*($p-$this->bian3));
 	return $mj;
 }
 function view(){
 	echo "<form action='index.php?p=sjx' method='post'>";
 	echo $this->name."的边1<input type='test' name='bian1'/>";
 	echo "<br/>";
 	echo $this->name."的边2<input type='test' name='bian2'/>";
 	echo "<br/>";
 	echo $this->name."的边3<input type='test' name='bian3'/>";
 	echo "<br/>";
 	echo "<input type='submit' value='计算'/>";
 	echo "</form>";
 }
}
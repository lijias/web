<?php
header('Content-Type:text/html;charset=utf-8');
class sanjiaoxing  extends  Type{
public $name="三角形";
public $b1;
public $b2;
public $b3;

function __construct($arr=array()){
	if (!empty($arr)) {
		$this->b1=$arr['b1'];
		$this->b2=$arr['b2'];
		$this->b3=$arr['b3'];
	}

}
function ric(){
$zc=$this->b1+$this->b2+$this->b3;
return $zc;
}
function area(){
$q=($this->b1+$this->b2+$this->b3)/2;	
$mj=sqrt($q*($q-$this->b1)*($q-$this->b2)*($q-$this->b3));
return $mj;
}
function shuchu(){
echo "<form action='' method='POST'>";
echo $this->name."的边1:<input type='text' name='b1'/>";
echo "<br/>";
echo $this->name."的边2:<input type='text' name='b2'/>";
echo "<br/>";
echo $this->name."的边3:<input type='text' name='b3'/>";
echo "<br/>";
echo "<input type='submit' value='计算'/>";
echo "</form>";
}
}
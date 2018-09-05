<?php 
class WareHouse{
	private $keeper;
	
	function setKeeper(){
		$this->keeper="tom";
		echo $this->keeper;
		echo "<hr/>";
		$this->test();
	}
	
	private function test(){
		echo "this is test";
	}
}
$w = new WareHouse;
//$w->keeper; //在类外不能访问私有化成员属性
$w->setKeeper();
//$w->test(); //在类外不能访问私有化成员方法











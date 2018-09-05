<?php 
	function hello()
	{
		$fileName = time().rand(0,9).rand(0,9).rand(0,9);
		return $fileName;
	}
	
	function sum($a,$b)
	{
		return $a+$b;
	}
?>
<?php
function fun1(){
	static $a=5;
	$a++;
	echo $a;
}
fun1();//6
echo "<hr/>";
fun1();//7
echo "<hr/>";
fun1();//8
<?php
header('Content-Type:text/html;charset=utf-8');
$n=1;
$v="";
for($i=1;$i<9;$i++){
	$n*=$i;
	$v+=$n;	
}
echo $v."<br/>";
<?php
header('Content-Type:text/html;charset=utf-8');
//倒三角
$l=9;
for($j=1;$j<=$l;$j++){//hang
 for ($i=$l;$i>=$j;$i--){//lie
    echo '*&nbsp;';
   }
   echo '<br/>';
 }
   echo '<br/>'; 
   //z
$l=9;
for($j=1;$j<=$l;$j++){//hang
 for ($i=1;$i<=$l;$i++){//lie
 	if ($j==1 || $j==$l || $j+$i==$l+1){
    echo '*&nbsp;';
 	}else {
 	echo '&nbsp;&nbsp;';
 	}	
   }
   echo '<br/>';
 }
 //
 echo '<br/>';
$a=9;
for ($e=1;$e<=$a;$e++){
 for ($s=1;$s<=$a;$s++){
  if ($e==1 || $e==$a || $s==1 || $e==ceil($a/2)){
     echo '*&nbsp;';
 	}else {
 	 echo '&nbsp;&nbsp;';
 	}
 	//echo '*&nbsp;';
   }
   echo '<br/>';
 }
// /}












 
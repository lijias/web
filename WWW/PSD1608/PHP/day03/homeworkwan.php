<?php
header('Content-Type:text/html;charset=utf-8');
//要求双引号输出形如结果 :aliceabc
$userName567 = 'alice';
echo "{$userName567}abc";

echo '<br/>';
// (1)其它类型转为整型和浮点型 
echo 7.45 + 'true' +null +'3false' +'e9';
//   7.45 +0 +0 + 3 +0;=10.45
echo '<br/>';
echo 8.9 + '-1e1' +'7null' +'' +'-5.7.8.8';
//  8.9 -10 +7+0 -5.7=0.2
echo '<br/>';

//(2)其它类型转为字符型
echo '#',1e2,true,'#';
// #1001#
echo '<br/>';
echo '#','1e2','true','#';
//#1e2true#
echo '<br/>';
//(3)其它类型转为布尔型
   if('0false'){//true
     echo 'ok';
   }else{
     echo 'error';
   }
   if('true5'){//true
      echo 'ok';
   }else{
	 echo 'error';
   }




















<?php
header('Content-Type:text/html;charset=utf-8');
echo floor(5.99);// 5
echo '<br/>';
echo ceil(9.1);//10
echo '<br/>';
echo round(4.6);//5
echo '<br/>';
echo round(4.789,2);//4.79
echo '<br/>';

//(4) pow:求次幂
echo  pow(2,3);
echo '<br/>';
//(5) sqrt:开平方
echo  sqrt(4);
echo '<br/>';
//(6) abs:求绝对值
echo  abs(-5);
echo '<br/>';
//(7) max:求最大值
echo  max(7,15,10,19,3);
echo '<br/>';
//(8) min:求最小值
echo  min(7,15,10,19,3);
echo '<hr/>';
//(9) rand:获得随机整数
echo rand();
echo '<br/>';
//(10) mt_rand:获得更好随机整数
echo mt_rand();
echo '<br/>';
// 获得 随机1-10整数
echo mt_rand(1,10);
echo '<br/>';
//  获得随机的四位数
echo mt_rand(1000,9999);








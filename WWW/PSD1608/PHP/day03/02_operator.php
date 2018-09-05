<?php
header('Content-Type:text/html;charset=utf-8');
//正号(+) 负号(-)  + - * /

echo +5;
echo '<br/>';
echo -5;
echo '<br/>';
echo 5 + 8;
echo '<br/>';
echo 5 - 8;
echo '<br/>';
echo 5 + 8;
echo '<br/>';
echo 8 / 5;
echo '<br/>';
//  % 取余数

echo 8 % 5; // 被除数%除数 = 余数
echo '<br/>';
echo 11 % 20; //11
echo '<br/>';
// a.算术运算符求的是整数余数,向下取整
echo 9.9 % 4.5; // 9 % 4 =1
echo '<br/>';
// b.取余数符号运算与被除数一致
echo -9.9 % 4.5; // -1
echo '<br/>';
echo -9.9 % -4.5; // -1
echo '<br/>';
echo 9.9 % -4.5; // 1
echo '<br/>';
//c.fmod 实现求浮点数的余数
echo fmod(9.9,4.5); // 9.9%4.5 =0.9
echo '<br/>';
echo fmod(-9.9,4.5); // -0.9
echo '<br/>';
echo fmod(-9.9,-4.5); // -0.9
echo '<br/>';
echo fmod(9.9,-4.5); // 0.9
echo '<hr/>';

echo 8.5 % 3.5; // 8 % 3 =2
echo '<br/>';
echo -8.5 % 3.5; // -2
echo '<br/>';
echo -8.5 % -3.5; // -2
echo '<br/>';
echo 8.5 % -3.5; //2
echo '<br/>';
echo 33 % 50; // 33
echo '<br/>';
echo 15 % 6;  // 3
echo '<br/>';













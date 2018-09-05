<?php
header('Content-Type:text/html;charset=utf-8');
// 整型(Integer Int)
$int = 20;
var_dump($int);
echo '<br/>';
$int = -28;
var_dump($int);
echo '<br/>';
// 二进制(0b开头)
$int = '0b0111';
echo $int;
/* 二进制转为十进制（从右往左算）
 * 0111 = 1*2^0 + 1*2^1 +1*2^2 +0*2^3=7
 *
 * 456  = 6*10^0 + 5*10^1 +4*10^2 = 456
 */
echo '<br/>';
// 八进制(0开头)
$int = 056;
echo $int;
/* 八进制转为十进制
 *056 =  6*8^0 +5*8^1 =6+40 = 46
 */
echo '<br/>';
// 十六进制(0x开头)
$int = 0x123;
echo $int;
/*十六进制转为十进制
 *056 =  3*16^0 +2*16^1 +1*16^2=3+32+256=291
*/
echo '<hr/>';
/*b.整型的最大值与操作系统有关系
    PHP_INT_MAX 看最大值，
        超出最大值会产生溢出  */

echo PHP_INT_MAX;
echo '<br/>';
$int = 2147483647;/*
    4字节 4Byte(2^32) 
    1024B = 1KB
    1024KB =1MB
 */
var_dump($int);
echo '<br/>';
$int = $int +1;
var_dump($int);
















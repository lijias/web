<?php
header('Content-Type:text/html;charset=utf-8');
/*其它类型转为整型和浮点型
 *a.合法的数字字符串,除了 . e E外并且
        没超过整型的最大范围转为整型，否则
        转为浮点型
 用加法举例
*/
echo 8 + '9'; //17
echo '<br/>';
echo 8 + '9.7'; //17.7
echo '<br/>';
echo 8 + '2e2';//208
echo '<hr/>';
/* b.非合法的数字字符串，如果以数值开头转该
数值，如果以字母开头转为0  */
echo 8 + '1abc'; //8+1=9
echo '<br/>';
echo 8 + 'hello9';//8+0=8
echo '<br/>';
echo 8 + '4.8.9.3.4';//8+4.8=12.8
echo '<br/>';
echo 8 + '1e3abc';//1008
echo '<br/>';
echo 8 + 'e3';// 8+0=8
echo '<br/>';

/* c.布尔类型,true 转为1,false 转为0
   d.null 转为 0
   e.空字符串 转为 0  */
echo '<hr/>';
echo 8 + true; // 9
echo '<br/>';
echo 8 + false; // 8
echo '<br/>';
echo 8 + 'true';// 8+0=8
echo '<br/>';
echo 8 + null;//8
echo '<br/>';
echo 8 + '';//8
echo '<br/>';

echo '<hr/>';

echo 13.7 + '2true' +true +null;
//  13.7 + 2 + 1 +0 =16.7
echo '<br/>';
echo 13.7 + '-2e1' + 'true9' + 'null5';
//  13.7 -20 + 0+ 0 =-6.3
echo '<br/>';
echo 13.7 + '6false' + '' +'8.6.5.4' + false;
//  13.7 +6 +0 +8.6+0 =28.3
















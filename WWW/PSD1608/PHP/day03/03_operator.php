<?php
header('Content-Type:text/html;charset=utf-8');
/*b. 前缀形式:变量先自身加1或减1，后执行语句
     后缀形式:先执行语句,变量后自身加1或减1
 */
$a = 5;
$b = 9;

echo ++$a; //6
echo '<br/>';
echo $b++; //9
echo '<br/>';
echo $b; //10
echo '<hr/>';
$a = 1;
$b = 2;
$a++;
$c = $b++; // 先将当前$b值赋值给$c,然后自增
$b++;
echo $a,$b,$c.'<br/>';//2,4,2
$x = 3;
$y = 4;
$x--;
$y --;
$z = $y--; // 当前 $y=3值赋值给$c,然后自减
$x--;
$y--;
echo $x,$y,$z;//1,1,
echo '<hr/>';
// (b)布尔值是否支持自增自减--不支持自增自减
$bool = true;
echo ++$bool;// 1 不支持自增
$bool = true;
echo --$bool;// 1 不支持自减
echo '<hr/>';
// (c)null是否支持自增自减--支持自增不支持自减
$null = NULL;
echo ++$null;// 1支持自增
$null = NULL;
echo --$null; //空字符串 不支持自减

echo '<hr/>';
// (d)字符型支持自增不支持自减
/*  ASCII码  
 *  ord:返回字符的ASCII码 值
 *  ord('c') --> 99
 *  chr:返回ASCII码的字符
 *  chr(100) -->d
 */
$var = 'c';
echo ++$var; // d 支持自增
echo '<br/>';
$var = 'c';
echo --$var;//c 不支持自减  
$var = 'z';
echo '<br/>';
echo ++$var; //aa
$var = 'Z';
echo '<br/>';
echo ++$var; //AA
$var = '9z';
echo '<br/>';
echo ++$var; //10a
$var = 'z9';
echo '<br/>';
echo ++$var; //aa0
echo '<hr/>';
$a = 5;
$b = true;//不支持自增自减
$c = null;//支持自增不支持自减
$a++;
$b++;
$c++;
$z = $a +$b +$c++; // 6+true+1=8
$b++;
echo $a,$b,$c,$z;//6,true=1,2,8

echo '<hr/>';

$x = 7;
$y = true;//不支持自增自减
$z = '9a';//支持自增不支持自减
$x++;
$y++;
$z++;
$k = $x +$y +$z++;// 8+true+'9b'=18
$x++;
$z--;
echo $x,$y,$z,$k;//9,true=1,9c,18

echo '<hr/>';

$a = 12;
$b = true;// 布尔值不支持自增自减
$c = '7z';// 字符串支持自增不支持自减
$d = null;// null支持自增不支持自减
$a--;
$b--;
$c--;
$d--;
$e = $a +$b +$c +$d++;// 11+true+'7z'+null
$d++;//2
$d--;//1
echo $a,$b,$c,$d,$e;//11,true=1,7z,1,19

















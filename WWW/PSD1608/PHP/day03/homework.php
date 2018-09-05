<?php
header('Content-Type:text/html;charset=utf-8');
/* 1.%(取余数)
 *   echo 12.7 % 5.2;
 *   echo '<br/>';
 *   echo -12.7 % 5.2;
 *   echo '<br/>';
 *   echo -12.7 % -5.2;
 *   echo '<br/>';
 *   echo 12.7 % -5.2;
 *   echo '<br/>';
 *   echo fmod(12.7,5.2);
 *   echo '<br/>';
 *   echo 42 % 50;
 *   echo '<br/>';
 * 
 * 2.++( 自增,递增),--( 自减,递减)
 * 
 * $a =true;
 * $b = '';
 * $c =null;
 * $d =1e1;
 * 
 * $a++;
 * $b++;
 * $c++;
 * $d++;
 * $e = $b + $d++;
 * $a++;
 * $b++;
 * $c++;
 * $d++;
 * echo $a,$b,$c,$d,$e;
 * 
 * 3. .=  
 * 输出形如
 * $a ='apple';
 * $b = 'red';
 * $c = 'friuts'
 * <dl>
 *    <dt>$a</dt>
 *    <dd>$b</dd>
 *    <dd>$c</dd>
 * <dl>
 * 要求用.= 赋值给 $link 然后输出
 * 
 * 4.字符串或null 跟字符串的比较
 * var_dump(
 *   '78'>'123',
 *   'tom'>'tam',
 *   'null'>'200'
 * );
 * 5.布尔值或null跟其他类型按布尔值比较
 *  var_dump(
 *   true >'00000',
 *   true >0000000,
 *   true >'e3'
 * );
 * 6.数值或字符串跟数值按数值比较
 * var_dump(
 *   19 >'true',
 *   1 >true,
 *   '2e1'>'20.6.7.7'
 * ); 
 * 
 * 7.===(全等于) 和!==(不全等于)严格比较的使用
 * $email ='@163.com';
 * 判断 $email的合法性：如果存在@输出邮箱合法 
 * 否则邮箱不合法(两种方法)
 * 
 */







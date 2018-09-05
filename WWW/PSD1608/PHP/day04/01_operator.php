<?php
header('Content-Type:text/html;charset=utf-8');
//逻辑运算符
/*(1)&&(and):与,并且,第一个表达式和
                             第二个表达式都为真才为真否则
                             为假  */
var_dump(
  true && false,//false
  false && true,//false
  false && false,//false
  true  && true, //true
  7>5 && 9< 12,
  7>8 && 9< 5
);
echo '<hr/>';
/* (2)||(or)：或,或者, 第一个表达式和
                             第二个表达式都为假才为假否则
                            为真   */
var_dump(
  true || false, //true
  false || true, // true
  false || false, //false
  true  || true  // true
);
echo '<hr/>';
//  (3) ！ 非      
var_dump(
  !true,
  !false,
  !0, //true
  !5  //false
);
echo '<hr/>';
// xor :异或  第一个表达式和 第二个表达式
        // 的布尔结果不同为真，相同为假
var_dump(
  true xor false,//true
  false xor true,//true
  false xor false,//false
  true  xor true//false
);
echo '<hr/>';
/* $var = 5;
 *  判断   $var是否在 1-10之间     1<=$var<=10
 *  如果在1-10之间输出  是 1-10的数
 *  否则 输出  不是 1-10的数
 */
//方法一
$var = 8;
if($var>=1 && $var<=10){//条件在1-10数
	echo '是 1-10的数';
}else{
	echo '不是 1-10的数';
}
echo '<br/>';
//方法二
$var = 8;
if($var<1 || $var>10){// 条件不在1-10数
	echo '不是 1-10的数';
}else{
	echo '是 1-10的数';
}
echo '<hr/>';

/* $var = 5;
 *  判断   $var是  5 8 11中 的数  ==
*  如果是输出  变量是 5 8 11中 的数
*  否则 输出  不是 5 8 11 中的数
*/
// 方法一
$var=5;
if($var==5 || $var==8 || $var==11){
	         // 变量或者是 5 或者是8 或者 11
	echo '是 5 8 11中 的数';
}else{
	echo '不是 5 8 11中 的数';
}
echo '<br/>';
// 方法二
$var=5;
if($var<>5 && $var<>8 && $var<>11){  
	            //  条件不是  5 8 11 的数
	            //&&同时不能等于 5 8 11
	echo '不是 5 8 11中 的数';
}else{
	echo '是 5 8 11中 的数';
}

echo '<hr/>';

/* b. &&(and)短路:第一个表达式为假，那第二
个表达式不执行，产生短路 */
/*  if(expr){
 *   echo 'expr为真执行的语句组';
 *  }  
 * 单分支语句：如果expr为真执行if后的大括号内容
 *          如果expr为假不执行if后的大括号内容
 *          执行顺序语句
 */
$a =1;
$b =2;
if($a && $b++){
	$a++;
	$b++;
}
/* 没短路  $a && $b++
 * $b++ 执行
 * if条件--true 执行if后的大括号内容
 */
echo $a,$b;//2,4
echo '<br/>';

$a =0;
$b =2;
if($a && $b++){
	$a++;
	$b++;
}
/* 短路  $a && $b++
 * $b++ 不执行
* if条件--false 不执行if后的大括号内容
*/
echo $a,$b;//0 2
echo '<br/>';
/* c. ||(or)短路:第一个表达式为真，那第二
个表达式不执行，产生短路 */
$a =1;
$b =2;
if($a || $b++){
	$a++;
	$b++;
}
/* $a || $b++  
 * 短路  $b++ 不执行
 * if条件--true 执行if后的大括号内容
 */
echo $a,$b;//2,3
echo '<br/>';
$a =0;
$b =2;
if($a || $b++){
	$a++;
	$b++;
}
/* $a || $b++
 * 没短路  $b++ 执行
* if条件--true 执行if后的大括号内容
*/
echo $a,$b;//1,4










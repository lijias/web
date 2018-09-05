<?php
header('Content-Type:text/html;charset=utf-8');
/*比较运算符: > >= < <= 
            ==(等于) 
            != <>(不等于)
            ===(全等于) !==(不全等于) 
 */
var_dump(
   'a' >'a', //false
   'a' >='a', // true
   'a' < 'a', //false
   'a' <='a',  //true
   'a' =='a', //true 只有值等就可以
   'a' !='a',
   'a' <>'a',
   'a'==='a',//true :值和类型都等
   'a'!=='a' // false: !==值和类型都等为false
   		     // !==为true情况：
   		     // 1.值等类型不等,2.值不等类型等，3值和类型都不等	
);

echo '<hr/>';
/*(a)字符串或null 跟字符串的比较
           null 转为空字符串，按数值比较和单词
                       比较，如果是数值和字母比较按ASCII
                       码比较*/
var_dump(
  '80' >'33', //true
  'f' >'b', // true
  'tf'>'td', //true 按位比较
  'ab'>'99b', //true a >9 的ASCII码
  '30'>'n',// false   3 >n 的ASCII码
  '-60' >'30',//false    -60 >30 
  'true'>'false',//true  t>f 
  '9null'>'null',//false  9>n的ASCII码
  null =='',    //true  值等
  null ==='',   //false 值等类型不等
  null !=='',    //true  !==值等类型不等
  'b' >'', //true
  9 >''    // true
);
echo '<hr/>';
/*(b)布尔值或null跟其他类型的比较按布尔值比较
     true > false  
 * 
 */
var_dump(
  true > 6, //false     true>true
  true > '0',//true     true >false
  true >'0.0',//false   true>true
  true >0.00,  //true    true >false
  true >'null', //false   true >true
  true >null, //true     true>false 
  true >'',  //true          true>false
  true >'0false',//false   true>true
  false===false, //true
  false!==false,  //fasle
  0 ==false, //true 值等就可以
  0 ===false, //false 值等类型不等
  0 !=false, //false
  0!==false,  //true
  1 !=false,  //true
  1!==false   //true
);
echo '<hr/>';
// (c)数值或字符串跟数值按数值比较
var_dump(
  30 > '45ab',  //false   30>45
  17 > 'true9',  //true   17>0
  1 >'4.5.6.7',  //false       1>4.5
  1e2 >'e3',   //true   100>0
  4.5 >'2e1',  //false       4.5>20
  20 >'17.5'   //true    20>17.5
);





echo '<br/>';
echo '<br/>';
echo '<br/>';
echo '<br/>';
echo '<br/>';
echo '<br/>';
echo '<br/>';
echo '<br/>';
echo '<br/>';
echo '<br/>';
echo '<br/>';
echo '<br/>';
echo '<br/>';
echo '<br/>';
echo '<br/>';
echo '<br/>';
echo '<br/>';

echo '<br/>';













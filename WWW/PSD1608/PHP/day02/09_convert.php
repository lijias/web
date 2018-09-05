<?php
header('Content-Type:text/html;charset=utf-8');
// 强制转换 --临时转换
/*整型 (integer)$var|(int)$var
 浮点型 (float)$var|(double)$var|(real)$var
布尔型 (boolean)$var|(bool)$var
字符型(string)$var
数组 (array)$var
对象(object)$var
NULL  (unset)$var
*
*/
 $int = 20;
 $float = 16.78;
 $bool = true;
 $str = 'hello';
 
 // 将$bool 转为 整型
 var_dump((int)$bool);
 echo '<br/>';
 var_dump((integer)$bool);
 echo '<br/>';
 var_dump($bool);//变量本身没变化
 echo '<hr/>';
 // 将 $str转为浮点型
 var_dump((float)$str);
 echo '<br/>';
 var_dump((double)$str);
 echo '<br/>';
 var_dump((real)$str);
 echo '<br/>';
 var_dump($str);//变量本身没变化
 
 echo '<hr/>';
 var_dump((int)$float);//向下取整
 echo '<br/>';
 var_dump((float)$int);
 
 echo '<hr/>';
 /*b.类型转换函数
          整型intval()
          浮点型  floatval()|doubleval()
          布尔型  boolval() -- PHP5.5以上
           字符型  strval()
 */
 var_dump(intval($float));
 echo '<br/>';
 var_dump(floatval($bool));
 echo '<br/>';
 var_dump(doubleval($bool));
 echo '<br/>';
 var_dump(strval($int));
 echo '<br/>';
 var_dump($int);//变量本身没变化
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 






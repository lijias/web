<?php
header('Content-Type:text/html;charset=utf-8');
/* 1. {}将变量名称作为整体
 *  $userName567 = 'alice';
 *  要求双引号输出形如结果 :aliceabc
 * 2.自动转换
 *   (1)其它类型转为整型和浮点型  
 *   echo 7.45 + 'true' +null +'3false' +'e9';
 *   echo '<br/>';
 *   echo 8.9 + '-1e1' +'7null' +'' +'-5.7.8.8';
 *   echo '<br/>';
 *   (2)其它类型转为字符型
 *   echo '#',1e2,true,'#';
 *   echo '<br/>';
 *   echo '#','1e2','true','#';
 *   (3)其它类型转为布尔型
 *   if('0false'){
 *     echo 'ok';
 *   }else{
 *     echo 'error';
 *   }
 *   if('true5'){
 *     echo 'ok';
 *   }else{
 *     echo 'error';
 *   }
 *   3.实现临时转换例子
 */







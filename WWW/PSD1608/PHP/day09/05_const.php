<?php
header('Content-Type:text/html;charset=utf-8');
/*__LINE__:获得当前代码的行号
           __FILE__:获得当前文件的绝对路径
           __DIR__:获得当前文件的目录绝对路径
           __FUNCTION__:获得函数名称
           __CLASS__:获得类名称
           __METHOD__:获得方法名称
           __NAMESPACE__:获得命名空间的名称
 * 
 *   
 */


 echo __LINE__;
 echo '<br/>';
 echo __FILE__;
 echo '<br/>';
 echo __DIR__;

 // __FUNCTION__:获得函数名称
 function isJie($n){
   $fn = __FUNCTION__;// 效率高
   if($n>1){
 	return $n*$fn($n-1);
   }
   return 1;
 }
 echo isJie(5);
 
 
 
 
 
 
 
 
 
 




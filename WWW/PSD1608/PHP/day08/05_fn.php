<?php
header('Content-Type:text/html;charset=utf-8');
/*判断变量是否是素数
 * @param  int $n 
 * return bool
 */
 function isPrime($n){//形参：生存期：当前函数执行的时间（短）
 	for($i=2;$i<$n;$i++){
 		if($n%$i==0){
 			return false;
 		}
 	}
 	return true;
 }
 // 具体的变量是否是素数
 $var=11;
 if(isPrime($var)){// 实参: 生存期：整个程序执行的时间（长）
 	echo $var.'是素数';
 }else{
 	echo $var.'不是素数';
 }
 echo  '<hr/>';
 //  范围2-100中的素数
 for($i=2;$i<=10;$i++){
 	if(isPrime($i)){
 	   echo $i.'是素数<br/>';
 	}
 }
 echo '<hr/>';
 /*  判断变量是否是数组中的值  
  * @param  mixed $needle
  * @param array  $arr
  * @return  bool
  */
 function inArray($needle,$arr){
 	foreach($arr as $v){
 		if($v==$needle){
 			return true;
 		}
 	}
 	return false;
 }
 $var = 'a'; // 松散比较
 $arr = array('a','b','c','d');
 var_dump(inArray($var,$arr));
 echo '<hr/>';
 /*  判断变量是否是数组中的值
  * @param  mixed $needle
 * @param array  $arr
 * @param  bool $strict=false
 * @return  bool
 */
 function inArray2($needle,$arr,$strict=false){
 	if($strict!==true){
 		//松散比较  true =='a' -->true
 		foreach($arr as $v){
 			if($v==$needle){
 				return true;
 			}
 		}
 		return false;
 	}else{
 		// 严格比较 true==='a' -->false
 		foreach($arr as $v){
 			if($v===$needle){
 				return true;
 			}
 		}
 		return false;
 	}
 }
 $var = true;
 $arr = array('a','b','c','d');
 var_dump(inArray2($var,$arr,true));
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
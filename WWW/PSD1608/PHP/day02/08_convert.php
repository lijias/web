<?php
header('Content-Type:text/html;charset=utf-8');
/*下面情况都转换为false:
  a.布尔型 false
  b.null 转为布尔型false
  c.空字符串 转为布尔型false
  d.整数0,浮点数0.0,字符串'0' "0"
                   转为布尔型false
  e.没有成员的空数组 array() 转为布尔型false
 * 
 */
 /* 条件双分支语句
  * if(expr条件){ // expr条件自动转为布尔类型
  *    echo '如果expr条件为真执行的语句组';
  * }else{
  *    echo '如果expr条件为假执行的语句组';
  * } 
  */
  if(false){
  	 echo '真';
  }else{
  	 echo '假';
  }
  echo '<br/>';
  if(null){
  	echo '真';
  }else{
  	echo '假';
  }
  echo '<br/>';
  if(''){
  	echo '真';
  }else{
  	echo '假';
  }
  echo '<br/>';
  if(0){
  	echo '真';
  }else{
  	echo '假';
  }
  echo '<br/>';
  if(0.0){
  	echo '真';
  }else{
  	echo '假';
  }
  echo '<br/>';
  if('0'){
  	echo '真';
  }else{
  	echo '假';
  }
  echo '<br/>';
  if("0"){
  	echo '真';
  }else{
  	echo '假';
  }
  echo '<br/>';
  $arr = array();
  if($arr){
  	echo '真';
  }else{
  	echo '假';
  }
  echo '<hr/>';
  echo '<br/>';
  if(0000000){
  	echo '真';
  }else{
  	echo '假';
  }
  echo '<br/>';
  if(0.000000){
  	echo '真';
  }else{
  	echo '假';
  }
  echo '<br/>';
  if('00'){ //真
  	echo '真';
  }else{
  	echo '假';
  }
  echo '<br/>';
  if('0.0'){ //真     只有字符串'0' "0"为false
  	echo '真';
  }else{
  	echo '假';
  }
  echo '<br/>';
  if('   '){ //真
  	echo '真';
  }else{
  	echo '假';
  }
  echo '<br/>';
  if('false'){ //真
  	echo '真';
  }else{
  	echo '假';
  }
  echo '<br/>';
  if(05){   // 0开头 八进制(0-7) 真
  	echo '真';
  }else{
  	echo '假';
  }
  echo '<br/>';
  if(08){  // 0开头 八进制(0-7)  -->0 false
  	echo '真';
  }else{
  	echo '假';
  }



    





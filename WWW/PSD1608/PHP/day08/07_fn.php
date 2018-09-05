<?php
header('Content-Type:text/html;charset=utf-8');
/*递归:调用函数A时，函数A中又调用函数B,
而函数A和函数B是同一个函数(调用自身函数)  */
/* 1. 递归是用函数实现  
 * 2. 模拟不定次数的循环
 */
// 降序输出 1-3 值
for($i=3;$i>=1;$i--){
	echo $i.'<br/>';
}
echo '<hr/>';
// 递归实现：降序输出 1-3 值
function isGui($n){
	//echo $n.'<br/>';// 3 2 1
	$n--;
	//echo $n.'<br/>';//2 1 0
	if($n>0){
	   //echo $n.'<br/>';//2 1
	   isGui($n);
	}
	echo $n.'<br/>';// 0 1 2
	/* 第一层函数     $n--;（2） 不输出
	 * 第二层函数    $n--; （1） 不输出
	 * 最里层函数   $n--;(0) 递归结束  echo $n=0
	 * 跳出一层 （第二层） echo  $n=1;
	 * 跳出一层 （第一层） echo  $n=2
	 * 函数结束
	 */
}
isGui(3);

/*求阶乘算法(递归)
 * @param  int $n
 * @retrun mixed
 */ 
function getCheng($n){
  /* if($n>1){
     return $n*getCheng($n-1);
  }
  return 1; */
  if($n<=1){
  	 return 1;
  }
  return $n*getCheng($n-1);
}
/* return 5*getCheng(4); 
 * return 5*return 4*getCheng(3); 
 * return 5*return 4*return 3*getCheng(2);
 * return 5*return 4*return 3*return 2*getCheng(1);
 * return 5*return 4*return 3*return 2* return 1;
 * return 120
 */
echo  getCheng(5);


























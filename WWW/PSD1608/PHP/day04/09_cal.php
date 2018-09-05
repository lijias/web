<?php
header('Content-Type:text/html;charset=utf-8');
/* 简单计算器  
 * $num1 = 8;
 * $num2 = 3;
 * $op = '*';
 * 要求:
 *  1. $num1 ,$num2 必须是数值
 *  2. $op 等于  （+ -  * / %）执行对应的算术运算结果
 *    其他运算符超出范围
 *  3.当 $op 是 / 判断除数不能为0
 */
// 方法一
$num1 = 8;
$num2 = 0;
$op = '/';
if(is_numeric($num1)&& is_numeric($num2)){
	if($op == '+'){
		echo $num1.'+'.$num2.'='.($num1+$num2);
	}elseif($op == '-'){
		echo $num1.'-'.$num2.'='.($num1-$num2);
	}elseif($op == '*'){
		echo $num1.'*'.$num2.'='.($num1*$num2);
	}elseif($op == '/'){
		if($num2!=0){
		   echo $num1.'/'.$num2.'='.
		   ($num1/$num2);
		}else{
		   echo '除数不能为0';
		}
	}elseif($op == '%'){
		echo $num1.'%'.$num2.'='.($num1%$num2);
	}
}else{
	echo '操作数必须是数值';
}
echo '<hr/>';

$num1 = 8;
$num2 = 3;
$op = '*';
if(is_numeric($num1) && is_numeric($num2)){
  if($op=='+'){
  	$rs = $num1+$num2;
  }elseif($op=='-'){
  	$rs = $num1-$num2;
  }elseif($op=='*'){
  	$rs = $num1*$num2;
  }elseif($op=='/'){
  	if($num2!=0){
  		$rs = $num1/$num2;
  	}else{
  		exit('除数不能为0');
  	}
  }elseif($op=='%'){
  	$rs = $num1%$num2;
  }else{
  	die('运算符必须 + - * / %');
  }				
}else{
	die('操作数必须是数值');
}
echo $num1.$op.$num2.'='.$rs;

/* echo : 向浏览器输出字符串,如果后面代码继续执行 
 * die, exit:报错输出，后面代码不执行了
 */













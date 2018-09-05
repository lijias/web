<?php
header('Content-Type:text/html;charset=utf-8');
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$op   = $_POST['op'];
//echo $num1,$op,$num2;
/* 要求:
 *  1. $num1 $num2 必须是数值
 *  2. $op 分别判断(+ - * / %) 对应输出运算结果
 *  3. $op 是/  要求 除数不能为0
 */
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
			die('除数不能为0');
		}
	}elseif($op=='%'){
	if($num2!=0){
			$rs = $num1%$num2;
		}else{
			die('除数不能为0');
		}
	}
}else{
	die('$num1 $num2 必须是数值');
}
echo $num1.$op.$num2.'='.$rs;













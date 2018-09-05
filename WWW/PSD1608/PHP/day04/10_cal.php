<?php
header('Content-Type:text/html;charset=utf-8');
// 接受表单中  num1 num2 op 名称的元素对应信息值
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$op = $_POST['op'];
//echo $num1,$op,$num2;
if(is_numeric($num1) && is_numeric($num2)){
	if($op =='+'){
		$rs = $num1 +$num2;
	}elseif($op =='-'){
		$rs = $num1 -$num2;
	}elseif($op =='*'){
		$rs = $num1 *$num2;
	}elseif($op =='/'){
		if($num2!=0){
			$rs = $num1/$num2;
		}else{
			die('除数不能为0');
		}
	}elseif($op =='%'){
		$rs = $num1%$num2;
	}
}else{
	die('操作数必须是数值');
}
echo $num1.$op.$num2.'='.$rs;




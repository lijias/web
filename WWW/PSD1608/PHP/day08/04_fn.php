<?php
header('Content-Type:text/html;charset=utf-8');
// 1-100 累加
function isNum(){
  $sum =0;
  for($i=1;$i<=100;$i++){
  	 $sum += $i;
  }
  echo $sum;
	
}
isNum();
echo '<br/>';
// string substr(string $var,int $start[,int $length])
//   $length  可选参数
function isNum2($n,$m=1){
	$sum =0;
	for($i=$m;$i<=$n;$i++){
		$sum += $i;
	}
	echo $sum;

}
isNum2(80);
echo '<br/>';
isNum2(50,10);

echo '<hr/>';
/* 累加算法  
 * @param  int  $n (parameter 参数)
 * @param  int  $m=1
 * @return  mixed 
 */
function isNum3($n,$m=1){
	$sum =0;
	for($i=$m;$i<=$n;$i++){
		$sum += $i;
	}
	return $sum;
	//echo 'hello';

}
$sum =isNum3(80);
echo $sum;
echo '<br/>';
echo isNum3(50,10);














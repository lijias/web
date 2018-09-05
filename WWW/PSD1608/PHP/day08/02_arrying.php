<?php
header('Content-Type:text/html;charset=utf-8');
// 比较数组中的两个数，按小大顺序排序
$arr = array(7,3);
if($arr[0]>$arr[1]){
	$tmp =$arr[0];
	$arr[0]=$arr[1];
	$arr[1]=$tmp;
}
echo '<pre>';
print_r($arr);
echo '</pre>';

// 冒泡排序原理
// (1)相邻的两个元素两两小大顺序比较，最大值下沉
$arr = array(3,6,4,2,11,10,5);
/* （3,6）,4,2,11,10,5  
 *  3,（4,6）,2,11,10,5 
 *  3, 4,（2,6）,11,10,5
 *  3, 4, 2,（6,11）,10,5
 *  3, 4, 2, 6,（10,11）,5
 *  3, 4, 2, 6, 10,（5,11）*/
 $count = count($arr);
 for($i=0;$i<$count-1;$i++){
 	if($arr[$i]>$arr[$i+1]){
 		$tmp = $arr[$i];
 		$arr[$i]=$arr[$i+1];
 		$arr[$i+1]= $tmp;
 	}
 }
 echo '<pre>';
 print_r($arr);
 echo '</pre>';
 // (2) 重复上面的操作，
 //  将每个元素的剩余中的最大值下沉,除了最小值外（外循环轮次）
 //  比较次数越来越少(倒三角)
 // 倒三角
 $n = 7;
 for($k=1;$k<$n;$k++){
 	for($i=0;$i<$n-$k;$i++){
 		echo '* &nbsp;';
 	}
 	echo '<br/>';
 }
$count = count($arr);
for($k=1;$k<$count;$k++){// 外轮次(6趟 除了最小值元素)
 for($i=0;$i<$count-$k;$i++){
 	if($arr[$i]>$arr[$i+1]){
 		$tmp = $arr[$i];
 		$arr[$i]=$arr[$i+1];
 		$arr[$i+1]= $tmp;
 	}
 }
}
echo '<pre>';
print_r($arr);
echo '</pre>';









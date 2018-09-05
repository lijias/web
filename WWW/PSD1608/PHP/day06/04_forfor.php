<?php
header('Content-Type:text/html;charset=utf-8');
// 嵌套循环：外循环执行一次，内循环完成所有的循环逻辑
// 1. 行列图形分析
for($i=1;$i<=5;$i++){ //行
   //echo '外循环-'.$i.'<br/>';
   for($j=1;$j<=3;$j++){//列
   	  echo '内循环----'.$j;
   }
   echo '<br/>';
}
//4行3列的表信息
$var ='xxx';
$link='';
$link.='<table border="1" align="center">';
for($i=1;$i<=4;$i++){//行
   $link.='<tr>';
   for($j=1;$j<=3;$j++){//列
   	  $link.='<td>'.$var.'</td>';
   }
   $link.='</tr>';
}
$link.='</table>';
echo $link;
// 常用 一层循环
$var ='xxx';
$link='';
$link.='<table border="1" align="center">';
for($i=1;$i<=4;$i++){//行
	$link.='<tr>';
	$link.='<td>'.$var.'</td>';
	$link.='<td>'.$var.'</td>';
	$link.='<td>'.$var.'</td>';
	$link.='</tr>';
}
$link.='</table>';
echo $link;
echo '<hr/>';
//  5行5列正方形 *
for($i=1;$i<=5;$i++){//行
	for($j=1;$j<=5;$j++){//列
		echo '*&nbsp;';
	}
	echo '<br/>';
}
//  5行5列三角形 *
for($i=1;$i<=5;$i++){//行
	for($j=1;$j<=$i;$j++){//列
		echo '*&nbsp;';
	}
	echo '<br/>';
}
//九九乘法口诀表
for($i=1;$i<=9;$i++){
	for($j=1;$j<=$i;$j++){
		echo $i*$j.'&nbsp;';
	}
	echo '<br/>';
}
//九九乘法口诀表
for($i=1;$i<=9;$i++){
	for($j=1;$j<=$i;$j++){
		echo $j.'*'.$i.'='.$i*$j.'&nbsp;';
	}
	echo '<br/>';
}

// N图形 带条件的输出
$n=8;
for($i=1;$i<=$n;$i++){
	for($j=1;$j<=$n;$j++){
		if($j==1 || $j==$n ||$j==$i){
			echo '*&nbsp;';
		}else{
			echo '&nbsp;&nbsp;';
		}
	}
	echo '<br/>';
}

























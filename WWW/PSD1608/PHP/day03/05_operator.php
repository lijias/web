<?php
header('Content-Type:text/html;charset=utf-8');
//赋值运算符: =
$var = 15;  //赋值运算符右结合(从右往左结合)
echo $var;
echo '<br/>';
echo  8 + 7; // 左结合(从左往右结合)
echo '<hr/>';
//+= -= *= /= %=
$var = 8;
$var += 5;//+=效率高  ;$var = $var +5;
echo $var;
echo '<br/>';
$var = 8;
$var -= 5;//-=效率高  ;$var = $var -5;
echo $var;
echo '<br/>';
$var = 8;
$var *= 5;//*=效率高  ;$var = $var *5;
echo $var;
echo '<br/>';
$var = 8;
$var /= 5;// /=效率高  ;$var = $var /5;
echo $var;
echo '<br/>';
$var = 8;
$var %= 5;//%=效率高  ;$var = $var % 5;
echo $var;
echo '<hr/>';
$str ='
    <ul>
	  <li>one</li>
	  <li>two</li>
	  <li>three</li>	
	</ul>	
	';

echo $str;
// .= 字符串累连接
$a = 'blue';
$b ='red';
$c = 'green';
$link ='';//初始值
$link .='<ul>'; // $link = $link.'<ul>';
$link.='<li>'.$a.'</li>';
$link.='<li>'.$b.'</li>';
$link.='<li>'.$c.'</li>';
$link.='</ul>';
echo $link;
echo '<hr/>';
/* 用 .= 输出  
 * 3行 3列的表
 * 内容 : $var ='xxx';
 */
$var = 'xxx';
$link ='';
$link .='<table>';
$link .='<tr>';
$link .='<td>'.$var.'</td>';
$link .='<td>'.$var.'</td>';
$link .='<td>'.$var.'</td>';
$link .='</tr>';
$link .='<tr>';
$link .='<td>'.$var.'</td>';
$link .='<td>'.$var.'</td>';
$link .='<td>'.$var.'</td>';
$link .='</tr>';
$link .='<tr>';
$link .='<td>'.$var.'</td>';
$link .='<td>'.$var.'</td>';
$link .='<td>'.$var.'</td>';
$link .='</tr>';
$link .='</table>';
echo $link;
























<?php
header('Content-Type:text/html;charset=utf-8');
echo 12.7 % 5.2; // 12 % 5 =2
echo '<br/>';
echo -12.7 % 5.2;// -2
echo '<br/>';
echo -12.7 % -5.2;// -2
echo '<br/>';
echo 12.7 % -5.2; //2
echo '<br/>';
echo fmod(12.7,5.2);// 12.7%5.2 =2.3
echo '<br/>';
echo 42 % 50; // 42
echo '<br/>';

echo '<hr/>';
$a =true; /*布尔不支持自增和自减  */
$b = '';  /*字符串支持自增和不支持自减  */
$c =null;/*null支持自增和不支持自减   */
$d =1e1; // 10
$a++;
$b++;
$c++;
$d++;
$e = $b + $d++;// 1+ 11=12
$a++;
$b++;
$c++;
$d++;
echo $a,$b,$c,$d,$e;//true=1,2,2,13,12
echo '<hr/>';
// .= 
$a ='apple';
$b = 'red';
$c = 'friuts';
$link='';

$link.='<dl>'; // $link = $link.'<dl>';
$link.='<dt>'.$a.'</dt>';
$link.='<dd>'.$b.'</dd>';
$link.='<dd>'.$c.'</dd>';
$link.='</dl>';
echo $link;
echo '<hr/>';
// 字符串或null 跟字符串的比较
var_dump(
   '78'>'123', //false  78>123
   'tom'>'tam',//true   o>a
   'null'>'200',//true   n>2 ascii码
   '2e1' >'20.6.7.7'//true     e>0 ascii码
);
echo '<hr/>';
//布尔值或null跟其他类型按布尔值比较
var_dump(
   true >'00000', //false   true>true
   true >0000000, //true    true>false
   true >'e3'     //false   true>true
);
echo '<hr/>';
//数值或字符串跟数值按数值比较
var_dump(
  19 >'true', //true    19>0
  1 >true, //false          1>1
  2e1>'20.6.7.7',//false      20>20.6 
  '2e1' >'20.6.7.7'//true     e>0 ascii码
);

echo '<hr/>';
// 7.===(全等于) 和!==(不全等于)严格比较的使用
$email ='@163.com';
if(strpos($email,'@')!==false){
	       // 产生的错误 0自动 -->false
	       // 将 false  0 区分开
	       // false !==false  -->false
	       //  0 !==false  ->true
	       //  3 !==false  ->true
  echo '邮箱合法';
}else{
  echo '邮箱不合法';
}
echo '<br/>';
$email ='@163.com';
if(strpos($email,'@')===false){
	// 产生的错误 0自动 -->false
	// 将 false  0 区分开
	// false ===false  -->true
	//  0 ===false  ->false
	//  3 ===false  ->false
	echo '邮箱不合法';
}else{
	echo '邮箱合法';
}


























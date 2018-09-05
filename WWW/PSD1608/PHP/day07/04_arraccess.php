<?php
header('Content-Type:text/html;charset=utf-8');
/* a.输出数组中的某一个值
  echo $数组名称[$key];  */

$arr = array(
		3 =>'one',
		7 =>'two',
		12=>'three',
		7 =>'four'
);
// 获得  three值
echo $arr[12];
echo '<br/>';
// 获得  c值
$arr = array('a','b','c');
echo $arr[2];

echo '<br/>';
$arr = array(
		'user' => 'tom',
		'age' =>20,
		'sex' =>'男',
		'salary'=>8888.67,
		'married'=>true
);
//  获得 薪水的值
echo $arr['salary'];
echo '<hr/>';
// b.循环遍历数组中的每个值
$arr = array('a','b','c');
// count,sizeof:获得数组和对象中的个数
for($i=0;$i<count($arr);$i++){
   echo $arr[$i].'<br/>';	
}
echo '<hr/>';
$arr = array(
		'user' => 'tom',
		'age' =>20,
		'sex' =>'男',
		'salary'=>8888.67,
		'married'=>true
);
foreach($arr as $k=>$v){
	//echo $arr[$k].'<br/>';
	//echo $v.'<br/>';
	// 输出形如  [user]=tom [age]=20...
	echo  '['.$k.']='.$v.'<br/>';
}

echo '<hr/>';
/* $数组名称[$key]=$value;
       说明：键名称存在修改，键名称不存在添加
 * 
 */
 $arr = array(
   5 =>'one',
   9=>'two',
   17=>'three'	
 );
 //修改 
 $arr[9] ='four';
 echo '<pre>';
 print_r($arr);
 echo '</pre>';
 //添加
 $arr[6]='five';
 echo '<pre>';
 print_r($arr);
 echo '</pre>';

 echo '<hr/>';
 
 














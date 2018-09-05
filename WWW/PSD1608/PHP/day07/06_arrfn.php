<?php
header('Content-Type:text/html;charset=utf-8');
// count/sizeof:获得对象或数组的个数
$arr = array(
		'user' => 'tom',
		'age' =>20,
		'sex' =>'男',
		'salary'=>8888.67,
		'married'=>true
);
echo count($arr);
echo '<br/>';
echo sizeof($arr);
echo '<br/>';
// join 别名implode: 将一个一维数组的值转化为字符串
$arr =array('a','b','c','d');
// 输出形如  a*b*c*d 的字符串
echo join('|',$arr);
echo '<hr/>';
/* SQL: 更新语句  
 *  update 表名 set user='rose','age'=23,
 *             'sex'='女' 条件
 *  
 *  $arr = array(
		'user' => 'tom',
		'age' =>20,
		'sex' =>'男',
		'salary'=>8888.67,
		'married'=>true
    );
 *  输出  $str = user=tom,age=20,sex=男,...;
 */ 
$arr = array(
		'user' => 'tom',
		'age' =>20,
		'sex' =>'男',
		'salary'=>8888.67,
		'married'=>true
);
// 方法一：join
$newArr=array();
foreach($arr as $k=>$v){
	$newArr[] = $k.'='.$v;
	// $newArr[0] = user=tom;
	// $newArr[1] = age=20;...
}
echo '<pre>';
print_r($newArr);
echo '</pre>';
$str = join(',',$newArr);
echo $str;
echo '<br/>';
// 方法二：不用join
$link ='';
foreach($arr as $k=>$v){
	$link .= $k.'='.$v.',';
}
$link = substr($link,0,-1);
echo $link;
echo '<br/>';
// 方法三：不用join
// empty:检查一个变量是否为空

$link='';
//var_dump(empty($link));
foreach($arr as $k=>$v){
	if(empty($link)){
		$link.=$k.'='.$v;
	}else{
		$link.=','.$k.'='.$v;
	}
}
echo $link;





































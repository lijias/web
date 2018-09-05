<?php
header('Content-Type:text/html;charset=utf-8');

// 索引+索引的二维数组
$arr = array(
	  0=> 'a',
	  1=> 'b',
	  2=> array('one','two','three'),		
	  3=> array('blue','red','green')
);
// 获得  red 值  $arr[3]=array('blue','red','green')
echo $arr[3][1];
// 关联+关联的二维数组
$arr = array(
     'user'=>'tom',
	 'age' =>array(
	      'one'=>28,
	 	  'two'=>20,
	 	  'three'=>22		 
      ),		
     'addr'=>array(
     	'a' =>'北京',
        'b' =>'上海'
	 )
);
//  获得上海
echo $arr['addr']['b'];
// 索引+关联的二维数组(重要)
// 定义方法一
$arr1 =array(
    0=>array('user'=>'tom','age'=>22,'sex'=>'男'),
	1=>array('user'=>'rose','age'=>18,'sex'=>'男'),
	2=>array('user'=>'tina','age'=>23,'sex'=>'女'),
	3=>array('user'=>'alice','age'=>17,'sex'=>'男')		
);
echo '<pre>';
print_r($arr1);
echo '</pre>';
// 定义方法二
$arr2[0] =array('user'=>'tom','age'=>22,'sex'=>'男');
$arr2[1] =array('user'=>'rose','age'=>18,'sex'=>'男');
$arr2[2] =array('user'=>'tina','age'=>23,'sex'=>'女');
$arr2[3] =array('user'=>'alice','age'=>17,'sex'=>'男');
echo '<pre>';
print_r($arr2);
echo '</pre>';

// 定义方法三
$arr3[0]['user'] ='tom';
$arr3[0]['age'] =22;
$arr3[0]['sex'] ='男';

$arr3[1]['user'] ='rose';
$arr3[1]['age'] =18;
$arr3[1]['sex'] ='男';

$arr3[2]['user'] ='tina';
$arr3[2]['age'] =23;
$arr3[2]['sex'] ='女';

$arr3[3]['user'] ='alice';
$arr3[3]['age'] =17;
$arr3[3]['sex'] ='男';
echo '<pre>';
print_r($arr3);
echo '</pre>';














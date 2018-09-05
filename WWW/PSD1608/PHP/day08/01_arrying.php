<?php
header('Content-Type:text/html;charset=utf-8');
$arr =array(
	    'user'=>array(
	      'tom',
	   	  'rose',
	   	  'alice'	
	    ),
		'age'=>array(
				20,
				21,
				18
		),
		'sex'=>array(
				'男',
				'女',
				'男'
		)

);
// 关联+索引的二维数组转为 索引+关联的二维数组
/* $arr =array(
		0=>array('user'=>'tom','age'=>22,'sex'=>'男'),
		1=>array('user'=>'rose','age'=>18,'sex'=>'男'),
		2=>array('user'=>'tina','age'=>23,'sex'=>'女'),
		3=>array('user'=>'alice','age'=>17,'sex'=>'男')
); */

//方法一
foreach($arr as $key=>$val){
	                //$val 一维数组
                    // $key  user  age sex    
	foreach($val as $k=>$v){
  	               //$k 0 1 2
  	               //$v :
  	               //第一行  tom rose alice
		           //第二行  20 21 18
		           //第三行  男 女 男
  	  $newArr[$k][$key] = $v;
  	  /* 
  	   * $key =user 
  	   *$newArr[0]['user'] =tom;
  	   *$newArr[1]['user'] =rose;
  	   *$newArr[2]['user'] =alice;
  	   * 
  	   * $key =age 
  	   *$newArr[0]['age'] =20;
  	   *$newArr[1]['age'] =21;
  	   *$newArr[2]['age'] =18;
  	   *
  	   *$key =sex
  	   *$newArr[0]['sex'] =男;
  	   *$newArr[1]['sex'] =女;
  	   *$newArr[2]['sex'] =男;
  	   */
  }	
}

echo '<pre>';
print_r($newArr);
echo '</pre>';

// 方法二：
foreach($arr['user'] as $k=>$v){
	         //$arr['user']一维数组
	         //$k  0 1 2
	         //$v  tom rose alice
   $newArr[$k]['user'] = $v;
   $newArr[$k]['age']=$arr['age'][$k];
   $newArr[$k]['sex']=$arr['sex'][$k];
   /* $arr[0]['user'] =tom;
    * $arr[0]['age'] =20;
    * $arr[0]['sex']=男;
    * 
    * $arr[1]['user'] =rose;
    * $arr[1]['age'] =21;
    * $arr[1]['sex']=女;
    * 
    * $arr[2]['user'] =alice;
    * $arr[2]['age'] =18;
    * $arr[2]['sex']=男;
    */
}
echo '<pre>';
print_r($newArr);
echo '</pre>';



















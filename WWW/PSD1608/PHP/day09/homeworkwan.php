<?php
header('Content-Type:text/html;charset=utf-8');
/*封装将数组转为字符串(join)  
 * @param  string $glue
 * @param  array $arr
 * @return  string
 */
//用,连接数组$arr
$arr=array("A","B","C","D");
function Jion($arr,$fuhao){
   $link="";
   foreach ($arr as $k=>$v){
   if ($link!=""){
     $link.=$fuhao.$v;   
    }else{
     $link.=$v;
    }
   }
   return $link;
}
$str=Jion($arr,".");
echo $str;
echo '<hr/>';
/*封装 将两个数组中相同的值组成一个新数组 
 * @param array $arr1
 * @param array $arr2
 * @return array
 */
function  getArr($arr1,$arr2){
	$newArray= array();
	foreach($arr1 as $v){
		if(in_array($v,$arr2,true)){
			$newArray[]=$v;
		}
	}
	return $newArray;
}
$arr1=array(3,4,8,9,2);
$arr2=array(12,7,8,9,3);
print_r(getArr($arr1,$arr2));

echo '<hr/>';
/*查找 $str在数组中的值并且返回 该值的键和值的新数组  
 * @param  string $n
 * @param array $arr
 * @return array
 */
function findArr($n,$arr){
   /* $newArr = array();
   foreach($arr as $k=>$v){
   	   if($n===$v){
   	   	 $newArr[$k]=$v;
   	   }
   }
   return $newArr;	 */
   foreach($arr as $k=>$v){
   	    unset($arr[$k]);
		if($n===$v){
			$arr[$k]=$v;
		}
	}
	return $arr;
}
$str ='b';
$arr=array('one'=>'a','two'=>'b','three'=>'b');
print_r(findArr($str,$arr));

echo '<hr/>';
/* 求 1-n的平方和(递归)
 * @param  int $n
 * @return  mixed
 */
function isSum($n){
	 if($n>1){
	  return $n*$n +isSum($n-1);
	 }
	 return 1;
}
echo isSum(5);
echo '<hr/>';
/* 判断变量是否是数组中的值
 * @param mixed $n
 * @param array $arr
 * @param $strict=false
 * @return bool
 */
 function inArray($n,$arr,$strict=false){
 	if($strict!==true){
 		//松散比较 ==
 		foreach($arr as $v){
 			if($v==$n){
 				return true;
 			}
 		}
 		return false;
 	}else{
 		// 严格比较===
 		foreach($arr as $v){
 			if($v===$n){
 				return true;
 			}
 		}
 		return false;
 	}
 }
 $var = true;
 $arr =array('a','b','c','d');
 var_dump(inArray($var,$arr,true));
  





























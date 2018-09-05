<?php
//__NAMESPACE__:获得命名空间的名称
// namespace:命名空间,解决函数，类等名称冲突的问题
//  php5.3上
//namespace a;
function var_dump(){
	echo 'hello world';
}
var_dump(); // 默认 a空间下  var_dump
echo '<br/>';
\var_dump('a'); //系统函数var_dump
echo '<br/>';
//\a\var_dump();//  a空间下  var_dump
echo '<br/>';
//__NAMESPACE__:获得命名空间的名称
$fn = __NAMESPACE__.'\var_dump';
echo $fn();




<?php
header('Content-Type:text/html;charset=utf-8');
/* 判断密码  
 * 要求:
 *   1.第一个密码不能为空
 *   2.第一个密码 长度在 6-16之间
 *   3.第一个密码和第二个密码必须一致
 *   strlen :获得字符串的长度
 */
$pwd1 = '123456';
$pwd2 = '123456';
//  1.第一个密码不能为空
if(strlen($pwd1)){
	//...
}else{
	echo '密码不能为空';
}
if(!strlen($pwd1)){
	echo '密码不能为空';
}else{
	//...
}
echo '<br/>';
/*1.第一个密码不能为空
  2.第一个密码 长度在 6-16之间  */
if(!strlen($pwd1)){
	echo '密码不能为空';
}else{
	if(strlen($pwd1)>=6 && strlen($pwd1)<=16){
		// ...
	}else{
		echo '密码长度必须在6-16之间';
	}
}
if(!strlen($pwd1)){
	echo '密码不能为空';
}else{
	if(strlen($pwd1)<6 || strlen($pwd1)>16){
		echo '密码长度必须在6-16之间';
	}else{
		//...
	}
}
echo '<hr/>';
/* 1.第一个密码不能为空
 * 2.第一个密码 长度在 6-16之间
 * 3.第一个密码和第二个密码必须一致  
 * 等同于 多分支语句的  if嵌套
 */
if(!strlen($pwd1)){
	echo '密码不能为空';
}else{
	if(strlen($pwd1)<6 || strlen($pwd1)>16){
		echo '密码长度必须在6-16';
	}else{
		if($pwd1!=$pwd2){
			echo '两次密码必须一致';
		}else{
			echo '密码合格';
		}
	}
}
echo '<hr/>';
/* 1.第一个密码不能为空
 * 2.第一个密码 长度在 6-16之间
* 3.第一个密码和第二个密码必须一致*/
$pwd1 = '123456';
$pwd2 = '123456';
if(!strlen($pwd1)){
	die('密码不能为空');
}elseif(strlen($pwd1)<6 || strlen($pwd1)>16){
	die('密码必须在6-16');
}elseif($pwd1!=$pwd2){
	die('两次密码不一致');
}
echo '最后将合格的表单元素信息存入数据库';





















<?php
header('Content-Type:text/html;charset=utf-8');
$user = $_POST['user'];
$pwd1 = $_POST['pwd1'];
$pwd2 = $_POST['pwd2'];
$email = $_POST['email'];
//echo $user,$pwd1,$pwd2,$email;
// 判断用户名
if(!strlen($user)){
	die('用户名不能为空');
}elseif(strlen($user)<5 ||strlen($user)>12){
	die('用户名必须在5-12');
}
//判断密码
if(!strlen($pwd1)){
	die('密码不能为空');
}elseif(strlen($pwd1)<6 ||strlen($pwd1)>16){
	die('密码必须在6-16');
}elseif($pwd1!=$pwd2){
	die('两次密码必须必须一致');
}
//判断邮箱
if(!strlen($email)){
	die('邮箱不能为空');
}elseif(strpos($email,'@')===false){
	die('邮箱必须存在@');
}
echo $user,'<br/>',$pwd1,'<br/>',$pwd2,'<br/>',$email;























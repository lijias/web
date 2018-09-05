<?php
header('Content-Type:text/html;charset=utf-8');
//邮箱
function isEmail($email){
//$email	="tom-tom@163.com";
$pattern="/\w+([\-\.]\w+)?@\w+\.(com|cn|org|net)/";	
$result=preg_match_all($pattern,$email,$match);
if ($result>0){
  return true;
}else{
  return false;
}
}
//var_dump($match);

//密码
function isPassword($str,$min,$max){
  $length=strlen($str);
  if ($length>=$min && $length<=$max){
    return true;
  }else{
    return false;
  }
}
//日期
function isDate($email){
	//2012-12-12
$pattern="/^\d{4}([\/\-])\d{2}\\1\d{2}$/";	
$result=preg_match_all($pattern,$email,$match);
if ($result>0){
  return true;
}else{
  return false;
}
}
//号码
function isNumber($email){
$pattern="/^1[34578]\d{9}$/";	
$result=preg_match_all($pattern,$email,$match);
if ($result>0){
  return true;
}else{
  return false;
}
}









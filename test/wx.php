<?php 
if(isset($_SESSION['user'])){ 
 print_r($_SESSION['user']);
exit;
}
$APPID='wx50dbc95975387e45';
$REDIRECT_URI='http://www.jb51.net/callback.php';
$scope='snsapi_base';
//$scope='snsapi_userinfo';//需要授权
$url='https://open.weixin.qq.com/connect/oauth2/authorize?appid='.$APPID.'&redirect_uri='.urlencode($REDIRECT_URI).'&response_type=code&scope='.$scope.'&state='.$state.'#wechat_redirect';
header("Location:".$url);
https://open.weixin.qq.com/connect/oauth2/authorize?appid=wx50dbc95975387e45&redirect_uri=http%3A%2F%2Fwww.jb51.net%2Fcallback.php&response_type=code&scope=snsapi_base&state=&connect_redirect=1#wechat_redirect
//http://www.jb51.net/callback.php
$appid = "wx50dbc95975387e45"; 
$secret = "ebca14bd6dfb2754687bcd9d733d1690"; 
$code = $_GET["code"]; 
$get_token_url = 'https://api.weixin.qq.com/sns/oauth2/access_token?appid='.$appid.'&secret='.$secret.'&code='.$code.'&grant_type=authorization_code';
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$get_token_url); 
curl_setopt($ch,CURLOPT_HEADER,0); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1 ); 
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10); 
$res = curl_exec($ch); 
curl_close($ch); 
$json_obj = json_decode($res,true); 
//根据openid和access_token查询用户信息 
$access_token = $json_obj['access_token']; 
$openid = $json_obj['openid']; 
$get_user_info_url = 'https://api.weixin.qq.com/sns/userinfo?access_token='.$access_token.'&openid='.$openid.'&lang=zh_CN'; 
 
$ch = curl_init(); 
curl_setopt($ch,CURLOPT_URL,$get_user_info_url); 
curl_setopt($ch,CURLOPT_HEADER,0); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1 ); 
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10); 
$res = curl_exec($ch); 
curl_close($ch); 
 
//解析json 
$user_obj = json_decode($res,true); 
$_SESSION['user'] = $user_obj; 
print_r($user_obj); 
?>
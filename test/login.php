<?php
header('Content-Type:text/html;charset=utf-8');
$username =$_POST['username'];
$password = $_POST['password'];
if ($username=='')
{
    echo 1;
	exit;
}
elseif ($password=='')
{
    echo 2;
	exit;
}
else 
{
    echo '用户名'. $username.'密码'.$password;
    exit;
}

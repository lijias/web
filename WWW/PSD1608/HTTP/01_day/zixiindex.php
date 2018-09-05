<?php
header('Content-Type:text/html;charset=utf-8');
//判断用户是否登录
//若用户登录,则显示欢迎信息,给出退出链接
//若用户没登陆,给出登录链接
if (isset($_COOKIE["username"]) && $_COOKIE["username"]!=""){
   echo "欢迎".$_COOKIE["username"]."<a href='zixilogout.php'>退出</a>";
} else{
   echo "<a href='zixi.php'>登录</a>";
}
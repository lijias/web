<?php
header("Content-Type:text/html;charset=utf-8");

var_dump($_POST); 
?>
<center>用户注册</center>
<br/><br/>
<form action="" method="POST">
用户名：<input type="text" name="uname" /><br/><br/>
密&nbsp;&nbsp;码：<input type="password" name="pwd" /><br/><br/>
<input type="submit" value="注册" /> 
</form>

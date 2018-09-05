<?php
header('Content-Type:text/html;charset=utf-8');
// 单引号和 双引号的区别
// (a)双引号能解析变量，而单引号不解析变量
$username = 'tom';
echo '用户名是:',$username;
echo '<br/>';
echo '用户名是:$username';
echo '<br/>';
echo "用户名是:$username";
echo '<br/>';
echo '<hr/>';
/*(b)双引号能解析所有的转义字符,单引号只能
     解析 \' 和 \\  */
/*转义字符(在源码中的特殊符号)
          \' 单引号
          \" 双引号
          \n 换行
          \r 回车
          \t 水平制表符
          \v 垂直制表符
          \\ 反斜杠
*/
echo 'this is a \n test<br/>';
echo "this is a \n test<br/>";
echo 'this is a \\ test<br/>';
echo "this is a \\ test<br/>";




















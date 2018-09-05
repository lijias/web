<?php
header('Content-Type:text/html;charset=utf-8');
// 强制转换-永久转换
/*settype: 设置变量的类型
   bool settype ( mixed &$var , string $type )
      成功返回true 失败返回false 
 */
$int = 20;
$float = 16.78;
$bool = true;
$str = 'hello';
// 将 $bool 永久转换为 整型
settype($bool,'int');
var_dump($bool); // 变量本身发生变化
echo '<br/>';
settype($float,'string');
var_dump($float);

echo '<br/>';
/*b. gettype: 获取变量的类型
 string gettype ( mixed $var )  */
echo gettype($float);












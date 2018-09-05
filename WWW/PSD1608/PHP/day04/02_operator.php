<?php
header('Content-Type:text/html;charset=utf-8');
/*错误抑制符 : @忽略错误，没错误不忽略  */
$var = 20;
@settype($var,'float');
var_dump($var);
echo '<hr/>';
echo  @(7/2);






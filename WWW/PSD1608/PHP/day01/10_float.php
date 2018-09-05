<?php
header('Content-Type:text/html;charset=utf-8');
$float = 45.78;
var_dump($float);
echo '<br/>';
$float = -45.78;
var_dump($float);
echo '<br/>';
// 科学计数法( e或 E)
$float = 2.1e2;
var_dump($float);//210
echo '<br/>';
$float = 2.1e-2;
var_dump($float);//0.021
echo '<br/>';
/* c.PHP中浮点型存近似值，所以不要对
           浮点型进行比较  */
var_dump((0.1+0.7)*10==8);















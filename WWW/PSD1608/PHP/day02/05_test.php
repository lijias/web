<?php
header('Content-Type:text/html;charset=utf-8');
$var = 12;
echo $var +5.5;
echo '<br/>';
echo $var +'5.5';
echo '<br/>';
echo $var +'abc5.5';//12
echo '<br/>';
echo $var +'5.5abc';//17.5
echo '<br/>';


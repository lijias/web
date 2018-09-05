<?php
header('Content-Type:text/html;charset=utf-8');
$filename="test.txt";
touch($filename);
echo "hello";
echo "<br/>";
$f="test.txt";
echo file_get_contents($f);

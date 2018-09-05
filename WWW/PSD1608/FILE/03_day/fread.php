<?php
header('Content-Type:text/html;charset=utf-8');
$fh=fopen("test.txt","r");
echo fread($fh,filesize("test.txt"));
fclose($fh);
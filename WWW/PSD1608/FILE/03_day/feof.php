<?php
header('Content-Type:text/html;charset=utf-8');
$fh=fopen("test.txt","r");
while (!feof($fh)){
  echo fgetc($fh);
}
fclose($fh);
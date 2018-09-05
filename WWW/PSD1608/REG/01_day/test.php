<?php
header('Content-Type:text/html;charset=utf-8');
$subject="g8o2od go1o7d";
$pattern="/\d/";
preg_match_all($pattern,$subject,$match);
//var_dump($match);
print_r($match);
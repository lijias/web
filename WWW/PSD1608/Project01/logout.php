<?php
include "./common/config.inc.php";
//
$_SESSION=array();
//
session_destroy;
//
header("location:index.php");
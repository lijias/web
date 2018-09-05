<?php
header('Content-Type:text/html;charset=utf-8');
session_start();

if ($_SESSION['userMsg']==null) {
	header("location:success.php?act=onlogin");
}
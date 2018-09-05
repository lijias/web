<?php
	header('Content-Type:text/html;charset=utf-8');
	
	define("BIND_MODULE", "Home");
	define("APP_PATH","application/");
	define("APP_DEBUG", TRUE);
	define("BUILD_DIR_SECURE", FALSE);
	include_once 'library/ThinkPHP/ThinkPHP.php';
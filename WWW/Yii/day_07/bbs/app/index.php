<?php

// change the following paths if necessary
$yii=dirname(__FILE__).'/../framework/yii.php';
$config=dirname(__FILE__).'/protected/config/main.php';

// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

//自定义常量
define("APP","/bbs/app/index.php");//入口文件的地址
define("ROOT","/bbs/app");//根目录

require_once($yii);
Yii::createWebApplication($config)->run();








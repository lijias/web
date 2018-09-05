<?php 
//全局配置文件
$config = array(
	
	//网站常规的配置信息
	"web"=>array(
		"defaultController"	=> "Index",//默认控制器
		"defaultAction"		=> "index",//默认方法
		"urlModel"			=> 1,//url访问方式 0url传参 1pathinfo
		"urlSuffix"			=> ".html",//伪静态的后缀
		"APP"				=> "/PSD1608/PSD1608/MVC/day_03/bbs/index.php",//入口文件地址
		"ROOT"				=> "/PSD1608/PSD1608/MVC/day_03/bbs",//项目根目录地址
		"success"			=> "application/default/view",//系统提示信息页面
	),
	
	//数据库配置信息
	"database"=>array(
		"host"				=> "localhost",//主机地址
		"user"				=> "root",//用户名
		"password"			=> "root",//密码
		"dbname"			=> "test",//库名
		"charset"			=> "utf8",//编码
	),
	
	//Smarty模板引擎的配置信息
	"smarty"=>array(
		"configDir"			=> "application/default/configs",//配置文件夹
		"templatesDir"		=> "application/default/view",//模板文件夹
		"cacheDir"			=> "application/default/runtime/cache",//缓存文件夹
		"compileDir"		=> "application/default/runtime/templates_c",//编译文件夹
		"caching"			=> false,//是否开启缓存
		"cacheLifeTime"		=> 3600,//缓存时间
		"leftDelimiter"		=> "{",//标签左定界符
		"rightDelimiter"	=> "}",//标签右定界符
	),
);
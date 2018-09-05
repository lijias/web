<?php 
	include_once 'application/core/Controller.php';//所有控制器父类
	include_once 'application/core/Model.php';//所有模型的父类
	include_once 'application/core/Image.php';
	include 'application/'.BIND_MODULE.'/configs/config.php';
	
	//定义系统常量
	define("ROOT",$config["web"]["ROOT"]);//项目根目录
	define("APP",$config["web"]["APP"]);//入口文件地址
	
	
	//控制url访问方式：0(url传参) 1(pathinfo)
	$urlModel = $config["web"]["urlModel"];
	
	if($urlModel == 1)
	{
		//获得当前url地址
		$url = $_SERVER["PATH_INFO"];
		//去掉.html后缀
		$url = str_replace($config["web"]["urlSuffix"],"",$url);
		//分割url地址
		$arr = explode("/",$url);
		//获得控制器名、方法名
		$c = $arr[1];
		$a = $arr[2];
		//处理url中的参数
		if($arr[3] != NULL)
		{
			for($i=3;$i<count($arr);$i+=2)
			{
				$key = $arr[$i];//参数名
				$value = $arr[$i+1];//参数值
				$_GET[$key] = $value;
			}
		}
	}
	else
	{
		$c = $_GET["c"];//控制器
		$a = $_GET["a"];//方法
	}
	
	
	//设置默认的控制器和方法
	if($c == NULL)
	{
		$c = $config["web"]["defaultController"];//默认的控制器
		$a = $config["web"]["defaultAction"];//默认的方法
	}
	
	
	//补全控制器名、方法名
	$c .= "Controller";
	$a .= "Action";
	
	
	if(file_exists('application/'.BIND_MODULE.'/controller/'.$c.'.php'))
	{
		include_once 'application/'.BIND_MODULE.'/controller/'.$c.'.php';
		$controller = new $c();
		$controller->$a();
	}
	else
	{
		echo "<br/><br/><h2>:( 访问的页面不存在~~~~</h2>";
		echo "<a href='".APP."' style='color:blue;text-decoration:none;'>返回首页</a>";
	}
?>
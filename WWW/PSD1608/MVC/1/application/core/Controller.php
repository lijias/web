<?php 
	//通过模型名,返回该模型的对象
	function D($modelName)
	{
		$modelName .= "Model";
		if(INDEX_NAME == "admin.php")
		{
			//后台调用模型文件
			include_once 'application/admin/model/'.$modelName.'.php';
		}
		else
		{
			//前台调用模型文件
			include_once 'application/default/model/'.$modelName.'.php';
		}
		$model = new $modelName();
		return $model;
	}
	//通过表名,快速获得一个模型对象
	function M($tableName=NULL)
	{
		include_once 'application/core/Model.php';
		$model = new Model();
		$model->tableName = $tableName;
		return $model;
	}
	//所有控制器的父类
	class Controller
	{
		private $smarty = NULL;//smarty对象
		
		//初始化Smarty
		public function __construct()
		{
			if(INDEX_NAME == "admin.php")
			{
				include 'application/admin/configs/config.php';
			}
			else
			{
				include 'application/default/configs/config.php';
			}
			
			include_once "library/smarty/Smarty.class.php";
			$this->smarty = new Smarty();
			$this->smarty->setTemplateDir($config["smarty"]["templatesDir"]);
			$this->smarty->setCompileDir($config["smarty"]["compileDir"]);
			$this->smarty->setConfigDir($config["smarty"]["configDir"]);
			$this->smarty->setCacheDir($config["smarty"]["cacheDir"]);
			$this->smarty->caching = $config["smarty"]["caching"];
			$this->smarty->cache_lifetime = $config["smarty"]["cacheLifeTime"];
			$this->smarty->left_delimiter = $config["smarty"]["leftDelimiter"];
			$this->smarty->right_delimiter = $config["smarty"]["rightDelimiter"];
			$this->smarty->assign("ROOT",ROOT);
			$this->smarty->assign("APP",APP);
			
			if(method_exists($this,"_initialize"))
			{
				//相当于子类的构造
				$this->_initialize();
			}
		}
		//系统提示信息
		public function success($message,$jumpUrl)
		{
			if(INDEX_NAME == "admin.php")
			{
				include 'application/admin/configs/config.php';
			}
			else
			{
				include 'application/default/configs/config.php';
			}
			
			//临时改变模板目录
			$this->smarty->setTemplateDir($config["web"]["success"]);
			//向success页面传值
			$this->assign("message",$message);
			$this->assign("jumpUrl",$jumpUrl);
			//显示success页面
			$this->display("success.html");
		}
		//重定向
		public function redirect($url)
		{
			header("location:{$url}");
		}
		//显示指定的html页面
		public function display($tpl)
		{
			$this->smarty->display($tpl);
		}
		//向html页面传递数据
		public function assign($k,$v)
		{
			$this->smarty->assign($k,$v);
		}
	}
?>
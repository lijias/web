<?php 
	//通过模型名,返回该模型的对象
	function D($modelName)
	{
		$modelName .= "Model";
		include_once 'application/model/'.$modelName.'.php';
		$model = new $modelName();
		return $model;
	}
	//通过表名,快速获得一个模型对象
	function M($tableName)
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
			include_once "library/smarty/Smarty.class.php";
			$this->smarty = new Smarty();
			$this->smarty->setTemplateDir("application/view");
			$this->smarty->setCompileDir("application/runtime/templates_c");
			$this->smarty->setConfigDir("application/configs");
			$this->smarty->setCacheDir("application/runtime/cache");
			$this->smarty->caching = false;
			$this->smarty->cache_lifetime = 3600;
			$this->smarty->left_delimiter = "{";
			$this->smarty->right_delimiter = "}";
			$this->smarty->assign("ROOT",ROOT);
			$this->smarty->assign("APP",APP);
		}
		//系统提示信息
		public function success($message,$jumpUrl)
		{
			//临时改变模板目录
			$this->smarty->setTemplateDir("application/core");
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
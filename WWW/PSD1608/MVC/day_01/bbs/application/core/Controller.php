<?php 
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
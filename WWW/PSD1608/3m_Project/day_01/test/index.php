<?php 
	header("content-type:text/html;charset=utf-8");
	
	class Person
	{
		public $userName = "张三";
		
		//防止实例化
		private function __construct()
		{}
		//防止克隆对象
		private function __clone()
		{}
		//通过单例，获得该类的对象
		public static function getInstance()
		{
			static $obj = NULL;
			if($obj == NULL)
			{
				$obj = new Person();
			}
			return $obj;
		}
		public function show()
		{
			echo "用户名为：{$this->userName}<br><br>";
		}
	}

	$p1 = Person::getInstance();
	$p1->userName = "田七";
	$p1->show();
	
	$p2 = Person::getInstance();
	$p2->show();
	
	
	
	
	
	
	
	
	
	
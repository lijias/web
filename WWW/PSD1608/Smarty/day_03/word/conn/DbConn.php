<?php 
	//数据库封装类
	class DbConn
	{
		private $conn = NULL;//连接对象
		private $rs = NULL;//结果集对象
		
		//连接数据库(私有的构造，防止实例化)
		private function __construct()
		{
			$this->conn = mysql_connect("localhost","root","root");
			mysql_query("set names utf8");
			mysql_select_db("words");
		}
		//防止克隆对象
		private function __clone()
		{}
		//通过单例，获得该类的对象
		public static function getInstance()
		{
			static $obj = NULL;
			if($obj == NULL)
			{
				$obj = new DbConn();
			}
			return $obj;
		}
		//查询多条记录，返回：二维数组
		public function queryAll($sql)
		{
			$result = array();//存储所有记录
			$this->rs = mysql_query($sql);
			while($row = mysql_fetch_array($this->rs))
			{
				$result[] = $row;
			}
			return $result;
		}
		//查询一条记录，返回：一维数组
		public function queryOne($sql)
		{
			$result = NULL;//存储一条记录
			$this->rs = mysql_query($sql);
			if($row = mysql_fetch_array($this->rs))
			{
				$result = $row;
			}
			return $result;
		}
		//执行insert、update、delete语句，返回：受影响的行数
		public function exec($sql)
		{
			mysql_query($sql);
			$row = mysql_affected_rows($this->conn);
			return $row;
		}
		//释放结果集
		public function freeResult()
		{
			mysql_free_result($this->rs);
		}
		//关闭数据库
		public function close()
		{
			mysql_close($this->conn);
		}
	}
?>











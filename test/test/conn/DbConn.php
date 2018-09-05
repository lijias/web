<?php 
	//数据库封装类
	class DbConn
	{
		private $conn = NULL;//连接对象
		private $rs = NULL;//结果集对象
		
		//连接数据库(私有的构造，防止实例化)
		private function __construct()
		{
			$dbms='mysql';     //数据库类型
			$host='localhost'; //数据库主机名
			$dbName='bold';    //使用的数据库
			$user='root';      //数据库连接用户名
			$pass='root';          //对应的密码
			$dsn="$dbms:host=$host;dbname=$dbName";
			try {
				$this->conn = new PDO($dsn, $user, $pass); //初始化一个PDO对象
				$this->conn->query('set names utf8;');
			} catch (PDOException $e) {
				die ("Error!: " . $e->getMessage() . "<br/>");
			}
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
			$this->rs = $this->conn->query($sql);
			$row = $this->rs->fetchAll(PDO::FETCH_ASSOC);
			return $row;
		}
		//查询一条记录，返回：一维数组
		public function queryOne($sql)
		{
			$result = NULL;//存储一条记录
			$this->rs = $this->conn->query($sql);
			$row = $this->rs->fetch(PDO::FETCH_ASSOC);
			return $row;
		}
		//执行insert、update、delete语句，返回：受影响的行数
		public function exec($sql)
		{
			$row = $this->conn->exec($sql);
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
			$this->conn = null;
		}
	}
?>











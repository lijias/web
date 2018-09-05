<?php 
	include_once "application/core/DbConn.php";
	
	//所有模型的父类
	class Model
	{
		public $tableName = NULL;//表名
		public $field = "*";//字段
		public $where = NULL;//条件
		public $order = NULL;//排序
		public $limit = NULL;//分页
		public $prefix = PREFIX;//表前缀

		//设置查询字段
		public function field($field)
		{
			$this->field = $field;
			return $this;
		}
		//设置where条件
		public function where($where)
		{
			$this->where = $where;
			return $this;
		}
		//设置排序
		public function order($order)
		{
			$this->order = $order;
			return $this;
		}
		public function limit($limit)
		{
			$this->limit = $limit;
			return $this;
		}
		//查询多条记录，返回：二维数组
		public function select()
		{
			$sql = "select {$this->field} from {$this->prefix}{$this->tableName}";
			if($this->where != NULL)
			{
				$sql .= " where {$this->where}";
			}
			if($this->order != NULL)
			{
				$sql .= " order by {$this->order}";
			}
			if($this->limit != NULL)
			{
				$sql .= " limit {$this->limit}";
			}

			$conn = DbConn::getInstance();
			$result = $conn->queryAll($sql);
			return $result;
		}
		
		//查询一条记录，返回：一维数组
		public function find()
		{
			$sql = "select {$this->field} from {$this->prefix}{$this->tableName}";
			if($this->where != NULL)
			{
				$sql .= " where {$this->where}";
			}
			
			$conn = DbConn::getInstance();
			$result = $conn->queryOne($sql);
			return $result;
		}
		
		//删除记录，返回：受影响的行数
		public function delete()
		{
			$sql = "delete from {$this->prefix}{$this->tableName}";
			if($this->where != NULL)
			{
				$sql .= " where {$this->where}";
			}
			
			$conn = DbConn::getInstance();
			$result = $conn->exec($sql);
			return $result;
		}
		
		//添加记录，返回：受影响的行数
		public function insert($data)
		{
			$key = "";//所有字段名
			$value = "";//所有字段值
			foreach ($data as $k=>$v)
			{
				$key .= "{$k},";//拼字段
				$value .= "'{$v}',";//拼字段值
			}
			$key = rtrim($key,",");
			$value = rtrim($value,",");
			$sql = "insert into {$this->prefix}{$this->tableName}({$key})values({$value})";

			$conn = DbConn::getInstance();
			$result = $conn->exec($sql);
			return $result;
		}
		
		//修改记录，返回：受影响的行数
		public function update($data)
		{
			$str = "";
			foreach ($data as $k=>$v)
			{
				$str .= "{$k}='{$v}',";
			}
			$str = rtrim($str,",");
			$sql = "update {$this->prefix}{$this->tableName} set {$str}";
			if($this->where != NULL)
			{
				$sql .= " where {$this->where}";
			}
			
			$conn = DbConn::getInstance();
			$result = $conn->exec($sql);
			return $result;
		}
		
		//count查询，返回：整数
		public function count()
		{}
		
		//sum查询，返回：整数
		public function sum()
		{}
		
		//avg查询，返回：整数
		public function avg()
		{}
		
		//max查询，返回：整数
		public function max()
		{}
		
		//min查询，返回：整数
		public function min()
		{}
		
		//多表查询
		public function join()
		{}
		
		//执行select语句，返回：二维数组
		public function queryAll($sql)
		{}
		
		//执行select语句，返回：一维数组
		public function queryOne($sql)
		{}
		
		//执行insert、update、delete语句，返回：受影响的行数
		public function exec($sql)
		{}
	}
?>










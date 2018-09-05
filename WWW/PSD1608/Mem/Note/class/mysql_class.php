<?php
class mysql{
	private $conn;//存放连接数据库的返回值
	public $reSql;//存放执行sql语句时的返回值
	public $affectedNum;//存放updeate delete insert 语句影响的数据条数
	private $selectResult;
	public $countNum;//执行select语句是影响的数据条数
	public function __construct($host,$user,$pass,$db,$char){
		$link=mysql_connect($host,$user,$pass) or die("数据库连接失败！".mysql_error());
		$this->conn=$link;
		mysql_query("set names ".$char);
		mysql_select_db($db,$link);
		//检查传表单或者通过url地址传过来的值是否合法
		if(isset($_GET)){
			foreach($_GET as $key => $value){
				if(preg_match("/select|insert|update|delete|union|join|limit|load_file/",$value,$arr)){
			header("location:".DOMAIN."tishi.html");
			exit();	
				}
			}
		}
	}
	public function query($sql){
		$re=mysql_query($sql,$this->conn);
		if(is_resource($re)){//执行的是select语句
			$this->selectResult=$re;
			$arr2=array();
			while($re1=mysql_fetch_assoc($re)){
				$arr2[]=$re1;
			}
			$this->reSql=$arr2;
		}else{//执行的是insert update delete 语句
			$this->reSql=$re;
		}
		return $this->reSql;
	}
	public function numRows(){
		$num=mysql_num_rows($this->selectResult);
		$this->countNum=$num;
	}
	public function affectedRows(){
		$num=mysql_affected_rows();
		$this->affectedNum=$num;
	}
	public function __destruct(){
		mysql_close();	
	}
}
$mysqlOb=new mysql($mysql_host,$mysql_username,$mysql_password,$mysql_db,$mysql_char);
?>
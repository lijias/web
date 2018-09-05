<?php
header('Content-Type:text/html;charset=utf-8');
class db{
	public $fuwuqi;
	public $username;
	public $password;
	public $database;
	
	function __construct($fuwuqi,$username,$password,$database){
		$this->fuwuqi=$fuwuqi;
		$this->username=$username;
		$this->password=$password;
		$this->database=$database;
		
		$this->connect();
		$this->dbselect();
	}
	
	function connect(){
		mysql_connect($this->fuwuqi,$this->username,$this->password);
	}
	function dbselect(){
		mysql_select_db($this->database);
	}
	function insert($tbname,$arr){
		$arr_key=array_keys($arr);
		$k=implode(",", $arr_key);
		$v=implode("','", $arr);
		//echo $v; exit();
		$query="insert $tbname ($k) value ('$v')";
		//echo $query; exit();
		$result=mysql_query($query);
		return $result;
	}
	function delet($tbname,$where=""){
		$query="delete from $tbname ";
		if ($where!="") {
			$query=$query." where ".$where;
		}
		//echo $query; exit();
		$result=mysql_query($query);
		return $result;
	}
	function update($tbname,$data,$where=""){
		$p="";
        foreach ($data as $k=>$v){
        	if ($p=="") {
        	$p.=$k."='".$v."'";;
        	}else{
        	$p.=",".$k."='".$v."'";
        	}
        }       
        //echo $p; exit();
		$query="update $tbname set $p";
		if ($where!="") {
			$query=$query." where ".$where;
		}
		//echo $query; exit();
		$result=mysql_query($query);
		return $result;
	}
	function select($tbname,$cxnr,$where="",$limit=""){
		$query="select $cxnr from $tbname";
		if ($where!="") {
			$query=$query." where ".$where;
		}
		if ($limit!="") {
			$query=$query." limit ".$limit;
		}
		//echo $query; exit();
		$resule=mysql_query($query);
		return $resule;
	}
}
$db=new db("localhost", "root", "root", "cms2");
$arr=array("username"=>"ccs","password"=>"215813482");
//var_dump($arr);exit;
/*增
$result=$db->insert("cms_user",$arr);
   删
$result=$db->delet("cms_user","id=8");
   改
$result=$db->update("cms_user",$arr,"id=9");
*/
$result=$db->select("cms_user","id,username,password","","5");
while ($row=mysql_fetch_assoc($result)){
	 echo "id:".$row['id']."<br/>";
	 echo "username:".$row['username']."<br/>";
	 echo "password:".$row['password']."<br/>";
}
//var_dump($result);exit;
/*if($result){
	echo 1;
}else{
	echo 2;
}*/

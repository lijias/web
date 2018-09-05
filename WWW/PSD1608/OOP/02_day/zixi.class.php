<?php
header('Content-Type:text/html;charset=utf-8');
class zixi{
    public $fuwuqi;
    public $username;
    public $password;
    public $dbname;
    
    function __construct($fuwuqi,$username,$password,$dbname){
     $this->fuwuqi=$fuwuqi;
     $this->username=$username;
     $this->password=$password;
     $this->dbname=$dbname;
     
     $this->connect();
     $this->selectdb();
    }
    
	function connect(){
	mysql_connect($this->fuwuqi,$this->username,$this->password);
	}
	function selectdb(){
	mysql_select_db($this->dbname);
	}
	//增
	function insert($tbname,$data){
	$data_key=array_keys($data);
	$k=implode(",",$data_key);
	$v=implode("','",$data);
	$query="insert $tbname
	              ($k)
	               value
	              ('".$v."')";
	//echo $query;exit;
	$result=mysql_query($query);
	return $result;
	}
	//删
	function delete($tbname,$where=""){
	$query="delete from $tbname"; 
	        if ($where!=""){
	    $query=$query." where ".$where;    
	         }
	        // echo $query;exit;
	$result=mysql_query($query);
	return $result;
	}
	//改
	function update($tbname,$data,$where=""){
	$set="";
	foreach ($data as $k=>$v){
	if ($set!=""){
	 $set.=",";
	}
	$set.=$k."='".$v."'";
	}
	$query="update $tbname set $set";
	if ($where!=""){
	$query=$query." where ".$where;
	}
	//echo $query;exit;
	$result=mysql_query($query);
	return $result;
	}
	//查
	function select($tbname,$data,$where="",$limit=""){
	$query="select $data from $tbname";
	if ($where!=""){
	$query=$query." where ".$where;
	}
	if ($limit!=""){
	$query=$query." limit ".$limit;
	}
	//echo $query;exit;
	$result=mysql_query($query);
	return $result;
	}
}
$zixi=new zixi("localhost","root","root","cms2");
//增
/*
$data=array("username"=>"jt","password"=>"123");
$result=$zixi->insert("cms_user",$data);
if ($result){
 echo "c";
}else{
 echo "s";
}*/
//删
/*$result=$zixi->delete("cms_user","id=4");
if ($result){
 echo "c";
}else{
 echo "s";
}*/
//该
//update($tbname,$data,$where="")
/*$data=array("username"=>"jit","password"=>"123");
$result=$zixi->update("cms_user",$data,"id=5");
if ($result){
 echo "c";
}else{
 echo "s";
}*/
//查
//select($tbname,$data,$where="",$limit="")
$result=$zixi->select("cms_user", "id,username,password","","5");
while ($row=mysql_fetch_assoc($result)){
 echo "id=".$row['id']."<br/>";
 echo "username=".$row['username']."<br/>";
 echo "password=".$row['password']."<br/>";
}









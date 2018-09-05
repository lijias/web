<?php
header('Content-Type:text/html;charset=utf-8');
class DB{
 public $server;//数据库
 public $username;//用户名
 public $password;//密码
 public $dbname;//默认数据库
 //成员赋初值
 function __construct($server,$username,$password,$dbname){
    //成员属性赋初值
 	$this->server=$server;
    $this->username=$username;
    $this->password=$password;
    $this->dbname=$dbname;
    //读取连接数据库
    $this->Connect();
    //读取打开默认数据库
    $this->Selectdb();
 }
 //连接数据库
 function Connect(){
 $link=mysql_connect($this->server,$this->username,$this->password);
 }
 //打开默认数据库
 function Selectdb(){
 mysql_select_db($this->dbname);
 }
 //添加数据
 function Insert($tbname,$data){
 	/*$data 是插入数据表的数据
		 * 数据应该是字段和值的对应关系
		 *  username ="rose"
		 *  password ="123"
		 *  $data = array("username"="tom",
		 *                "password"="123");
		 *  处理$data，将$data进行拆分  
		 *  username,password 
		 *  值：
		 *  $values = 'tom','123'         
		 */
 	$data_key=array_keys($data);
 	//得到字段名称的字符串形式
 	$fields=implode(",",$data_key);
 	$values=implode("','",$data);
 	// $values = tom','123 
 $query="insert $tbname
         ($fields)
         value
         ('".$values."')";
 $result=mysql_query($query);
 return $result;
 }
 function delete($tbname,$where="") {
 	$query="delete from $tbname";
 	if ($where!=""){
 	$query=$query." where ".$where;
 	}
 	//var_dump($query);
 	$result=mysql_query($query);
 	return $result;
 }
 //更新
 function update($tbname,$data,$where=""){
   $sets="";
   foreach ($data as $k=>$v){
   if ($sets!=""){
     $sets.=",";
   }
   $sets.=$k."='".$v."'";
   }
   $query="update ".$tbname." set ".$sets;
   if ($where!=""){
   $query=$query." where ".$where;
   }
   //echo $query;exit;
   $result=mysql_query($query);
   return $result;
 }
 //查
 function select($tbname,$fields,$where="",$limit=""){
 $query="select $fields from $tbname";
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
 function __destruct(){
 mysql_close();
 }
}
//实例化
//$db=new DB("localhost", "root", "root", "cms2");

//读取查找
//select($tbname,$fields,$where="",$limit="")
/*$result=$db->select("cms_user", "id,username,password","","3");
while ($row=mysql_fetch_assoc($result)){
 echo "id=".$row['id']."<br/>";
 echo "username=".$row['username']."<br/>";
 echo "password=".$row['password']."<br/>";
}*/

//读取insert
//Insert($tbname,$data)
/*$data=array("username"=>"yolo","password"=>"12345678");
$result=$db->Insert("cms_user",$data);
if ($result){
  echo "成功";
}else{
  echo "失败";
}*/

//读取delete
//delete($tbname,$where="")
/*$result=$db->delete("cms_user","id=1");
if ($result){
  echo "成功";
}else{
  echo "失败";
}*/

//读取update
//update($tbname,$data,$where="")
/*$data=array('username'=>'julice','password'=>'456');
$result=$db->update("cms_user", $data,"id=2");
if ($result){
  echo "成功";
}else{
  echo "失败";
}*/













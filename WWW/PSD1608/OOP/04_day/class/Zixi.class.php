<?php
header('Content-Type:text/html;charset=utf-8');
class Zixi{
public $total;
public $page_size;
public $total_page;
public $dangqianye;

function __construct($total,$page_size){
$this->total=$total;
$this->page_size=$page_size;
$this->total_page=$this->Gettotal_page();
$this->dangqianye=$this->Getdangqianye();
}
function Out() {
		echo "共".$this->total_page."页&nbsp;当前第".$this->dangqianye."页&nbsp;".$this->flist().$this->lists().$this->llist();
	}
//总页数
private function Gettotal_page(){
$total_page=ceil($this->total/$this->page_size);
return $total_page;
}
//当前页
private function Getdangqianye(){
$dangqianye=isset($_GET['p'])?$_GET['p']:1;
if ($dangqianye<1){
$dangqianye=1;
}else if ($dangqianye>$this->total_page&&$this->total_page!=0) {
$dangqianye=$this->total_page;
}
return $dangqianye;
}
//首页 上一页
private function flist(){
$list="";
$prev=$this->dangqianye-1;
if ($prev>=1){
$list= "&nbsp;<a href='?p=1'>首页</a>&nbsp;<a href='?p=".$prev."'>上一页</a>&nbsp;";
}
return $list;
}
//123456789
private function lists(){
$list="";
$num=3;
for ($i=$num;$i>=1;$i--){
$n=$this->dangqianye-$i;
if ($n>=1){
$list.="&nbsp;<a href='?p=".$n."'>$n</a>&nbsp;";
}
}
$list.="&nbsp;".$this->dangqianye."&nbsp;";
for ($i=1;$i<=$num;$i++){
$n=$this->dangqianye+$i;
if ($n<=$this->total_page){
$list.="&nbsp;<a href='".$n."'>$n</a>&nbsp;";
}
}
return $list;
}
//下一页 尾页
private function llist(){
$list="";
$prev=$this->dangqianye+1;
if ($prev<=$this->total_page){
$list="&nbsp;<a href='?p=".$prev."'>下一页</a>&nbsp;<a href='?p=".$this->total_page."'>尾页</a>&nbsp;";
}
return $list;
}
}
//实例化
/*$total=52;
$page_size=5;
$zixi=new Zixi($total,$page_size);
$zixi->Out();*/
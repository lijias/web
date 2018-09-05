<?php
header('Content-Type:text/html;charset=utf-8');
class Pages{
public $total;//总记录数
public $page_size;//每页显示记录数
public $totalpage;//总页数
public $cur_page;//当前页数

function __construct($total,$page_size){
$this->total=$total;//总记录数赋初值
$this->page_size=$page_size;//每页显示数赋初值
$this->totalpage=$this->Gettotal_page();//总页数赋值
$this->cur_page=$this->Getcur_page();//当前页数赋值
}
//输出程序
function Out(){
echo "共".$this->totalpage."页&nbsp;当前第".$this->cur_page."页&nbsp;".$this->flist().$this->lists().$this->llist();
}
//总页数
private function Gettotal_page(){
 $total_page=ceil($this->total/$this->page_size);
 return $total_page;
}
//当前页
private function Getcur_page(){
$cur_page=isset($_GET['p'])?$_GET['p']:1;
if ($cur_page<1){
 $cur_page=1;
}else if ($cur_page>$this->totalpage && $this->totalpage!=0){
 $cur_page=$this->totalpage;
}
return $cur_page;
}
//首页 上一页
private function flist(){
$list="";
$shangyiye=$this->cur_page-1;
if ($shangyiye>=1){
$list="<a href='?p=1'>首页</a>&nbsp;<a href='?p=".$shangyiye."'>上一页</a>";
}
return $list;
}
//1234567
private function lists (){
$num=3;
$list="";
for ($i=$num;$i>=1;$i--){
$n=$this->cur_page-$i;
if ($n>=1){
$list.="&nbsp;<a href='?p=".$n."'>$n</a>&nbsp;";
}
}
$list.="&nbsp;<a>$this->cur_page</a>&nbsp;";
for ($i=1;$i<=$num;$i++){
$n=$this->cur_page+$i;
if ($n<=$this->totalpage){
$list.="&nbsp;<a href='?p=".$n."'>$n</a>&nbsp;";
}
}
return "&nbsp;".$list."&nbsp;";
}
//下一页 尾页
private function llist(){
$list="";
$xiayiye=$this->cur_page+1;
if ($xiayiye<=$this->totalpage){
$list="<a href='?p=".$xiayiye."'>下一页</a>&nbsp;<a href='?p=".$this->totalpage."'>尾页</a>";
}
return $list;
}
}
/*$total=52;
$page_size=5;
$pages=new Pages($total, $page_size);
$pages->Out();*/
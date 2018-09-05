<?php
namespace Home\Controller;
use Think\Controller;
use Think\Page;
 
class Addcontroller extends Controller
{
	function index()
	{
		if ($_SESSION==NULL) 
		{
			$this->redirect("Index/index",null,1,"非法登陆");
		}
		$totalRows = M("info")->/*where($where)->*/count();
		$page = new Page($totalRows,3);
		
		//$where = "1 AND content LIKE '%10%'";
		
		$info = M("info")->/*where($where)->*/join("inner join admin as b on aid=b.id")->limit($page->firstRow,$page->listRows)->order("dateandtime desc")->select();
		
		$this->assign("pageList",$page->show());
		$this->assign("info",$info);
		$this->display();
	}
	function add()
	{		
		$name = $_POST['name'];
		$content = $_POST['content'];
		$value = session('msg');
		$aid = $value[0]['id'];
		$result = M()->execute("insert info (aid,name,content) value ({$aid},'{$name}','{$content}')");	
		if ($result>0)
		{
			echo 1;
		}
		else 
		{
			echo 2;
		}
	}
	/*function del()
	{
      M("info")->delete("26,27,28,29,30,31,32,33,34,35,36,37,38,39,40");
      $this->redirect("Add/index");
	}*/
}
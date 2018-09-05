<?php
namespace User\Controller;
class AddrController extends BaseController
{
	public function showall()
	{	
		$userid=$_COOKIE['userid'];
		$addinfo=M('addrinfo');
		$addinfoArr=$addinfo->where("userid=$userid")->select();
		//$sql = $addinfo->getLastSql();
		//var_dump($sql);exit;
		$this->assign('addinfoArr',$addinfoArr);
		$this->display();
	}
	
	public function add()
	{
		$data=$_POST;
		$data['userid']=$_COOKIE['userid'];
		$addinfo=M('addrinfo');
		$add=$addinfo->data($data)->add();
		if ($add) 
		{
			$this->success("新增信息成功",U("user/addr/showall"));
		}
		else 
		{
			$this->error("新增信息失败");
		}
	}
	
	public function update()
	{
		$data=$_POST;
		$data['userid']=$_COOKIE['userid'];
		unset($data['ref']);
		$updteinfo = M('addrinfo');		
		$update=$updteinfo->data($data)->save();
		if($update)
		{
			$this->success("修改信息成功",U("user/addr/showall"));
		}
		else
		{
			$this->error("修改信息失败");
		}
	}
	
	public function del()
	{
		$id=I('id');
		$delinfo = M('addrinfo');
		$del=$delinfo->where("id=$id")->delete();
		if($del)
		{
			$this->success("删除信息成功",U("user/addr/showall"));
		}
		else
		{
			$this->error("删除信息失败");
		}
	}
}
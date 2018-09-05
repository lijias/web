<?php
namespace Admin\Controller;
use Think\Controller;
class TypeController extends Controller
{
	//添加分类
    public function add()
    {	
    	if (IS_POST) 
    	{
    		$add=M("type")->data($_POST)->add();
    		if ($add) 
    		{
    			$this->success("添加成功",U("oper"));
    		}
    		else 
    		{
    			$this->error("添加失败");
    		}
    		return;
    	}
    	$str=getTypes();
		$this->assign('str',$str);
  		$this->display();
    }
    //分类管理页
    public function oper()
    {
    	$arr=getTypeByArr();
    	$this->assign('arr',$arr);
    	$this->display();
    }
    //删除分类
    public function delete()
    {
    	$id=I("id");
    	$delete=M("type")->where("id=$id")->data(array('state'=>9))->save();
    	if ($delete) 
    	{
    		$this->success("删除成功");
    	}
    	else 
    	{
    		$this->error("删除失败");
    	}
    }
    //修改分类
    public function update()
    {
    	$id=I("id");
    	$tname=I("tname");
    	$fid=I("fid");
    	if (IS_POST)
    	{   		 		
    		$update=M("type")->where("id=$id")->save($_POST);
    		if ($update)
    		{
    			$this->success("修改成功",U("oper"));
    		}
    		else
    		{
    			$this->error("修改失败");
    		}
    		return;
    	}
    	$find=M("type")->where("id=$id")->find();
    	$str=getTypes();
    	$this->assign('str',$str);
    	$this->assign('find',$find);
    	$this->display();
    }
}
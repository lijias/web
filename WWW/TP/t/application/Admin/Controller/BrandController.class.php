<?php
namespace Admin\Controller;
use Think\Controller;
class BrandController extends Controller
{
	//添加品牌
    public function add()
    {	
    	if (IS_POST) 
    	{
    		$upload = new \Think\Upload();// 实例化上传类
    		$upload->maxSize = 3145728 ;// 设置附件上传大小
    		$upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
    		$upload->autoSub=false;
    		$upload->savePath = 'brand/'; // 设置附件上传目录
    		$upload->rootPath=  './Public/'; //保存根路径
    		$info = $upload->upload();
    		if(!$info) 
    		{	// 上传错误提示错误信息
    				$this->error($upload->getError());
    		}
    		else
    		{	// 上传成功 获取上传文件信息
    				$_POST['imagename']=$info["upload"]["savename"];
    		}
    		//var_dump($_POST);die;
    		$add=M("brand")->data($_POST)->add();
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
    	$arr=M("type")->where("fid=0")->select();
    	$this->assign('arr',$arr);
  		$this->display();
    }
    //分类管理页
    public function oper()
    {
    	$arr=M("brand")->select();
    	$this->assign('arr',$arr);
    	$this->display();
    }
    //删除分类
    public function delete()
    {
    	$id=I("id");
    	$delete=M("brand")->where("id=$id")->data(array('state'=>9))->save();
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
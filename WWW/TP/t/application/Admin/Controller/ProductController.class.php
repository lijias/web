<?php
namespace Admin\Controller;

class ProductController extends BaseController
{
	//添加产品
 public function add()
    {	
    	if (IS_POST) 
    	{
    		$product=M("Product");
    		$id=$product->data($_POST)->add();
    		if ($id) 
    		{
    			$upload = new \Think\Upload();// 实例化上传类
    			$upload->maxSize = 3145728 ;// 设置附件上传大小
    			$upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
    			$upload->autoSub=false;
    			$upload->savePath = 'product/'; // 设置附件上传目录
    			$upload->rootPath=  './Public/'; //保存根路径
    			$upload->saveName=array('uniqid',array(mt_rand(1000, 9999),true));
    			$info = $upload->upload();
    			if(!$info)
    			{	// 上传错误提示错误信息
    			$this->error($upload->getError());
    			}
    			else
    			{	// 上传成功 获取上传文件信息
    				$productimage=M("productimage");
	    			foreach ($info as $v)
	    			{
	    				$imagename=$v['savename'];
	    				$productimage->data(array('imagename'=>$imagename,'productid'=>$id))->add();		
	    			}
    			}
    			$this->success("添加成功",U("oper"));
    		}		    		
    		return;
    	}    	
    	//查询所有分类	
    	$typestr=getTypeByProduct();
    	$this->assign('typestr',$typestr);
    	//查询所有品牌
    	$brandArr=M("brand")->select();
    	$this->assign('brandArr',$brandArr);
  		$this->display();
    }
    public function getbrand()
    {
    	$typeid=I("typeid");
    	$arr=M("Brand")->where("typeid=$typeid")->select();
    	echo json_encode($arr);
    }
    
    //分类管理页
    public function oper()
    {
    	$count=M("product")->count();
    	$pagesize=5;
    	$page=new \Think\Page($count,$pagesize);
    	$start=$page->firstRow;
    	$arr=M("product")->where('state<9')->limit($start,$pagesize)->select();
    	$show=$page->show();
    	$image=M("productimage");
    	foreach ($arr as $k=>$v)
    	{
    		$imageArr=$image->where('productid='.$v['id'])->find();
    		$arr[$k]['imagename']=$imageArr['imagename'];
    	} 
    	$this->assign("page",$show);
    	$this->assign('arr',$arr);
    	$this->display();
    }
    //删除分类
    public function delete()
    {
    	$id=I("id");
    	$delete=M("product")->where("id=$id")->data(array('state'=>9))->save();
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
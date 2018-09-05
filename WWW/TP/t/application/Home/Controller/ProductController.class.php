<?php
namespace Home\Controller;

class ProductController extends BaseController
{
    public function lst()
    {   	
    	$tid = $_GET['tid'];
    	$where="";	
    	if (preg_match("/^\d+$/",$tid)) 
    	{
    		$where = "state<9 and typestr like '>$tid>%'";
    	}
    	else if (preg_match("/^(>\d+)+>$/",$tid))
    	{
    		$where = "state<9 and typestr like '{$tid}%'";
    		$typestr=trim($tid,">");
    		$arrStr=explode(">", $typestr);
    		$navStr="";
    		$type=M("type");
    		$getStr="";
    		foreach ($arrStr as $k=>$v)
    		{
    			$vid=$v;
    			$tArr=$type->where("id=$vid")->find();
    			$getStr.=">{$tArr['id']}";
    			$navStr.="<a href=\"".U("Product/lst",array('tid'=>$getStr.">"))."\">{$tArr['tname']}</a> <code>&gt;</code>";
    		}
    		$this->assign("navStr",$navStr);
    	}
    	$count=M("product")->where($where)->count();
    	$pagesize=3;
    	$page=new \Think\Page($count,$pagesize);
    	$show=$page->show();
    	$arr=M("product")->where($where)->limit($page->firstRow,$pagesize)->select();
    	$image=M("productimage");
    	foreach ($arr as $k=>$v)
    	{
    		$id=$v['id'];
    		$imageArr=$image->where("productid=$id")->find();
    		$arr[$k]['imagename']=$imageArr['imagename'];
    	}
    	$type=M("type")->where("id=$tid")->find();
    	$this->assign("type",$type);
    	$this->assign("count",$count);
    	$this->assign("page",$show);
    	$this->assign("arr",$arr);
    	$this->display();
    }
    public function detail()
    {
    	$product=M("product");
    	$id=I("id");
    	$pro=$product->where("id=$id")->find();
    	$image=M("productimage");
    	foreach ($pro as $k=>$v)
    	{
    		$arr=$image->where("productid=$id")->find();    		
    		$pro["imagename"]=$arr["imagename"];
    	}
    	$typestr=$pro["typestr"];
    	$typestr=trim($typestr,">");
    	$arrStr=explode(">", $typestr);
    	$navStr="";
    	$type=M("type");
    	$getStr="";
    	foreach ($arrStr as $k=>$v)
    	{
    		$vid=$v;
    		$tArr=$type->where("id=$vid")->find();
    		$getStr.=">{$tArr['id']}";
    		$navStr.="<a href=\"".U("Product/lst",array('tid'=>$getStr.">"))."\">{$tArr['tname']}</a> <code>&gt;</code>";
    	}
    	$this->assign("navStr",$navStr);
    	$this->assign("pro",$pro);
    	
    	$brandid=$pro['brandid'];
		$brand=M("brand");
		$b=$brand->where("id=$brandid")->find();
		$brandname=$b["bname"];
		$this->assign("brandname",$brandname);
		
		
		$imageArr=$image->where("productid=$id")->select();
		$this->assign("imageArr",$imageArr);
    	$this->display();
    }
}
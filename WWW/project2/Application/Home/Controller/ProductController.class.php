<?php
namespace Home\Controller;
class ProductController extends BaseController{
	function lister(){
		//接收分类id
		$tid=$_GET['tid'];
		$where="";
		if(preg_match("/^\d+$/",$tid)){
			$where = "state<9 and typestr like '>$tid>%'";
		}else if(preg_match("/^(>\d+)+>$/",$tid)){
			$where = "state<9 and typestr like '{$tid}%'";
		}
		//获取分类下产品总条数
		$product=M('Product');
		$num=$product->where($where)->count();
		//每页显示的条数
		$pageSize=10;
		//实例化分页类  Page()
		$page=new \Think\Page($num,$pageSize);
		//获取开始位置
		$start=$page->firstRow;
		//获取当前页的数据
		$arr=$product->where($where)->limit("$start,$pageSize")->select();
		$image=M("Productimage");
		foreach($arr as $k=>$v){
			$id=$v['id'];//产品id
			//根据产品id，读一个图片
			$imageArr=$image->where("productid=$id")->find();
			$arr[$k]['imagename']=$imageArr['imagename'];
		}
		//获取分页的结果
		$pageStr=$page->show();
		$this->assign('num',$num);
		$this->assign('arr',$arr);
		$this->assign('pageStr',$pageStr);
		
		$this->display();
	}
	function detail(){
		$curUrl=$_SERVER['REQUEST_URI'];
		$curUrl=str_replace("/", "@", $curUrl);
		$this->assign('curUrl',$curUrl);
		//根据id，获取产品记录
		$id=$_GET['id'];
		$product=M("Product");
		$arr=$product->join("brand b on p.brandid=b.id")
					 ->alias("p")
					 ->field("p.*,b.bname")
					 ->where("p.id=$id")
					 ->find();
		$this->assign('arr',$arr);
		//typestr
		$typestr=trim($arr['typestr'],">");
		$typeArr=explode(">",$typestr);
		$navStr="";
		$type=M('Type');
		$getStr="";
		foreach($typeArr as $v){
			$tArr=$type->where("id={$v['id']}")->find();
			$getStr.=">{$tArr['id']}";
			$navStr.="<a href=\"".U("Product/lister",array('tid'=>$getStr.">"))."\">{$tArr['tname']}</a> <code>&gt;</code>";
		}	
		$this->assign('navStr',$navStr);	
		//获取产品的图片
		$imageArr=M("Productimage")->where("productid=$id")->select();
		$this->assign('imageArr',$imageArr);
		$this->display();
	}
	
	
	
	
	
	
	
	
}
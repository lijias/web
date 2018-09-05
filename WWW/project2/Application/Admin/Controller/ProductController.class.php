<?php
namespace Admin\Controller;
class ProductController extends BaseController{
	function add(){
		$typestr=getTypeByProduct();
		$this->assign('typestr',$typestr);
		//获取所有的品牌信息
		$brand=M("Brand");
		$brandArr=$brand->select();
		$this->assign('brandArr',$brandArr);
		$this->display();
	}
	function save(){
		//产品信息入表
		$product=M("Product");
		$id=$product->data($_POST)->add();
		if($id){
			//上传图片
			$upload=new \Think\Upload();
			//设置
			$upload->mimes=array('image/png','image/gif','image/jpeg');
			$upload->autoSub=false;
			$upload->rootPath="./Public/";
			$upload->savePath="product/";
			$upload->saveName=array('uniqid',array(mt_rand(1000,9999),true));
			//保存图片
			$imageRe=$upload->upload();
			if($imageRe){
				//图片名称写数据库表productimage
				$productimage=M("Productimage");
				foreach($imageRe as $v){
					$imagename=$v['savename'];
					$productimage->data(array('imagename'=>$imagename,'productid'=>$id))->add();
				}
			}
			$this->success("添加成功",U("Admin/Product/oper"));
		}else{
			$this->error("添加失败",U("Admin/Product/add"));
		}
		
	}
	function oper(){
// 		总条数
		$num=M("Product")->where("state<9")->count();
// 		每页显示条数
		$pageSize=3;
// 		实例化分页类
		$page=new \Think\Page($num,$pageSize);
// 		获取开始位置
		$start=$page->firstRow;
// 		获取分页的结果
		$pageStr=$page->show();
// 		获取当前页的数据
		$ob=M('Product');
		$arr=$ob->where("state<9")->limit("$start,$pageSize")
				->order("id desc")
				->select();
		$image=M("Productimage");
		foreach($arr as $k=>$v){
			$imageArr=$image->where("productid={$v['id']}")->find();
			$arr[$k]['imagename']=$imageArr['imagename'];
		}
// 		传值显示
		$this->assign('pageStr',$pageStr);
		$this->assign('arr',$arr);
		$this->display();
		
	}
	function delete(){
		//接收id
		$id=$_GET['id'];
		//修改表 state=9
		M("Product")->where("id=$id")->data(array('state'=>9))->save();
		$this->redirect("Admin/Product/oper");
	}
	function getbrand(){
		$typeid=$_GET['typeid'];//0
		//读typeid下的品牌
		if($typeid==0){
			$arr=M("Brand")->select();
		}else{
			$arr=M("Brand")->where("typeid=$typeid")->select();
		}
		echo json_encode($arr);
	}
	function update(){
		$typestr=getTypeByProduct();
		$this->assign('typestr',$typestr);
		$id=$_GET['id'];
		$product=M("Product");
		$arr=$product->where("id=$id")->find();
		$this->assign('arr',$arr);
		//获取当前的产品图片，传到模板上
		$image=M("Productimage");
		$imageArr=$image->where("productid=$id")->select();
		$this->assign('imageArr',$imageArr);
		$this->display();
	}
	function delimage(){
		$imageId=$_GET['imageId'];
		$imageName=$_GET['imageName'];
		//删除文件，删除表中的图片记录
		unlink("./Public/Product/".$imageName);
		$image=M("Productimage");
		$re=$image->where("id=$imageId")->delete();
		echo $re;
	}
	function usave(){
		$id=(int)$_POST['pid'];
		$referer=$_POST['suibian'];
		unset($_POST['suibian']);
		unset($_POST['pid']);
		//保存图片
		//上传图片
		$upload=new \Think\Upload();
		//设置
		$upload->mimes=array('image/png','image/gif','image/jpeg');
		$upload->autoSub=false;
		$upload->rootPath="./Public/";
		$upload->savePath="product/";
		$upload->saveName=array('uniqid',array(mt_rand(1000,9999),true));
		//保存图片
		$imageRe=$upload->upload();
		if($imageRe){
			//图片名称进表
			$image=M("Productimage");
			foreach($imageRe as $v){
				$imageName=$v['savename'];
				$image->data(array('imagename'=>$imageName,'productid'=>$id))->add();
			}
		}
		//保存产品信息入表
		$product=M("Product");
		$re=$product->data($_POST)->where("id=$id")->save();
		if($re){
			$this->success("修改成功",$referer);
		}else{
			$this->error("修改失败",$referer);
		}
	}
	
	
	
	
	
	
}
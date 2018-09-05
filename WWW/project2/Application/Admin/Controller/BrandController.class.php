<?php
namespace Admin\Controller;
class BrandController extends BaseController{
	function add(){
		//获取一级分类
		$Type=M("Type");
		$arr=$Type->where("fid=0 and state<9")->select();
		//把一级分类传到模板上
		$this->assign('arr',$arr);
		$this->display();
	}
	function save(){
		$imagename="";
		if($_FILES){
			$upload=new \Think\Upload();
			//设置
			$upload->mimes=array('image/png','image/gif','image/jpeg');
			$upload->autoSub=false;
			$upload->rootPath="./Public/";
			$upload->savePath="brand/";
			//保存图片
			$imageRe=$upload->upload();
			$imagename=$imageRe['upload']['savename'];
		}
		//把输入写入数据库表
		$brand=M('Brand');
		$_POST['imagename']=$imagename;
		$re=$brand->data($_POST)->add();
		//提示跳转
		if($re){
			$this->success("添加成功",U("Admin/Brand/oper"));
		}else{
			$this->error("添加失败",U("Admin/Brand/add"));
		}
		
	}
}
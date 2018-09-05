<?php
namespace Admin\Controller;
class TypeController extends BaseController{
	function add(){
		$str=getTypes();
		$this->assign('str',$str);
		$this->display();
	}
	function save(){//保存数据到表
		$type=M("Type");
		$re=$type->data($_POST)->add();
		if($re){
			$this->success("添加成功",U("Admin/Type/oper"));
		}else{
			$this->error("添加失败",U("Admin/Type/add"));
		}
	}
	function oper(){
		$arr=getTypeByArr();
		$this->assign('arr',$arr);
		$this->display();
	}
	
	function update(){
		$id=(int)$_GET['id'];
		//根据id获取当前的分类信息
		$arr=M('Type')->where("id=$id")->find();
		$str=getTypes();
		$this->assign('str',$str);
		$this->assign('arr',$arr);
		$this->display();
	}
	function usave(){
		$id=(int)$_POST['id'];
		$Type=new \Think\Model('Type');
		$Type->where("id=$id")->data($_POST)->save();
		$this->redirect("Admin/Type/oper");
	}
	function delete(){
		$id=(int)$_GET['id'];
		$Type=new \Think\Model('Type');
		$Type->where("id=$id")->data(array('state'=>9))->save();
		$this->redirect("Admin/Type/oper");
	}
	
	
	
	
	
	
}
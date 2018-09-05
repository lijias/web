<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends CommonController
{
    public function index()
    {
    	$article=D("article");
    	$mainres=$article->field('id,title,pic,rizu')->where("cateid=151")->order("id desc")->limit('3')->select();
    	$carres=$article->field('id,title,pic,rizu')->where("cateid=149")->order("id desc")->select();
    	$arres=$article->field('id,title,time')->where("cateid=150")->order("id desc")->limit('3')->select();
    	$this->assign("mianres",$mainres);
    	$this->assign("arres",$arres);
    	$this->assign("carres",$carres);
        $this->display();
    }
}
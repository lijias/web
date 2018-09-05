<?php
namespace Home\Controller;
use Think\Controller;
class CarlistController extends CommonController
{
    public function index()
    {
    	$article = D('article');
    	$cateid=I('cateid');
    	$count = $article->where("cateid=$cateid")->count();
    	$Page = new \Think\Page($count,2);
    	$show = $Page->show();
    	$list = $article->where("cateid=$cateid")->order('time asc')->limit($Page->firstRow.','.$Page->listRows)->select();
    	$this->assign('list',$list);
    	$this->assign('page', $show);
        $this->display();
    }
}
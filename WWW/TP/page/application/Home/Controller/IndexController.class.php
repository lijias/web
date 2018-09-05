<?php
namespace Home\Controller;
use Think\Controller;
use Think\Page;
class IndexController extends Controller {
    public function index()
    {
    	
    	$totalRows = M("info")->count();
    	$page = new Page($totalRows,3);
    	
    	$result = M("info")->limit($page->firstRow,$page->listRows)->select();
    	
    	
    	$this->assign("pageList",$page->show());
    	$this->assign("result",$result);
        $this->display();
    }
}
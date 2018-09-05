<?php
namespace Home\Controller;

use Think\Controller;

class BaseController extends Controller {
    public function _initialize(){
    	
    	$result = M("newstypes")->select();
       	
    	$this->assign("result",$result);
    	
    }
    
}
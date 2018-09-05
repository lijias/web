<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index()
    	{
    		$this->display();
   		}
   		public function select()
   		{
   			var_dump($_POST);
   		}
}
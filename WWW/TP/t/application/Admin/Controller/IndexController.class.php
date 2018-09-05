<?php
namespace Admin\Controller;

class IndexController extends BaseController
{
    public function index()
    {
    	$this->display();
    }
    function header()
    {
    	$this->display();
    }
    function menu()
    {
    	$this->display();
    }
    function welcome()
    {
    	$username=$_SESSION['msg'][0]['username'];
    	$this->assign("username",$username);
    	$this->display();
    }
}
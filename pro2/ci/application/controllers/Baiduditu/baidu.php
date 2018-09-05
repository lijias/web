<?php
/*
 * 百度地图
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Baidu extends CI_Controller
{

    public function index()
    {
        $this->load->view('index/baidu');
    }


}


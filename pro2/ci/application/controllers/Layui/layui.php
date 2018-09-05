<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * 报表
 */

class Layui extends CI_Controller
{
    public function index()
    {
        $this->load->view('layui/text');
    }

    public function approve()
    {
        print_r($_POST);
    }

    public function date()
    {
        $this->load->view('layui/date');
    }

}
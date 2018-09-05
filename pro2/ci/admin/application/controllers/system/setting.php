<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('project/project_mdl');
    }

    public function index()
    {
        $this->get_list();
    }

//    列表页
    public function get_list()
    {
        $data['list'] = $this->project_mdl->get_list();

        $this->load->view('header');
        $this->load->view('left');
        $this->load->view('project/list', $data);
    }

//    编辑页
    public function edit()
    {
    }

//    保存
    public function save()
    {
    }

//    删除
    public function delete()
    {
    }
}
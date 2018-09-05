<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Region extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('region/region_mdl');
    }

    public function index()
    {
    }

//    列表页
    public function get_list()
    {
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

//    获取城市
    public function get_city()
    {
        $data = $this->input->post();

        $result['list'] = $this->region_mdl->get_city($data['first']);

        if (empty($result['list'])) {
            $result['message'] = 'not found';
        } else {
            $result['message'] = 'success';
        }
        echo json_encode($result);
    }
}
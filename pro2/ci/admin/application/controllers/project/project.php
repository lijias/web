<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project extends CI_Controller
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
        $id = $this->input->get('id');
        $data = array();
        $data['city'] = array();

        if ($id) {
//            编辑页数据
            $data['editing'] = $this->project_mdl->edit($id);
//            处理编辑页地区数据
            $province_id = $this->project_mdl->search_first($data['editing']['city_id']);
            if ($province_id['id'] == '') {
                $data['editing']['province'] = $data['editing']['city_id'];
                $data['editing']['city'] = '';
            } else {
                $data['editing']['province'] = $province_id['id'];
                $data['editing']['city'] = $data['editing']['city_id'];
            }
            $data['city'] = $this->project_mdl->get_city($province_id['id']);
        }

        $data['province'] = $this->project_mdl->get_province();
        $data['foreign'] = $this->project_mdl->get_foreign();

        $this->load->view('header');
        $this->load->view('left');
        $this->load->view('project/edit', $data);
    }

//    保存
    public function save()
    {
        $data = $this->input->post();
        if ($data['id']) {
            $result = $this->project_mdl->update($data);
            $message['type'] = 'update';
            if ($result) {
                $message['code'] = 'success';
            } else {
                $message['code'] = 'error';
            }
        } else {
            $result = $this->project_mdl->create($data);
            $message['type'] = 'create';
            if ($result) {
                $message['code'] = 'success';
            } else {
                $message['code'] = 'error';
            }
        }
        echo json_encode($message);
    }

//    删除
    public function delete()
    {
        $data = $this->input->post();
        if ($data['id']) {
            $result = $this->project_mdl->delete($data);
            if ($result) {
                $message['code'] = 'success';
            } else {
                $message['code'] = 'error';
                $message['message'] = '删除失败!';
            }
        } else {
            $message['code'] = 'error';
            $message['message'] = '非法操作!';
        }
        echo json_encode($message);
    }
}
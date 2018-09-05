<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project_people extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('project/project_people_mdl');
    }

//    列表页
    public function index()
    {
        $list_data = $this->project_people_mdl->get_list();
        foreach ($list_data as $k => $v) {
            $a_ids = explode(',', $v['a_ids']);
            $a_names = $this->name_str($a_ids);
            $list_data[$k]['a_names'] = $a_names;
            unset($list_data[$k]['a_ids']);

            $b_ids = explode(',', $v['b_ids']);
            $b_names = $this->name_str($b_ids);
            $list_data[$k]['b_names'] = $b_names;
            unset($list_data[$k]['b_ids']);
        }
        $data['list'] = $list_data ? $list_data : array();

        $this->load->view('header');
        $this->load->view('left');
        $this->load->view('project_people/list', $data);
    }

//    编辑页
    public function edit()
    {
        $id = $this->input->get('id');
        if ($id) {
            $data = $this->project_people_mdl->edit($id);

//        处理a_ids的select2初始数据
            $a_ids = $data['a_ids'];
            $data['a_ids'] = str_replace(',', ';', $data['a_ids']);
            $a_arr = explode(',', $a_ids);
            $a_names = $this->name_str($a_arr);
            $data['a_names'] = $a_names;
            $a_json = $this->json_str($a_ids, $a_names);
            $data['editing']['a_json'] = json_encode($a_json);

//        处理b_ids的select2初始数据
            $b_ids = $data['b_ids'];
            $data['b_ids'] = str_replace(',', ';', $data['b_ids']);
            $b_arr = explode(',', $b_ids);
            $b_names = $this->name_str($b_arr);
            $data['b_names'] = $b_names;
            $b_json = $this->json_str($b_ids, $b_names);
            $data['editing']['b_json'] = json_encode($b_json);

            $data['editing']['cant'] = $data['a_names'] . ',' . $data['b_names'];

            $this->load->view('header');
            $this->load->view('left');
            $this->load->view('project_people/edit', $data);
        } else {
            $this->load->view('header');
            $this->load->view('left');
            $this->load->view('project_people/edit');
        }
    }

//    select2查找数据
    public function getAccounts()
    {
        $key = $this->input->get('key');
        $cant = $this->input->get('cant');
        $cant_arr = array();
        if ($cant) {
            $cant_arr = explode(',', $cant);
        }
        $result = $this->project_people_mdl->search_admin($key, $cant_arr, 0, 500);
        print_r(json_encode($result));
    }

//    保存
    public function save()
    {
        $data = $this->input->post();
        $a_arr = explode(',', $data['people_a']);
        $data['a_ids'] = $this->id_str($a_arr);
        $b_arr = explode(',', $data['people_b']);
        $data['b_ids'] = $this->id_str($b_arr);
        if ($data['id']) {
            $result = $this->project_people_mdl->update($data);
        } else {
            $result = $this->project_people_mdl->create($data);
        }
    }

//    处理id
    private function id_str($array = array())
    {
        $new_arr = $this->project_people_mdl->search_ids($array);
        $ids = '';
        foreach ($new_arr as $k1 => $v1) {
            if ($ids == '') {
                $ids = $v1['admin_id'];
            } else {
                $ids = $ids . ',' . $v1['admin_id'];
            }
        }
        return $ids;
    }

//    处理name
    private function name_str($array = array())
    {
        $new_arr = $this->project_people_mdl->search_names($array);
        $names = '';
        foreach ($new_arr as $k1 => $v1) {
            if ($names == '') {
                $names = $v1['admin_name'];
            } else {
                $names = $names . ',' . $v1['admin_name'];
            }
        }
        return $names;
    }

//    处理select2需要格式的数据
    private function json_str($ids, $names)
    {
        $arr = array();
        $id_arr = explode(',', $ids);
        $name_arr = explode(',', $names);
        foreach ($id_arr as $k => $v) {
            $arr[$k]['id'] = $id_arr[$k];
            $arr[$k]['text'] = $name_arr[$k];
        }
        return $arr;
    }
}
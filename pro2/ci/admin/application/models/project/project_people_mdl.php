<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 *
 *
 *
 */
class Project_people_mdl extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

//    select2查找数据
    public function search_admin($key = '', $cant_arr = array(), $offset = 0, $limit = 500)
    {
        $this->db->select('admin_id as id , admin_name as text');
        $this->db->from('admin');
        if ($key) {
            $this->db->where('admin_name', $key);
        }
        if ($cant_arr) {
            $this->db->where_not_in('admin_name', $cant_arr);
        }
        $this->db->offset($offset);
        $this->db->limit($limit);
        $query = $this->db->get();
        return $query->result_array();
    }

//    列表页
    public function get_list()
    {
        $this->db->select('pp.id,p.project_name,pp.a_ids,pp.b_ids');
        $this->db->from('project_people as pp');
        $this->db->join('project as p', 'pp.project_id = p.id', 'left');
        $query = $this->db->get();
        return $query->result_array();
    }

//    编辑页
    public function edit($id = '')
    {
        if ($id) {
            $this->db->where('id', $id);
        }
        $query = $this->db->get('project_people');
        return $query->row_array();
    }

//    新增
    public function create($data = array())
    {
        $this->db->set('project_id', $data['project_id']);
        $this->db->set('a_ids', $data['a_ids']);
        $this->db->set('b_ids', $data['b_ids']);
        $this->db->insert('project_people');
        return $this->db->insert_id();
    }

//    更新
    public function update($data = array())
    {
        $this->db->set('project_id', $data['project_id']);
        $this->db->set('a_ids', $data['a_ids']);
        $this->db->set('b_ids', $data['b_ids']);
        $this->db->where('id', $data['id']);
        return $this->db->update('project_people');
    }


//    处理id
    public function search_ids($array = array())
    {
        $this->db->select('admin_id');
        $this->db->from('admin');
        $this->db->where_in('admin_name', $array);
        $query = $this->db->get();
        return $query->result_array();
    }

//    处理name
    public function search_names($array = array())
    {
        $this->db->select('admin_name');
        $this->db->from('admin');
        $this->db->where_in('admin_id', $array);
        $query = $this->db->get();
        return $query->result_array();
    }
}
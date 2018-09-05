<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 *
 *  项目
 *
 */
class Project_mdl extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

//    列表页
    public function get_list()
    {
        $this->db->select('p.*,r.region_name');
        $this->db->from('project as p');
        $this->db->join('region as r', 'p.city_id=r.id', 'left');
        $this->db->where('status', 1);
        $query = $this->db->get();
        return $query->result_array();
    }

//    获取省级
    public function get_province()
    {
        $this->db->select('id,region_name as province');
        $this->db->from('region');
        $this->db->where('id_parent', 1);
        $query = $this->db->get();
        return $query->result_array();
    }

//    获取外国
    public function get_foreign()
    {
        $this->db->select('id,region_name as foreign');
        $this->db->from('region');
        $this->db->where('region_type', 5);
        $query = $this->db->get();
        return $query->result_array();
    }

//    获取市级
    public function get_city($province_id)
    {
        $this->db->select('id,region_name as city');
        $this->db->from('region');
        $this->db->where('id_parent', $province_id);
        $query = $this->db->get();
        return $query->result_array();
    }

//    查找上级
    public function search_first($city_id)
    {
        $this->db->select('rr.id,rr.region_name');
        $this->db->from('region as r');
        $this->db->join('region as rr', 'r.id_parent=rr.id', 'left');
        $this->db->where('r.id', $city_id);
        $query = $this->db->get();
        return $query->row_array();
    }

//    编辑页
    public function edit($id = '')
    {
        if ($id) {
            $this->db->where('id', $id);
        }
        $query = $this->db->get('project');
        return $query->row_array();
    }

//    新增
    public function create($data = array())
    {
        $this->db->set('id', $data['id']);
        $this->db->set('project_name', $data['project_name']);
        if (isset($data['second']) && $data['second'] != '') {
            $this->db->set('city_id', $data['second']);
        } else {
            $this->db->set('city_id', $data['first']);
        }
        $this->db->insert('project');
        return $this->db->insert_id();
    }

//    更新
    public function update($data = array())
    {
        $this->db->set('id', $data['id']);
        $this->db->set('project_name', $data['project_name']);
        if (isset($data['second']) && $data['second'] != '') {
            $this->db->set('city_id', $data['second']);
        } else {
            $this->db->set('city_id', $data['first']);
        }
        $this->db->where('id', $data['id']);
        return $this->db->update('project');
    }

//    删除
    public function delete($data = array())
    {
        $this->db->set('status', 0);
        $this->db->where('id', $data['id']);
        return $this->db->update('project');
    }
}
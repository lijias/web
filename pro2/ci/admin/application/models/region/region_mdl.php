<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 *
 *
 *
 */
class Region_mdl extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

//    列表页
    public function get_list()
    {
    }

//    编辑页
    public function edit($id = '')
    {
    }

//    新增
    public function create($data = array())
    {
    }

//    更新
    public function update($data = array())
    {
    }

//    删除
    public function delete($data = array())
    {
    }

//    获取市
    public function get_city($id_parent)
    {
        $this->db->select('id,region_name as city');
        $this->db->from('region');
        $this->db->where('id_parent', $id_parent);
        $query = $this->db->get();
        return $query->result_array();
    }
}
<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * 管理员
 *
 *
 */
class Tag_mdl extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function search_tag()
    {
        $this->db->select('id,tag');
        $this->db->from('tag');
        $this->db->order_by("content_count", "desc");
        $this->db->order_by("account_count", "desc");
        $this->db->limit(30);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function add_tag($id)
    {
        $this->db->query("update 9thleaf_tag set content_count = content_count+1 where id = " . $id);
        return 1;
    }

    public function search_list_tag($keyword = '', $offset = 0, $limit = 0)
    {
        $this->db->select('id,tag as text');
        $this->db->from('tag');
        $this->db->order_by("tag", "asc");
        if ($keyword != "") {
            $this->db->like("tag", $keyword, "right");
        }
        if ($offset > 0) {
            $this->db->offset($offset);
        }
        if ($limit > 0) {
            $this->db->limit($limit);
        }
        $query = $this->db->get();
        return $query->result_array();
    }

    public function content_tag($id)
    {
        $this->db->select('tag');
        $this->db->from('tag');
        $this->db->where('id',$id);
        $query = $this->db->get();
        return $query->row_array();
    }
}
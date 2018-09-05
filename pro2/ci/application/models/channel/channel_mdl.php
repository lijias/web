<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * 管理员
 *
 *
 */
class Channel_mdl extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function content_channel($id)
    {
        $this->db->select('pid,section_name as channel_name');
        $this->db->from('channel');
        $this->db->where('id',$id);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function search_list_channel($keyword = '', $offset = 0, $limit = 0)
    {
        $this->db->select('id,section_name as text,pid');
        $this->db->from('channel');
        $this->db->order_by("id", "asc");
        if ($keyword != "") {
            $this->db->like("section_name", $keyword, "right");
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
}
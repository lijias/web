<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * 文章
 *
 *
 */
class Content_mdl extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function load($id, $content_type)
    {
        $this->db->select('p.id,p.ids_channel,GROUP_CONCAT(ct.tag_id) as tag_id');
        $this->db->from('policy as p');
        $this->db->join('content_tag as ct', 'p.id = ct.content_id and ct.content_type = ' . $content_type);
        $this->db->where('p.id', $id);
        $query = $this->db->get();
        return $query->row_array();
    }
}
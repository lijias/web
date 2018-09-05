<?php
if (! defined('BASEPATH'))
    exit('No direct script access allowed');
/**
 * 管理员
 *
 *
 */
class Writejson_mdl extends CI_Model
{
    function __construct()
    {
        parent::__construct ();
    }

    public function search($limit = 10)
    {
        $this->db->order_by('id','desc');
        $this->db->limit($limit);
        $query = $this->db->get('news');
        return $query->result_array();
    }
}
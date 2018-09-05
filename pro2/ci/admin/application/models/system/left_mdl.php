<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 *
 *
 *
 */
class Left_mdl extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function get_left_list()
    {
        $this->db->from('admin_action as a');
        $this->db->join('system_module as s', 'a.id_module=s.id');
        $this->db->where('id_parent !=', 0);
        $query = $this->db->get();
        return $query->result_array();
    }
}
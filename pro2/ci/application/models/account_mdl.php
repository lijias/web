<?php
if (! defined('BASEPATH'))
    exit('No direct script access allowed');
/**
 * 管理员
 *
 *
 */
class Account_mdl extends CI_Model {
	function __construct() {
		parent::__construct ();
	}

    public function   search_account()
    {
        $this->db->select('id_name,mobile');
        $this->db->from('account');
        $this->db->limit(15);
        $query = $this->db->get();
        return $query->result_array();
    }


}
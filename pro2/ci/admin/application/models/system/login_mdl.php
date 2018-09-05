<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 *
 *
 *
 */
class Login_mdl extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

//    验证用户是否存在
    public function check_user($username)
    {
        $this->db->from('admin');
        $this->db->where('admin_name', $username);
        $query = $this->db->get();
        return $query->row_array();
    }

//    验证密码是否正确
    public function sign_in($username, $password)
    {
        $this->db->from('admin');
        $this->db->where('admin_name', $username);
        $this->db->where('admin_password', $password);
        $query = $this->db->get();
        return $query->row_array();
    }
}
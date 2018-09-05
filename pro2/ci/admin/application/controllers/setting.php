<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->session->set_userdata('mod_id', 6);
        redirect(site_url('system/setting'));
    }
}
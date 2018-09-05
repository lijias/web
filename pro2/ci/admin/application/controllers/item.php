<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Item extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->session->set_userdata('mod_id', 2);
        redirect(site_url('project/project'));
    }
}
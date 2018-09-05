<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->session->set_userdata('mod_id', 1);
        $this->load->view('header');
        $this->load->view('left');
    }
}
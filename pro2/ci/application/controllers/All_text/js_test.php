<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class js_test extends CI_Controller
{
    public function index()
    {
        $this->load->view('index/js');
    }
}
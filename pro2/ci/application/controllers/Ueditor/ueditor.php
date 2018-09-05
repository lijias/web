<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * 报表
 */

class Ueditor extends CI_Controller
{
    public function index()
    {
        $this->load->view('ueditor/text');
    }
}
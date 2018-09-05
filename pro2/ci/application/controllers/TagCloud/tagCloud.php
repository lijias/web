<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TagCloud extends CI_Controller
{

    /*
     * 标签云(球形)
     */
    public function index()
    {
        $this->load->model('tag/tag_mdl', 'tag_mdl');
        $data['tags'] = $this->tag_mdl->search_tag();
        $this->load->view('index/cloud', $data);
    }

    public function add()
    {
        $data = $this->input->post();
        $id = $data['id'];
        $this->load->model('tag/tag_mdl', 'tag_mdl');
        $result = $this->tag_mdl->add_tag($id);
    }

}


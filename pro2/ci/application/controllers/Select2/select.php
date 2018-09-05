<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Select extends CI_Controller
{

    /*
     * 带搜索的下拉列表
     */
    public function index()
    {
        $this->load->view('select2/select');
    }

    public function gettags()
    {
        $this->load->model('tag/tag_mdl', 'tag_mdl');
        $key = $this->input->get("key");
        $data['tags'] = $this->tag_mdl->search_list_tag($key,0,2000);
        print_r(json_encode($data['tags']));
    }

}


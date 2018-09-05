<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('system/login_mdl');
        $this->load->model('system/header_mdl');
        $this->load->model('system/left_mdl');
    }

    public function index()
    {
        $this->session->unset_userdata('header_list');
        $this->load->view('login');
    }

//    登录验证
    public function sign_in()
    {
        $data = $this->input->post();
        $username = $data['username'];
//        验证用户
        $userResult = $this->login_mdl->check_user($username);
        if ($userResult) {
            $password = md5($data['password']);
//            验证密码
            $passwordResult = $this->login_mdl->sign_in($username, $password);
            if ($passwordResult) {
                $header_list = $this->header_mdl->get_header_list();
//                session保存头部导航列表
                $this->session->set_userdata('header_list', $header_list);
                $left_list = $this->left_mdl->get_left_list();
//                session保存左边导航列表
                $this->session->set_userdata('left_list', $left_list);
                $result['code'] = 'success';
                $result['message'] = '登录成功';
            } else {
                $result['code'] = 'error';
                $result['message'] = '密码错误';
            }

        } else {
            $result['code'] = 'error';
            $result['message'] = '用户不存在';
        }
        echo json_encode($result);
    }
}
<?php
/**
 * 文件上传
 * User: php_010
 * Date: 17/9/29
 * Time: 10:52
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class File extends CI_Controller
{
    public function index()
    {
        //断点使用
//        $name = $this->test_dd();
//        $test = 'test';
        //断点使用
        $this->load->view('index/file');
        //redis使用
//        $r = new Redis();
//        $r->connect('127.0.0.1','6379');
//        $r->ping();
//        $r->lpush("tutorial-list", "Redis");
//        $r->lpush("tutorial-list", "Mongodb");
//        $r->lpush("tutorial-list", "Mysql");
        // 获取存储的数据并输出
//        $arList = $r->lrange("tutorial-list", 0 ,5);
//        $name = $r->get('username');
//        print_r($arList);exit;
        //redis使用
    }

    public function upload()
    {
        $this->load->library('session');
        $files = $_SESSION['files'];
        print_r($files);
//        unset($_SESSION['files'][0]);
        print_r($this->session->userdata());
//        exit;
//        move_uploaded_file($_FILES['upload']['tmp_name'], 'uploads/' . $_FILES['upload']['name']);
    }

    public function ready()
    {
//        print_r($_FILES);
        $this->load->library('session');
        $newdata = [];
        foreach ($_FILES as $k => $v) {
            $newdata['files'][$k] = $v;
        }
        $this->session->set_userdata($newdata);
//        echo '<pre>';
//        print_r($this->session->userdata());
//        session_destroy();
    }

    public function test()
    {
        $ch = curl_init();
        $access_token = 'zlqgVteP7QaQqHht3SA_XpcglxsickdEyZIGI95F797z3F9pT-lom0uT1buI-CraraW_dZzs5O9WEVXWbpwG8eEvFRdSHnhoGFg1WuvoyHNQvv0vJRkKU_ueQxyn03D5XUVhAEAQNO';
        $url = 'https://api.weixin.qq.com/cgi-bin/message/template/send?access_token=' . $access_token;
        $post_data = array(
            'touser' => 'oU1P2w7bbyIEtpjwrsUloX2g2C0U',
            'template_id' => '7DN2yaojQLAGzOCLAK2c8PovZMKy7g5NOe8ihhPVVRI',
            'url' => '',
            'miniprogram' => '',
            'data' => array(
                'first' => array(
                    'value' => '您好，您的注册申请已通过，欢迎加入邦加智库。',
                    'color' => '#173177'),
                'keyword1' => array(
                    'value' => '升',
                    'color' => '#173177'),
                'keyword2' => array(
                    'value' => '13726757031',
                    'color' => '#173177'),
                'keyword3' => array(
                    'value' => '2014年9月22日',
                    'color' => '#173177'),
                'remark' => array(
                    'value' => '感谢您的使用',
                    'color' => '#173177')));
        $timeout = 5;
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($post_data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
        curl_setopt($ch, CURLOPT_HEADER, false);
        $file_contents = curl_exec($ch);
        curl_close($ch);
        print_r($file_contents);
    }

    public function test_post()
    {
        print_r($_POST);
    }

    public function test_dd()
    {
        return 1;
    }

}
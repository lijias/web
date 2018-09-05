<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Write extends CI_Controller
{

    /*
     * 读取数据写入json文件
     */
    function index()
    {
        $myfile = fopen('news.json', "w") or die("Unable to open file!");
        $this->load->model('writejson/writejson_mdl','writejson');
        $result = $this->writejson->search(20);
//        $arr = ['id'=>1,'name'=>'张三'];
        $txt = json_encode($result);
        fwrite($myfile, $txt);
        fclose($myfile);
    }
}
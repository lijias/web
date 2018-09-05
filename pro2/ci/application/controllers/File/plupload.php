<?php
/**
 * 文件上传
 * User: php_010
 * Date: 17/9/29
 * Time: 10:52
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Plupload extends CI_Controller
{
    public function index()
    {
        $this->load->view('plupload/test');
    }

    public function upload()
    {
        $typeArr = array("jpg", "png", "gif", "jpeg"); //允许上传文件格式
        $path = "uploads/temporary/"; //上传路径
        if (!file_exists($path)) {
            @mkdir(iconv("UTF-8", "GBK", $path), 0777, true);
        }
        if (isset($_POST)) {
            $name = $_FILES['file']['name'];
            $size = $_FILES['file']['size'];
            $name_tmp = $_FILES['file']['tmp_name'];
            if (empty($name)) {
                echo json_encode(array("error" => "您还未选择图片"));
                exit;
            }
            $type = strtolower(substr(strrchr($name, '.'), 1)); //获取文件类型

            if (!in_array($type, $typeArr)) {
                echo json_encode(array("error" => "清上传jpg,png或gif类型的图片！"));
                exit;
            }
            if ($size > 5 * 1024 * 1024) { //上传大小
                echo json_encode(array("message" => "图片大小已超过5m！"));
                exit;
            }

            $pic_name = time() . rand(10000, 99999) . "." . $type; //图片名称
            $pic_url = $path . $name; //上传后图片路径+名称
            if (move_uploaded_file($name_tmp, $pic_url)) { //临时文件转移到目标文件夹
                echo json_encode(array("error" => "0", "pic" => base_url() . $pic_url, "name" => $name, "id" => 1));
            } else {
                echo json_encode(array("error" => "上传有误，清检查服务器配置！"));
            }
        }
    }

    public function ready()
    {

    }
}
<?php
/**
 * 微信小程序文件上传
 * User: php_010
 * Date: 17/9/29
 * Time: 10:52
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Xcxfile extends CI_Controller
{
    public function index()
    {
        if (isset($_FILES['file'])) {
            $file = $_FILES['file'];
            $path = 'uploads/';
            $info = move_uploaded_file($file['tmp_name'], $path . $file['name']);
            if ($info) {
                echo 1;
            } else {
                echo 2;
            }
        }
    }

    public function video()
    {
        if (isset($_FILES['file'])) {
            $file = $_FILES['file'];
            $path = 'uploads/';
            $info = move_uploaded_file($file['tmp_name'], $path . date('YmdHis', time()) . '.mp3');
            if ($info) {
                echo 1;
            } else {
                echo 2;
            }
        }
    }

    public function kf()
    {
        $this->load->view('test4');
        /*           <script type="text/javascript" src="<?php echo base_url()?>/js/jquery.js"></script>*/
    }

    public function verificationCode()
    {
        $data['code'] = 1;

        print_r(json_encode($data));
    }
}
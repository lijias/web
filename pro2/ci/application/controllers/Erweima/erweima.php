<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * 二维码
 */

class Erweima extends CI_Controller
{

    function index()
    {
        $this->load->view('erweima/erweima');
    }

    function logo()
    {
        $this->load->helper('phpqrcode');
        $value = 'http://www.baidu.com';
        $logo = 'uploads/logo.png'; // 中间的logo
        $QR = "base.png"; // 自定义生成的。结束后可以删除
        $last = "uploads/last.png"; // 最终生成的图片
        $errorCorrectionLevel = 'L';
        $matrixPointSize = 10;
        QRcode::png($value, $QR, $errorCorrectionLevel, $matrixPointSize, 2);
        if ($logo !== FALSE) {
            $QR = imagecreatefromstring(file_get_contents($QR));
            $logo = imagecreatefromstring(file_get_contents($logo));
            $QR_width = imagesx($QR);
            $QR_height = imagesy($QR);
            $logo_width = imagesx($logo);
            $logo_height = imagesy($logo);
            $logo_qr_width = $QR_width / 5;
            $scale = $logo_width / $logo_qr_width;
            $logo_qr_height = $logo_height / $scale;
            $from_width = ($QR_width - $logo_qr_width) / 2;
            imagecopyresampled($QR, $logo, $from_width, $from_width, 0, 0, $logo_qr_width, $logo_qr_height, $logo_width, $logo_height);
        }
        $pic = imagepng($QR, $last); // 生成最终的文件
        $this->download($last);
    }

    //不带logo二维码
    public function no_logo()
    {
        $this->load->helper('phpqrcode');
        $data = 'http://www.baidu.com';
        $filename = 'uploads/erweima.png';  //  生成的文件名
        $errorCorrectionLevel = 'L';  // 纠错级别：L、M、Q、H
        $matrixPointSize = 10; // 点的大小：1到10
        QRcode::png($data, $filename, $errorCorrectionLevel, $matrixPointSize, 2);
        $this->download($filename);
    }

    public function download($file)
    {
        $time = time();
        header('Content-Disposition: attachment; filename="' . $time . '.jpg"');
        readfile(base_url() . $file);
    }

}
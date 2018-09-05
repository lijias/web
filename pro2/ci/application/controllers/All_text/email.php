<?php

/**
 * Created by PhpStorm.
 * User: php_010
 * Date: 18/5/15
 * Time: 15:13
 */
class email extends CI_Controller
{
    public function index()
    {
        $to = "1097786399@qq.com";
        $subject = "Test mail";
        $message = "Hello! This is a simple email message.";
        $from = "1097786399@qq.com";
        $headers = "From: $from";
        print_r(mail($to,$subject,$message,$headers));
        echo "Mail Sent.";
    }
}
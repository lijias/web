<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * 报表
 */

class Ebrun extends CI_Controller
{
    public function index()
    {
        $this->load->library('MyClient');
        $url = 'https://sso.ebrun.com/v4';
//        $url = 'http://sso.test.ebrun.com/v4/';
        $broker = 'ebangpluscn';
        $secret = 'bwd4dfssds6dik6bwdfds1dar5d';
        $proxyHost = '';
        $proxyPort = 0;

        $myClient = MyClient::getMyInstance(array(
            'ebrun_user_center_server_url' => $url,
            'broker' => $broker,
            'secret' => $secret,
            'proxy_host' => $proxyHost,
            'proxy_port' => $proxyPort,
            'debug' => true
        ));
        $result = $myClient->getUserInfoViaSocialAccount(5, 'oU1P2w7bbyIEtpjwrsUloX2g2C0U');
        if (isset($result['error'])) {
            var_dump($result['error']);
        } elseif (isset($result['userInfo'])) {
            var_dump($result['userInfo']);
        } else {
            throw new \Exception("通讯异常");
        }
    }
}
<?php

/**
 * 本类只是一个样例, 实现了 配置文件的加载 网络代理的设置 和 日志的处理
 *
 * Class MyClient
 */
include_once 'Ebrun/UserCenter/EbrunUserCenterSDK/Client.php';

class MyClient extends Ebrun\UserCenter\EbrunUserCenterSDK\Client
{
    /**
     * 是否开启排查记录
     * @var bool
     */
    protected $debugging = false;

    public static function getMyInstance(array $ebrunUserCenterSDKConfig = array())
    {

        $instance = parent::getInstance(
            $ebrunUserCenterSDKConfig['ebrun_user_center_server_url'],
            $ebrunUserCenterSDKConfig['broker'],
            $ebrunUserCenterSDKConfig['secret'],
            $ebrunUserCenterSDKConfig['proxy_host'], //默认值 '' 不起效
            $ebrunUserCenterSDKConfig['proxy_port'] //默认值 0 不起效
        );

        $instance->debugging = $ebrunUserCenterSDKConfig['debug'];

        return $instance;
    }

    /**
     * 写日志
     *
     * @param string $source
     * @param array $data
     */
    protected function logger($source = '', array $data = array())
    {
        if (!$this->debugging) {
            return;
        }

        if ('' != $source) {
            error_log(var_export(array(
                    '$source' => $source,
                    '$data' => $data,
                ), true) . "\n\n", 0);
        }
    }

}

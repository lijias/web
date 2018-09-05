<?php

/**
 * 本类只是一个样例, 实现了 配置文件的加载 网络代理的设置 和 日志的处理
 *
 * Class MySSOBroker
 */
class MySSOBroker extends Ebrun\SSO\EbrunSSOSDK\Broker
{
    /**
     * 是否开启排查记录
     * @var bool
     */
    protected $debugging = false;

    /**
     * Redis类
     * @var mixed
     */
    protected static $redisFacade = null;

    public static function getMyInstance(array $ebrunUserCenterSDKConfig = array())
    {

        $instance = parent::getInstance(
            $ebrunUserCenterSDKConfig['ebrun_user_center_server_url'],
            $ebrunUserCenterSDKConfig['broker'],
            $ebrunUserCenterSDKConfig['secret'],
            $ebrunUserCenterSDKConfig['proxy_host'], //默认值 '' 不起效
            $ebrunUserCenterSDKConfig['proxy_port'] //默认值 0 不起效
        );

        $instance->use_cache_without_api = $ebrunUserCenterSDKConfig['use_cache_without_api'];

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
        if (! $this->debugging) {
            return;
        }

        if ('' != $source) {
            error_log(var_export(array(
                    '$source' => $source,
                    '$data' => $data,
                ), true) . "\n\n", 3, '/tmp/user-center-sdk.log');
        }
    }

    /**
     * 从 SSO-REDIS 读取被缓存的字符串值, 不一定能拿到有效值
     *
     * @param string $cacheKey
     * @throws \Exception
     * @return string
     */
    protected function getCacheStringFromSSORedis($cacheKey)
    {
        // TODO: 接入方需要自行实现 getCacheStringFromSSORedis() 方法.
        // TODO: 需要完善本方法, 并配置 redis 的 host password port database

        //$result = \RedisFacade::connection('sso-redis')->get($cacheKey);

        if (!self::$redisFacade) {
            if (!extension_loaded('redis')) {
                throw new \Exception('NO FOUND REDIS EXT');
            }

            $options = array(
                'host' => 'ssoredis.ebrun.com',
                'port' => 6379,
                'database' => 15,
                'timeout' => 0.0,
            );
            self::$redisFacade = new \Redis;
            self::$redisFacade->connect($options['host'], $options['port'], $options['timeout']);
            //self::$redisFacade->pconnect($options['host'], $options['port'], $options['timeout']);
            self::$redisFacade->select($options['database']);
        }
        $result = self::$redisFacade->get($cacheKey);

        $this->logger('getCacheStringFromSSORedis', array(
            '$cacheKey' => $cacheKey,
            '$result' => $result,
        ));

        return $result;
    }
}

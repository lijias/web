<?php

namespace Ebrun\UserCenter\EbrunUserCenterSDK;

/**
 * 亿邦动力网用户中心SDK - 客户端
 */
abstract class Client
{
    const VERSION = '20180108';

    /**
     * 网络代理的地址, 默认值 '' 不起效
     * @var string
     */
    protected $curl_proxy_host = '';

    /**
     * 网络代理的端口, 默认值 0 不起效
     * @var string
     */
    protected $curl_proxy_port = 0;

    /**
     * Url of UserCenter server
     * @var string
     */
    protected $url;

    /**
     * My identifier, given by UserCenter provider.
     * @var string
     */
    protected $broker;

    /**
     * My secret word, given by UserCenter provider.
     * @var string
     */
    protected $secret;

    /**
     * The singleton instance of the class.
     * @var \Ebrun\UserCenter\EbrunUserCenterSDK\Client
     */
    protected static $instance = null;

    /**
     * Get or create the singleton class instance.
     *
     * @param string $url Url of UserCenter server
     * @param string $broker My identifier, given by UserCenter provider.
     * @param string $secret My secret word, given by UserCenter provider.
     * @param string $proxyHost
     * @param int $proxyPort
     * @return \Ebrun\UserCenter\EbrunUserCenterSDK\Client
     */
    public static function getInstance($url, $broker, $secret, $proxyHost = '', $proxyPort = 0)
    {
        if (! is_null(static::$instance)) {
            return static::$instance;
        }

        static::$instance = new static();

        if (!$url) throw new \InvalidArgumentException("UserCenter server URL not specified");
        if (!$broker) throw new \InvalidArgumentException("UserCenter broker id not specified");
        if (!$secret) throw new \InvalidArgumentException("UserCenter broker secret not specified");

        static::$instance->url = $url;
        static::$instance->broker = $broker;
        static::$instance->secret = $secret;

        //调试的时候可以使用网络代理抓包
        static::$instance->setCurlProxyHost($proxyHost); //例如 localhost
        static::$instance->setCurlProxyPort($proxyPort); //例如 8888

        return static::$instance;
    }

    /**
     * Prevent direct object creation
     */
    function __construct() { }

    /**
     * Prevent object cloning
     */
    final private function  __clone() { }

    /**
     * 创建待验证参数数组的字符串形式
     *
     * @param array $parameters
     * @return string
     */
    private function generateParameterString(array $parameters)
    {
        ksort($parameters);
        $parameterString = http_build_query($parameters);

        return $parameterString;
    }

    /**
     * Generate signature from parameters
     *
     * @param array $parameters
     * @return string
     */
    private function generateParametersSign(array $parameters)
    {
        $parameterString = $this->generateParameterString($parameters);

        return "sign-{$this->broker}-" . hash('sha256', 'parameters' . $parameterString . $this->secret);
    }

    /**
     * Get the request url for a command
     *
     * @param string $command
     * @param array $params $params Query parameters
     * @return string
     */
    protected function getRequestUrl($command, array $params = array())
    {
        return $this->url . '/' . $command . '?' . http_build_query($params);
    }

    /**
     * 发出请求
     *
     * @param string $method      POST or GET
     * @param $command
     * @param array $data
     * @return array|mixed
     * @throws \Exception
     */
    protected function request($method, $command, array $data = array())
    {
        if (!in_array($method, array('POST', 'GET'))) {
            $message = "Unknown method '$method' ";
            return array(
                'error' => array(
                    'code' => 200400,
                    'message' => $message,
                ),
            );
            //throw new \Exception($message);
        }

        //PS: 如果服务器接到请求时发现 _time 参数跟 服务器自己的当前时间相差超过60秒, 就会抛弃本次请求
        $data = array('_time' => time()) + $data;

        $url = $this->getRequestUrl($command, $method === 'POST' ? array() : $data);
        $authorization = $this->generateParametersSign($data);

        // ==================================================================

        $ch = curl_init();

        if ($this->curl_proxy_host && $this->curl_proxy_port) {
            curl_setopt($ch, CURLOPT_PROXY, $this->curl_proxy_host);
            curl_setopt($ch, CURLOPT_PROXYPORT, $this->curl_proxy_port);
        }

        curl_setopt($ch, CURLOPT_URL, $url);

        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, TRUE); //SSL证书认证
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2); //严格校验证书域名跟当前访问的域名是否一致
        //curl_setopt($ch, CURLOPT_CAINFO, getcwd() . "/cacert.pem"); //加载指定的CA证书库

        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE); //支持 HTTP 重定向(例如:http转https过程会重定向)
        curl_setopt($ch, CURLOPT_MAXREDIRS, 10); //限制 HTTP 重定向最大次数

        curl_setopt($ch, CURLOPT_HEADER, TRUE); // response里含有HEADER头
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE); //将curl_exec()获取的信息以字符串返回，而不是直接输出。
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Accept: application/json', 'Authorization: Bearer ' . $authorization));

        if ($method === 'POST' && !empty($data)) {
            $post = is_string($data) ? $data : http_build_query($data);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
        }

        $response = curl_exec($ch);

        if (curl_errno($ch) != 0) {
            $message = 'Server request failed: ' . curl_error($ch);
            throw new \Exception($message);
        }

        $headerSize = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
        $body = substr($response, $headerSize);
        list($contentType) = explode(';', curl_getinfo($ch, CURLINFO_CONTENT_TYPE));

        curl_close($ch);

        $this->logger('curl_exec', array(
            '$method' => $method,
            '$command' => $command,
            '$data' => $data,
            '$url' => $url,
            '$authorization' => $authorization,
            '$response' => $response,
        ));

        if ($contentType != 'application/json') {
            $message = 'Expected application/json response, got ' . $contentType;
            $this->logger('check_response_content_type', array(
                '$contentType' => $contentType,
                '$message' => $message,
            ));
            return array(
                'error' => array(
                    'code' => 200500,
                    'message' => '服务器错误',
                ),
            );
            //throw new \Exception($message);
        }

        $data = json_decode($body, true);

        return $data;
    }

    /**
     * 测试方法, 主要用来测试 连接是否正常 和 签名是否正确
     *
     * @param string $method  POST or GET
     * @param array $data     任何数据
     * @return array|mixed
     * @throws \Exception
     */
    public function test($method = 'POST', array $data = array())
    {
        return $this->request($method, 'base/test', $data);
    }

    /**
     * 注册新用户
     *
     * @param string $email          邮箱 , 邮箱与手机号至少填写一项, 另一项可以为null
     * @param string $mobile         手机号 , 邮箱与手机号至少填写一项, 另一项可以为null
     * @param string $nickname       用户名
     * @param string $password       密码
     * @param integer $registryMode  注册来源,默认是0
     * @return array|mixed
     * @throws \Exception
     */
    public function register($email, $mobile, $nickname, $password, $registryMode = 0)
    {
        return $this->request('POST', 'user/register', compact('email', 'mobile', 'nickname', 'password', 'registryMode'));
    }

    /**
     * 使用 手机号 + 短信验证码 注册新用户
     *
     * @param integer $mobile      手机号
     * @param integer $smsCode     短信验证码
     * @param integer $registryMode  注册来源,默认是0
     * @return array|mixed
     * @throws \Exception
     */
    public function registerViaMobileAndSMSCaptcha($mobile, $smsCode, $registryMode = 0)
    {
        return $this->request('POST', 'user/register-via-mobile-and-sms-captcha', compact('mobile', 'smsCode', 'registryMode'));
    }

    /**
     * 使用 手机号 + 短信验证码 + 昵称 + 密码 注册新用户
     *
     * @param integer $mobile      手机号
     * @param integer $smsCode     短信验证码
     * @param string $nickname       用户名
     * @param string $password       密码
     * @param integer $registryMode  注册来源,默认是0
     * @return array|mixed
     * @throws \Exception
     */
    public function registerViaMobileAndSMSCaptchaWithNicknameAndPassword($mobile, $smsCode, $nickname, $password, $registryMode = 0)
    {
        return $this->request('POST', 'user/register-via-mobile-and-sms-captcha-with-nickname-and-password', compact('mobile', 'smsCode', 'nickname', 'password', 'registryMode'));
    }


    /**
     * 使用 第三方社交账户 注册新用户 (调用侧应该明确记录下哪些用户已经被注册到了亿邦侧, 以避免重复调用浪费资源)
     *
     * @param integer $type            第三方社交账户类型, 1：QQ，2：新浪，3：淘宝，4：畅言，5：微信
     * @param string $openid           第三方社交账户的身份标志 (PS:微信类型使用UnionID代替OpenID时也使用这个参数传值)
     * @param string $access_token     第三方社交账户的 `access_token`
     * @param integer $expires_in      第三方社交账户的 `expires_in` , 是 `access_token` 的有效期秒数, 或者是 `access_token` 的有效期截止时间戳
     * @param array $userinfo          附加的用户信息数组, 允许传入的字段见函数内的默认参数样例 $options, 每个字段都是可选的
     * @return array|mixed
     * @throws \Exception
     */
    public function registerViaSocialAccount($type, $openid, $access_token, $expires_in, $userinfo = array())
    {
        $options = array(
            'mobile' => '', //已经验证过的有效手机号
            'nickname' => '', //用户昵称, 服务侧对于空昵称这种情况会自行生成昵称
            'real_name' => '', //真实姓名
            'verified' => '0', //是否已经核实过真实姓名, 0否, 1是
            'sex' => '0', //用户的性别，值为1时是男性，值为2时是女性，值为0时是未知
            'company_name' => '', //公司名称
            'position' => '', //职位or称号
            'country' => '', //用户所在国家
            'province' => '', //用户所在省份
            'city' => '', //用户所在城市
            'introduction' => '', //个人介绍or公司简介
        );
        foreach ($options as $key => $item) {
            if (array_key_exists($key, $userinfo)) {
                ${$key} = $userinfo[$key];
            }
        }

        return $this->request('POST', 'user/register-via-social-account', compact('type', 'openid', 'access_token', 'expires_in', 'mobile', 'nickname', 'real_name', 'verified', 'sex', 'company_name', 'position', 'country', 'province', 'city', 'introduction'));
    }


    /**
     * 使用 第三方社交账户 获取用户信息
     *
     * @param integer $type            第三方社交账户类型, 1：QQ，2：新浪，3：淘宝，4：畅言，5：微信
     * @param string $openid           第三方社交账户的身份标志 (PS:微信类型使用UnionID代替OpenID时也使用这个参数传值)
     * @return array|mixed
     * @throws \Exception
     */
    public function getUserInfoViaSocialAccount($type, $openid)
    {
        return $this->request('POST', 'user/get-userinfo-via-social-account', compact('type', 'openid'));
    }


    /**
     * 使用 第三方社交账户 更新用户信息(除了`手机号`和`密码`之外的字段)
     *
     * @param integer $type            第三方社交账户类型, 1：QQ，2：新浪，3：淘宝，4：畅言，5：微信
     * @param string $openid           第三方社交账户的身份标志 (PS:微信类型使用UnionID代替OpenID时也使用这个参数传值)
     * @param array $userinfo          附加的用户信息数组, 允许传入的字段见函数内的默认参数样例 $options, 每个字段都是可选的
     * @return array|mixed
     * @throws \Exception
     */
    public function setUserInfoViaSocialAccount($type, $openid, $userinfo = array())
    {
        $options = array(
            'nickname' => '', //用户昵称, 服务侧对于空昵称这种情况会自行生成昵称
            'real_name' => '', //真实姓名
            'verified' => '0', //是否已经核实过真实姓名, 0否, 1是
            'sex' => '0', //用户的性别，值为1时是男性，值为2时是女性，值为0时是未知
            'company_name' => '', //公司名称
            'position' => '', //职位or称号
            'country' => '', //用户所在国家
            'province' => '', //用户所在省份
            'city' => '', //用户所在城市
            'introduction' => '', //个人介绍or公司简介
        );
        foreach ($options as $key => $item) {
            if (array_key_exists($key, $userinfo)) {
                ${$key} = $userinfo[$key];
            }
        }

        return $this->request('POST', 'user/set-userinfo-via-social-account', compact('type', 'openid', 'nickname', 'real_name', 'verified', 'sex', 'company_name', 'position', 'country', 'province', 'city', 'introduction'));
    }


    /**
     * 修改指定用户的密码
     *
     * @param integer $uid           用户编号
     * @param string $old_password   旧密码
     * @param string $new_password   新密码
     * @return array|mixed
     * @throws \Exception
     */
    public function changePassword($uid, $old_password, $new_password)
    {
        return $this->request('POST', 'user/change-password', compact('uid', 'old_password', 'new_password'));
    }

    /**
     * 刷新指定用户的用户信息的缓存 by bu long 2017-11-09
     *
     * @param $uid
     * @return array|mixed
     */
    public function flushUserInfo($uid)
    {
        return $this->request('POST', 'user/flush-user-info', compact('uid'));
    }

    /**
     * 检查 社交账户(QQ/sina_weibo/wechat) 是否已经绑定了系统内的某手机用户
     *
     * @param integer $type          第三方类型, 1：QQ，2：新浪，3：淘宝，4：畅言，5：微信'
     * @param string $openid         第三方给的用户唯一标识
     * @param string $access_token   第三方给的access_token
     * @return array|mixed
     * @throws \Exception
     */
    public function checkBindToMobile($type, $openid, $access_token)
    {
        return $this->request('POST', 'user/check-bind-to-mobile', compact('type', 'openid', 'access_token'));
    }

    /**
     * 获取某用户的评论,支持分页
     *
     * @param integer $uid        用户编号
     * @param integer $page_no    页数
     * @return array|mixed
     * @throws \Exception
     */
    public function getMyComments($uid, $page_no)
    {
        return $this->request('GET', 'post/get-my-comments', compact('uid', 'page_no'));
    }

    /**
     * 向指定的未注册手机号发送短信验证码
     *
     * @param integer $mobile     手机号
     * @return array|mixed
     * @throws \Exception
     */
    public function sendSMSCaptchaForUnregistered($mobile)
    {
        return $this->request('POST', 'user/send-sms-captcha-for-unregistered', compact('mobile'));
    }

    /**
     * 验证指定的未注册手机号是否接到了指定的验证码
     *
     * @param integer $mobile      手机号
     * @param integer $smsCode     短信验证码
     * @return array|mixed
     * @throws \Exception
     */
    public function verifySMSCaptchaForUnregistered($mobile, $smsCode)
    {
        return $this->request('POST', 'user/verify-sms-captcha-for-unregistered', compact('mobile', 'smsCode'));
    }

    /**
     * 给 某待绑定手机号(不区分是否已绑定 && 不区分是否已注册) 发送短信验证码
     *
     * @param integer $mobile     手机号
     * @return array|mixed
     * @throws \Exception
     */
    public function sendSMSCaptchaForBinding($mobile)
    {
        return $this->request('POST', 'user/send-sms-captcha-for-binding', compact('mobile'));
    }

    /**
     * 验证 给待绑定手机号(不区分是否已绑定 && 不区分是否已注册) 发送的短信验证码是否正确(只返回验证结果)
     *
     * @param integer $mobile      手机号
     * @param integer $smsCode     短信验证码
     * @return array|mixed
     * @throws \Exception
     */
    public function verifySMSCaptchaForBinding($mobile, $smsCode)
    {
        return $this->request('POST', 'user/verify-sms-captcha-for-binding', compact('mobile', 'smsCode'));
    }

    /**
     * 发送私信通知
     *
     * @param integer $receiver    收信人
     * @param array $data          消息体(必须附带规定格式的发信人的信息和渲染类型)
     * @return array|mixed
     * @throws \Exception
     */
    public function sendPrivateLetterNotification($receiver, array $data)
    {
        /**
         * 消息体格式
            [
                "renderType" => "xxxxxx",
                "body" => [
                    "link" => "http://www.baidu.com",
                    "message" => "这里是消息主体",
                ],
                "sender" => [
                    "id" => 38835,
                    "nickname" => "发送者的用户昵称",
                    "avatar" => "发送者的头像地址",
                ]
            ]
         *
         */
        return $this->request('POST', 'user/send-private-letter', compact('receiver', 'data'));
    }

    /**
     * 发送系统通知
     *
     * @param integer $receiver    收信人
     * @param array $data          消息体(必须附带渲染类型)
     * @return array|mixed
     * @throws \Exception
     */
    public function sendSystemMessageNotification($receiver, array $data)
    {
        /**
         * 消息体格式
            [
                "renderType" => "xxxxx",
                "body" => [
                    "link" => "http://www.baidu.com",
                    "message" => "这里是消息主体",
                ],
            ]
         *
         */
        return $this->request('POST', 'user/send-system-message', compact('receiver', 'data'));
    }

    /**
     * 发送评论通知
     *
     * @param integer $receiver    收信人
     * @param array $data          消息体(必须附带渲染类型)
     * @return array|mixed
     * @throws \Exception
     */
    public function sendCommentNotification($receiver, array $data)
    {
        /**
         * 消息体格式
            [
                "renderType" => "xxxxx",
                "body" => [
                    "link" => "http://www.baidu.com",
                    "message" => "这里是消息主体",
                ],
            ]
         *
         */
        return $this->request('POST', 'user/send-comment', compact('receiver', 'data'));
    }

    /**
     * 写日志
     *
     * @param string $source 日志来源, 方便在实现类里区别处理日志
     * @param array $data
     */
    abstract protected function logger($source, array $data);


    /**
     * 设置网络代理的地址
     * @param string $curl_proxy_host
     */
    protected function setCurlProxyHost($curl_proxy_host)
    {
        $this->curl_proxy_host = $curl_proxy_host;
    }

    /**
     * 设置网络代理的端口
     * @param integer $curl_proxy_port
     */
    protected function setCurlProxyPort($curl_proxy_port)
    {
        $this->curl_proxy_port = $curl_proxy_port;
    }

}

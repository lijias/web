<?php

namespace Ebrun\SSO\EbrunSSOSDK;

/**
 * Single sign-on broker.
 *
 * The broker lives on the website visited by the user. The broken doesn't have any user credentials stored. Instead it
 * will talk to the SSO server in name of the user, verifying credentials and getting user information.
 */
abstract class Broker
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
     * Url of SSO server
     * @var string
     */
    protected $url;

    /**
     * My identifier, given by SSO provider.
     * @var string
     */
    public $broker;

    /**
     * My secret word, given by SSO provider.
     * @var string
     */
    protected $secret;

    /**
     * Session token of the client
     * @var string
     */
    public $token;

    /**
     * Linked SSO SessionID
     * @var string
     */
    public $linked_sso_session_id;

    /**
     * 是否直接访问缓存来降低服务端接口的压力
     * @var string
     */
    protected $use_cache_without_api = false;

    /**
     * User info recieved from the server.
     * @var array
     */
    protected $userInfo = array();

    /**
     * whether got the User info.
     * @var array
     */
    protected $gotUserInfo = false;

    /**
     * The singleton instance of the class.
     * @var \Ebrun\SSO\EbrunSSOSDK\Broker
     */
    protected static $instance = null;

    /**
     * Get or create the singleton class instance.
     *
     * @param string $url Url of SSO server
     * @param string $broker My identifier, given by SSO provider.
     * @param string $secret My secret word, given by SSO provider.
     * @param string $proxyHost
     * @param int $proxyPort
     * @return \Ebrun\SSO\EbrunSSOSDK\Broker
     */
    public static function getInstance($url, $broker, $secret, $proxyHost = '', $proxyPort = 0)
    {
        if (! is_null(static::$instance)) {
            return static::$instance;
        }

        static::$instance = new static();

        if (!$url) throw new \InvalidArgumentException("SSO server URL not specified");
        if (!$broker) throw new \InvalidArgumentException("SSO broker id not specified");
        if (!$secret) throw new \InvalidArgumentException("SSO broker secret not specified");

        static::$instance->url = $url;
        static::$instance->broker = $broker;
        static::$instance->secret = $secret;

        //调试的时候可以使用网络代理抓包
        static::$instance->setCurlProxyHost($proxyHost); //例如 localhost
        static::$instance->setCurlProxyPort($proxyPort); //例如 8888

        if (isset($_COOKIE[static::$instance->getCookieName()])) {//已与SSO握手
            static::$instance->token = $_COOKIE[static::$instance->getCookieName()];
	        if (isset($_COOKIE[static::$instance->getSSOSessionIDCookieName()])) {
	            $signature = $_COOKIE[static::$instance->getSSOSessionIDCookieName()];
	            $matches = null;
	            if (preg_match('/^(\d+)-(\w*+)-(\w*+)$/', $signature, $matches)) {
	                $time = $matches[1];
	                $sessionIDForUserAgentOnSSODomain = $matches[2];
	                $mySignature = static::$instance->generateSSOTokenSign(static::$instance->token, $sessionIDForUserAgentOnSSODomain, $time);
	                if ($mySignature === $signature) {
	                    static::$instance->linked_sso_session_id = $sessionIDForUserAgentOnSSODomain;
	                } else {
	                    static::$instance->clearSSOToken();
	                }
	            }
	        }else{
		        if (static::$instance->use_cache_without_api && isset($_REQUEST['sso-session-id'])) {
			        $sso_session_id = $_REQUEST['sso-session-id'];
			        static::$instance->generateSSOToken($sso_session_id);
		        }else{//极端情况，通过请求用户信息的方式来维护sso_session_id
			        static::$instance->getUserInfo();
		        }
	        }
        }else{//尚未与SSO握手或token信息过期
	        static::$instance->clearSSOToken();
	        static::$instance->attach(true);
        }
        return static::$instance;
    }

    /**
     * Prevent direct object creation
     */
    final private function __construct() { }

    /**
     * Prevent object cloning
     */
    final private function  __clone() { }

    /**
     * Get the cookie name.
     *
     * Note: Using the broker name in the cookie name.
     * This resolves issues when multiple brokers are on the same domain.
     *
     * @return string
     */
    protected function getCookieName()
    {
        return 'sso_token_' . preg_replace('/[_\W]+/', '_', strtolower($this->broker));
    }

    /**
     * Generate session token
     */
    public function generateToken()
    {
        if (isset($this->token)) return;

        $this->token = base_convert(md5(uniqid(rand(), true)), 16, 36);
        setcookie($this->getCookieName(), $this->token, time() + 3600, '/'); //一个小时的有效期,过期会重新生成token重新attach
    }

    /**
     * Clears session token
     */
    public function clearToken()
    {
        setcookie($this->getCookieName(), null, 1, '/');
        $this->token = null;
    }

    /**
     * Get the sso_session_id cookie name.
     *
     * @return string
     */
    protected function getSSOSessionIDCookieName()
    {
        return 'sso_token_' . preg_replace('/[_\W]+/', '_', strtolower($this->broker)) . '_server';
    }

    /**
     * Generate sso_session_id token
     *
     * @param string $sessionIDForUserAgentOnSSODomain
     */
    public function generateSSOToken($sessionIDForUserAgentOnSSODomain)
    {
        $this->linked_sso_session_id = $sessionIDForUserAgentOnSSODomain;
        $time = time();
        setcookie($this->getSSOSessionIDCookieName(), $this->generateSSOTokenSign($this->token, $sessionIDForUserAgentOnSSODomain, $time), time() + 600, '/'); //10分钟, 暂且试运行
    }

    /**
     * Clears sso_session_id token
     */
    public function clearSSOToken()
    {
        setcookie($this->getSSOSessionIDCookieName(), null, 1, '/');
        $this->linked_sso_session_id = null;
    }

    /**
     * Generate sso_session_id token sign
     *
     * @param string $token
     * @param string $sessionIDForUserAgentOnSSODomain
     * @param integer $time
     * @return string
     */
    public function generateSSOTokenSign($token, $sessionIDForUserAgentOnSSODomain, $time)
    {
        return $time . '-' . $sessionIDForUserAgentOnSSODomain . '-' . hash('sha256', 'sso_session' . $time . $token . $sessionIDForUserAgentOnSSODomain . $this->secret);
    }

    /**
     * Generate uid_cache_key
     *
     * @param string $sessionIDForUserAgentOnSSODomain
     * @return string
     */
    private function generateUidCacheKey($sessionIDForUserAgentOnSSODomain)
    {
        return "sso_cache:SSOuid:{$sessionIDForUserAgentOnSSODomain}";
    }

    /**
     * Generate userinfo_cache_key
     *
     * @param integer $uid
     * @return string
     */
    private function generateUserInfoCacheKey($uid)
    {
        return "sso_cache:SSOuser:{$uid}";
    }

    /**
     * 用户登录后, 设置各平台记录用户uid，用户名的cookie
     * PS: 这个是 UCenter时期 的历史遗留问题, 有统计代码需要用到他们
     */
    private function setP3PCookieForLogin()
    {
        if (!empty($this->userInfo) && isset($this->userInfo['nickname']) && isset($this->userInfo['id'])) {
            header('P3P: CP="CURa ADMa DEVa PSAo PSDo OUR BUS UNI PUR INT DEM STA PRE COM NAV OTC NOI DSP COR"');
            $this->setP3PCookie('trackUid', $this->userInfo['id']);
            $this->setP3PCookie('trackUname', $this->userInfo['nickname']);
        }
    }

    /**
     * 用户登出后, 清理各平台记录用户uid，用户名的cookie
     * PS: 这个是 UCenter时期 的历史遗留问题, 有统计代码需要用到他们
     */
    private function setP3PCookieForLogout()
    {
        header('P3P: CP="CURa ADMa DEVa PSAo PSDo OUR BUS UNI PUR INT DEM STA PRE COM NAV OTC NOI DSP COR"');
        $this->setP3PCookie('trackUid', '');
        $this->setP3PCookie('trackUname', '');
    }

    private function setP3PCookie($cookieName, $cookieValue, $domain = '.ebrun.com')
    {
        setcookie($cookieName, $cookieValue, 0, '/', $domain, ($_SERVER['SERVER_PORT'] === 443));
    }

    /**
     * Check if we have an SSO token.
     *
     * @return boolean
     */
    public function isAttached()
    {
        return isset($this->token);
    }

    /**
     * Attach our session to the user's session on the SSO server.
     *
     * @param string|true $returnUrl The URL the client should be returned to after attaching
     */
    public function attach($returnUrl = null)
    {
        if ($this->isAttached()) return;

        if ($returnUrl === true) {
            $protocol = !empty($_SERVER['HTTPS']) ? 'https://' : 'http://';
            $returnUrl = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        }

        $this->generateToken();
        $data = array(
                'broker' => $this->broker,
                'token' => $this->token,
                'checksum' => hash('sha256', 'attach' . $this->token . $this->secret) //attach签名
            ) + $_GET;
        $params = array('return_url' => $returnUrl);
        $url = $this->url . "/sso/attach" . "?" . http_build_query($data + $params);

        $this->logger('sso_attach', array('$url' => $url));

        header("Location: $url", true, 307);
        echo "You're redirected to <a href='$url'>$url</a>";
        exit();
    }

    /**
     * Generate signature from token
     *
     * @return string
     */
    protected function generateBrokerSessionID()
    {
        if (!isset($this->token)) return '';

        return "SSO-{$this->broker}-{$this->token}-" . hash('sha256', 'session' . $this->token . $this->secret);
    }

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
     * Execute on SSO server.
     *
     * @param string $method HTTP method: 'GET', 'POST', 'DELETE'
     * @param string $command Command
     * @param array $data Query or post parameters
     * @return array|mixed
     * @throws \Exception
     */
    protected function request($method, $command, array $data = array())
    {
        if (!isset($this->token)) {
            $message = 'No token';
            return array(
                'error' => array(
                    'code' => 200400,
                    'message' => $message,
                ),
            );
            //throw new \Exception($message);
        }

        $url = $this->getRequestUrl($command, $method === 'POST' ? array() : $data);
        $authorization = $this->generateBrokerSessionID();

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

        if (isset($data['error']) && 2004037 == $data['error']['code']) {
            $this->clearToken();
            $this->attach(true);
        }

        return $data;
    }

    /**
     * Login at the SSO server.
     *
     * Only brokers marked trused can collect and send the user's credentials. Other brokers should omit $account and
     * $password.
     *
     * @param string $account      账户,邮箱/手机号/用户名
     * @param string $password     密码
     * @param int $rememberMe      是否要记住我,1记住,0不记住
     * @param string $jump         登录后跳转的地址, UCenterSSO需要的参数
     * @return array  userinfo
     */
    public function login($account, $password, $rememberMe = 0, $jump = null)
    {
        $this->attach(true);

        if (is_null($account)) {
            throw new \InvalidArgumentException("account not specified");
        }
        if (is_null($password)) {
            throw new \InvalidArgumentException("password not specified");
        }

        $result = $this->request('POST', 'sso/login', compact('account', 'password', 'rememberMe', 'jump'));
        if (isset($result['error'])) {
            return $result;
        }
        if (isset($result['userInfo'])) {
            $this->userInfo = $result['userInfo'];
        }
        if ($this->use_cache_without_api && isset($result['session_id_for_user_agent_on_sso_domain'])) {
            $this->generateSSOToken($result['session_id_for_user_agent_on_sso_domain']);
        }

        $this->setP3PCookieForLogin();

        return $this->userInfo;
    }

    /**
     * 强制登录UID指定的用户
     *
     * @param integer $uid         亿邦会员
     * @param string $jump         登录后跳转的地址, UCenterSSO需要的参数
     * @return array|mixed
     * @throws \Exception
     */
    public function loginViaUID($uid, $jump = null)
    {
        $this->attach(true);

        if (is_null($uid)) {
            throw new \InvalidArgumentException("uid not specified");
        }

        //PS: 如果服务器接到请求时发现 _time 参数跟 服务器自己的当前时间相差超过60秒, 就会抛弃本次请求
        $_time = time();
        $signature = $this->generateParametersSign(array(
            'uid' => $uid,
            '_time' => $_time,
        ));

        $result = $this->request('POST', 'sso/login-via-uid', compact('uid', '_time', 'signature', 'jump'));
        if (isset($result['error'])) {
            return $result;
        }
        if (isset($result['userInfo'])) {
            $this->userInfo = $result['userInfo'];
        }
        if ($this->use_cache_without_api && isset($result['session_id_for_user_agent_on_sso_domain'])) {
            $this->generateSSOToken($result['session_id_for_user_agent_on_sso_domain']);
        }

        $this->setP3PCookieForLogin();

        return $this->userInfo;
    }

    /**
     * 强制登录 第三方社交账户 关联的用户
     *
     * @param integer $type        第三方社交账户类型, 1：QQ，2：新浪，3：淘宝，4：畅言，5：微信
     * @param string $openid       第三方社交账户的身份标志 (PS:微信类型使用UnionID代替OpenID时也使用这个参数传值)
     * @param string $jump         登录后跳转的地址, UCenterSSO需要的参数
     * @return array|mixed
     * @throws \Exception
     */
    public function loginViaSocialAccount($type, $openid, $jump = null)
    {
        $this->attach(true);

        if (empty($type)) {
            throw new \InvalidArgumentException("type not specified");
        }
        if (empty($openid)) {
            throw new \InvalidArgumentException("openid not specified");
        }

        //PS: 如果服务器接到请求时发现 _time 参数跟 服务器自己的当前时间相差超过60秒, 就会抛弃本次请求
        $_time = time();
        $signature = $this->generateParametersSign(array(
            'type' => $type,
            'openid' => $openid,
            '_time' => $_time,
        ));

        $result = $this->request('POST', 'sso/login-via-social-account', compact('type', 'openid', '_time', 'signature', 'jump'));
        if (isset($result['error'])) {
            return $result;
        }
        if (isset($result['userInfo'])) {
            $this->userInfo = $result['userInfo'];
        }
        if ($this->use_cache_without_api && isset($result['session_id_for_user_agent_on_sso_domain'])) {
            $this->generateSSOToken($result['session_id_for_user_agent_on_sso_domain']);
        }

        $this->setP3PCookieForLogin();

        return $this->userInfo;
    }

    /**
     * Logout at sso server.
     *
     * @param string $jump      登出后跳转的地址, UCenterSSO需要的参数
     * @return array
     */
    public function logout($jump = null)
    {
        $this->attach(true);

        $result = $this->request('POST', 'sso/logout', compact('jump'));
        if (isset($result['error'])) {
            return $result;
        }
        if (isset($result['userInfo'])) {
            $this->userInfo = $result['userInfo'];
        }

        //这里不用刷新 SessionIDForUserAgentOnSSODomain

        $this->setP3PCookieForLogout();

        return $this->userInfo;
    }

    /**
     * Get user information.
     *
     * @return array userinfo
     */
    public function getUserInfo()
    {
        $this->attach(true);

        //避免同一个生命周期内重复获取
        if (!$this->gotUserInfo) {
            //尝试通过 $this->linked_sso_session_id 获取 sso-redis 里的 uid
            if ($this->use_cache_without_api && isset($this->linked_sso_session_id)) {
                $uidCacheKey = $this->generateUidCacheKey($this->linked_sso_session_id);
                $uid = $this->getCache($uidCacheKey);
                $userInfo = array();
                //linked_sso_session_id对应到了uid后通过uid去sso的缓存中获取用户信息
                if (is_numeric($uid) && $uid > 0) {
                    $userInfoCacheKey = $this->generateUserInfoCacheKey($uid);
                    $result = $this->getCache($userInfoCacheKey);
                    if (!is_numeric($result) && !empty($result)) {
                        $userInfo = $result;
	                    $this->gotUserInfo = true;
                    }
                }else{
	                //linked_sso_session_id没有对应到uid说明用户没有登录，那就不需要去sso中再获取了
	                $this->gotUserInfo = true;
                }
	            $this->userInfo = $userInfo;
            }
        }

        //避免同一个生命周期内重复获取
        if (!$this->gotUserInfo) {
        	//通过sdk去sso获取用户信息
            $result = $this->request('GET', 'sso/userInfo');
            $this->gotUserInfo = true;
            if (isset($result['error'])) {
                return $result;
            }
            if (isset($result['userInfo'])) {
                $this->userInfo = $result['userInfo'];
            }
            if ($this->use_cache_without_api && isset($result['session_id_for_user_agent_on_sso_domain'])) {
                $this->generateSSOToken($result['session_id_for_user_agent_on_sso_domain']);
            }
        }
        return $this->userInfo;
    }

    /**
     * Flush user information.
     *
     * @return array userinfo
     */
    public function flushUserInfo()
    {
        $this->attach(true);

        $result = $this->request('GET', 'sso/flushUserInfo');
        if (isset($result['error'])) {
            return $result;
        }
        if (isset($result['userInfo'])) {
            $this->userInfo = $result['userInfo'];
        }

        //这里不用刷新 SessionIDForUserAgentOnSSODomain

        return $this->userInfo;
    }

    /**
     * 给已注册手机号发送验证码
     *
     * @param integer $mobile      已注册亿邦会员的手机号
     * @return array|mixed
     * @throws \Exception
     */
    public function sendSMSCaptchaToMember($mobile)
    {
        $this->attach(true);

        if (is_null($mobile)) {
            throw new \InvalidArgumentException("mobile not specified");
        }

        return $this->request('POST', 'sso/send-sms-captcha-to-member', compact('mobile'));
    }

    /**
     * 已经手机注册的用户使用手机接收到的短信验证码登录
     *
     * @param integer $mobile      已注册亿邦会员的手机号
     * @param integer $smsCode     已注册亿邦会员的手机号接收到的短信验证码
     * @param int $rememberMe      是否要记住我,1记住,0不记住
     * @param string $jump         登录后跳转的地址, UCenterSSO需要的参数
     * @return array|mixed
     * @throws \Exception
     */
    public function loginViaSMSCaptcha($mobile, $smsCode, $rememberMe = 0, $jump = null)
    {
        $this->attach(true);

        if (is_null($mobile)) {
            throw new \InvalidArgumentException("mobile not specified");
        }
        if (is_null($smsCode)) {
            throw new \InvalidArgumentException("smsCode not specified");
        }

        $result = $this->request('POST', 'sso/login-via-sms-captcha', compact('mobile', 'smsCode', 'rememberMe', 'jump'));
        if (isset($result['error'])) {
            return $result;
        }
        if (isset($result['userInfo'])) {
            $this->userInfo = $result['userInfo'];
        }
        if ($this->use_cache_without_api && isset($result['session_id_for_user_agent_on_sso_domain'])) {
            $this->generateSSOToken($result['session_id_for_user_agent_on_sso_domain']);
        }

        $this->setP3PCookieForLogin();

        return $this->userInfo;
    }

    /**
     * 修改当前登录用户的密码
     *
     * @param string $new_password   新密码
     * @return array|mixed
     * @throws \Exception
     */
    public function changePassword($new_password)
    {
        $this->attach(true);

        if (is_null($new_password)) {
            throw new \InvalidArgumentException("password not specified");
        }

        return $this->request('POST', 'sso/change-password', compact('new_password'));
    }

    /**
     * 修改当前登录用户的绑定手机号
     *
     * @param integer $mobile      手机号
     * @param integer $smsCode     手机号接收到的短信验证码
     * @return array|mixed
     * @throws \Exception
     */
    public function changeMobile($mobile, $smsCode)
    {
        $this->attach(true);

        if (is_null($mobile)) {
            throw new \InvalidArgumentException("mobile not specified");
        }
        if (is_null($smsCode)) {
            throw new \InvalidArgumentException("smsCode not specified");
        }

        return $this->request('POST', 'sso/change-mobile', compact('mobile', 'smsCode'));
    }

    /**
     * 修改当前登录用户的用户信息(除了`手机号`和`密码`之外的字段)
     *
     * @param array $userinfo          附加的用户信息数组, 允许传入的字段见函数内的默认参数样例 $options, 每个字段都是可选的
     * @return array|mixed
     * @throws \Exception
     */
    public function setUserInfo($userinfo)
    {
        $this->attach(true);

        $options = array(
            'nickname' => '', //用户昵称, 服务侧对于空昵称这种情况会自行生成昵称
            'real_name' => '', //真实姓名
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

        return $this->request('POST', 'sso/set-userinfo', compact('nickname', 'real_name', 'sex', 'company_name', 'position', 'country', 'province', 'city', 'introduction'));
    }

    /**
     * 检查当前登录用户收到的消息的概况
     *
     * @return array|mixed
     * @throws \Exception
     */
    public function getNotificationInfo()
    {
        $this->attach(true);

        return $this->request('GET', 'sso/notification/info');
    }

    /**
     * 查看当前登录用户收到的私信, 支持分页
     *
     * @param integer $page  页数
     * @param integer $size  每页条数
     * @return array|mixed
     * @throws \Exception
     */
    public function getPrivateLetter($page, $size)
    {
        $this->attach(true);

        return $this->request('GET', 'sso/notification/private-letter', compact('page', 'size'));
    }

    /**
     * 查看当前登录用户收到的通知, 支持分页
     *
     * @param integer $page  页数
     * @param integer $size  每页条数
     * @return array|mixed
     * @throws \Exception
     */
    public function getSystemMessage($page, $size)
    {
        $this->attach(true);

        return $this->request('GET', 'sso/notification/system-message', compact('page', 'size'));
    }

    /**
     * 设置某些属于当前登录用户的通知为已读状态
     *
     * @param array $ids  属于当前登录用户的通知的编号数组
     * @return array|mixed
     * @throws \Exception
     */
    public function markNotificationAsRead(array $ids)
    {
        $this->attach(true);

        return $this->request('POST', 'sso/notification/mark-as-read', compact('ids'));
    }

    /**
     * 设置属于当前登录用户的所有评论通知为已读状态
     *
     * @return array|mixed
     * @throws \Exception
     */
    public function markCommentNotificationAsRead()
    {
        $this->attach(true);

        return $this->request('POST', 'sso/notification/mark-comment-as-read');
    }

    /**
     * 清理掉某些属于当前登录用户的通知
     *
     * @param array $ids  属于当前登录用户的通知的编号数组
     * @return array|mixed
     * @throws \Exception
     */
    public function clearNotification(array $ids)
    {
        $this->attach(true);

        return $this->request('POST', 'sso/notification/clear', compact('ids'));
    }



    /**
     * Magic method to do arbitrary request
     *
     * @param string $fn
     * @param array $args
     * @return mixed
     */
    public function __call($fn, array $args = array())
    {
        $sentence = strtolower(preg_replace('/([a-z0-9])([A-Z])/', '$1 $2', $fn));
        $parts = explode(' ', $sentence);

        $method = count($parts) > 1 && in_array(strtoupper($parts[0]), array('GET', 'DELETE'))
            ? strtoupper(array_shift($parts))
            : 'POST';
        $command = join('-', $parts);

        return $this->request($method, $command, $args);
    }

    /**
     * 写日志
     *
     * @param string $source 日志来源, 方便在实现类里区别处理日志
     * @param array $data
     */
    abstract protected function logger($source, array $data);


    /**
     * Serialize the value.
     *
     * @param  mixed  $value
     * @return mixed
     */
    protected function serialize($value)
    {
        return is_numeric($value) ? $value : serialize($value);
    }

    /**
     * Unserialize the value.
     *
     * @param  mixed  $value
     * @return mixed
     */
    protected function unserialize($value)
    {
        return is_numeric($value) ? $value : unserialize($value);
    }

    /**
     * 读取缓存的值
     *
     * @param string $cacheKey
     * @return mixed
     */
    protected function getCache($cacheKey)
    {
        return $this->unserialize($this->getCacheStringFromSSORedis($cacheKey));
    }

    /**
     * 从 SSO-REDIS 读取被缓存的字符串值
     *
     * @param string $cacheKey
     * @return string
     */
    abstract protected function getCacheStringFromSSORedis($cacheKey);


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

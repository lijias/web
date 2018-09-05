<?php
namespace app\api\controller;

use app\common\controller\Index as commonIndex;
use app\common\controller\User as commonUser;

use think\config;

class Index
{
    public function __construct()
    {
    }

    public function userInfo($type = 'json')
    {
        if (!in_array($type, ['json', 'xml'])) {
            $type = 'json';
        }

//        默认输出类型
        config::set('default_return_type', $type);

        $result = [
            'code' => '200',
            'result' => [
                'username' => 'lll',
                'useremail' => '1097786399@qq.com'
            ]
        ];

        return $result;
    }
}
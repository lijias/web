<?php
namespace app\admin\controller;

use app\common\controller\Index as commonIndex;
use app\common\controller\User as commonUser;

class Index
{
    public function __construct()
    {
//        当前模块配置
        config('adminAction', '阿特密');
    }

    public function index()
    {
//        当前方法配置
        config('adminIndex', 'index');
        dump(config());
        return 'admin Index index';
    }

    public function commonAdmin()
    {
        echo 'admin <br>';
        $commonIndex = new commonIndex();
        return $commonIndex->index();
    }

    public function commonUser()
    {
        $commonUser = new commonUser();
        return $commonUser->showName('阿特密');
    }

    public function adminConfig()
    {
        dump(config());
    }
}
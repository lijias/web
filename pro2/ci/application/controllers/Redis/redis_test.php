<?php
/**
 * Created by PhpStorm.
 * User: php_010
 * Date: 18/1/15
 * Time: 17:34
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Redis_test extends CI_Controller
{
    public function index()
    {
//        redis使用
        $r = new Redis();
        $r->connect('127.0.0.1', '6379');
        $r->ping();
//        获取存储的数据并输出
        $arList = $r->lrange("tutorial-list", 0, 15);
        if (!in_array("Redis", $arList)) {
            $r->lpush("tutorial-list", "Redis");
        }
        if (!in_array("Mongodb", $arList)) {
            $r->lpush("tutorial-list", "Mongodb");
        }
        if (!in_array("Mysql", $arList)) {
            $r->lpush("tutorial-list", "Mysql");
        }
        $name = $r->get('username');
        print_r($arList);
    }

    public function del_redis()
    {
        $r = new Redis();
        $r->connect('127.0.0.1', '6379');
        $r->ping();
        $r->del('tutorial-list');
    }
}
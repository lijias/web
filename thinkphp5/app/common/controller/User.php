<?php
namespace app\common\controller;
/**
 * Created by PhpStorm.
 * User: php_010
 * Date: 18/3/21
 * Time: 17:13
 */
class User
{
    public function showName($name = '')
    {
        return "My name is {$name}";
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: php_010
 * Date: 18/5/14
 * Time: 09:34
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Array_test extends CI_Controller
{
    public function arr_test()
    {
//        数组根据num字段排序
        $data[] = array('num' => '66', 'id' => 1);
        $data[] = array('num' => '88', 'id' => 2);
        $data[] = array('num' => '78', 'id' => 3);
        $data[] = array('num' => '95', 'id' => 4);
        $data[] = array('num' => '66', 'id' => 5);
        $data[] = array('num' => '45', 'id' => 6);

        $new_arr = [];
        $num = 1;

        $len = count($data);

        for ($i = 0; $i < $len; $i++) {
            for ($j = $num; $j < $len; $j++) {
                if ($data[$i]['num'] < $data[$j]['num']) {
                    $new_arr = $data[$j];
                    $data[$j] = $data[$i];
                    $data[$i] = $new_arr;
                }
            }
            $num++;
        }
        print_r($data);
    }
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * 报表
 */

class Echarts extends CI_Controller
{
//    中国地图
    public function map()
    {
        $this->load->view('echart/map');
    }

//    饼状图
    public function pie()
    {
        $this->load->view('echart/pie');
    }

//    柱状图
    public function bar()
    {
        $this->load->view('echart/bar');
    }

//    柱状图信息
    public function bar_search()
    {
//        $this->load->model("account_mdl");
//        $result = $this->account_mdl->search_account();
        $start = '';
        $end = '2017-09-01';
        $end_time = date("Y-m-d H:i:s", strtotime($end) + 86399);
        if (isset($start) && $start == '' && isset($end) && $end == '') {
            $start = date('Y-m-d', (time() - 2678400));
            $end = date('Y-m-d', time());
        } else if (isset($start) && $start != '' && isset($end) && $end == '') {
            $end = date("Y-m-d", time());
            $end_time = date("Y-m-d H:i:s", time());
        } else if (isset($start) && $start == '' && isset($end) && $end != '') {
            $start = '2016-03-01';
        }
        $s = strtotime($start);
        $e = strtotime($end);
        $arr = [];
        array_push($arr, $start);
        $count = ($e - $s) / 60 / 60 / 24;
        for ($i = 0; $i < $count; $i++) {
            $t = date("Y-m-d", ($s + 86400));
            array_push($arr, $t);
            $s = $s + 86400;
        }
        /*array_push($arr, $end);
        if (count($arr) < 31) {
            $disparity = 31 - count($arr) + 1;
            for ($j = 0; $j < $disparity; $j++) {
                $et = date("Y-m-d", ($e + 86400));
                array_push($arr, $et);
                $e = $e + 86400;
            }
        }*/
        $this->load->model('Blog_model');
        $arr1 = $this->Blog_model->search_activity($start, $end_time);
        $result = [];
        $c = count($arr);
        $c1 = count($arr1);
        for ($i = 1; $i <= ($c - $c1); $i++) {
            array_push($arr1, array('zs' => '', 'data_date' => ''));
        }
        foreach ($arr1 as $key => $val) {
            foreach ($arr as $k => $v) {
                if ($val['data_date'] == $v) {
                    $result[$k]['date'] = $val['data_date'];
                    $result[$k]['zs'] = $val['zs'];
                } else {
                    $result[$k]['date'] = $v;
                }
                if (isset($result[$k]['date']) && !isset($result[$k]['zs'])) {
                    $result[$k]['zs'] = 0;
                }
            }
        }
        $data = json_encode($result);
        echo $data;
    }
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * gd库画柱形图
 */
class zPicture extends CI_Controller
{
    var $title; // 定义标题
    var $ydata; // 定义Y轴数据
    var $xdata; // 定义X轴数据

    public function index()
    {
        $config = array(
            'title' => '测试',
            'xdata' => array('AAAAA', 'BBBBB', 'CCCCC', 'DDDDD', 'EEEEEE', 'FFFFFF', 'GGGGGGG', 'HHHHHHHHH', 'IIIIIIIIIIIIII', 'JJJJJJJJJJJ', 'KKKKKKKK', ''),
//                                     'ydata'=>array(array(600, 300, 30, 500, 400, 250, 350, 360,532,459,44),array(600, 300, 30, 500, 400, 250, 350, 360,532,459,44),array(600, 300, 30, 500, 400, 250, 350, 360,532,459,44))
            'ydata' => array(600, 300, 30, 500, 400, 250, 350, 360, 532, 459, 44)
        );
        //加载library中的画柱状图公共类
        $this->load->library('Chart', $config);
        $this->chart->mkBarChart();
    }
}


<?php
/*
 * 高德地图
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Gaode extends CI_Controller
{

    public function index()
    {
        $address = [
            [
                'localtion' => [
                    'lon' => 113.273805,
                    'lat' => 23.095454
                ],
                'title' => '富力海珠城',
                'status' => 1
            ],
            [
                'localtion' => [
                    'lon' => 113.26989,
                    'lat' => 23.105996
                ],
                'title' => '市二宫(地铁站)',
                'status' => 2

            ],
            [
                'localtion' => [
                    'lon' => 113.23275,
                    'lat' => 23.121314
                ],
                'title' => '荔湾湖公园',
                'status' => 2
            ],
            [
                'localtion' => [
                    'lon' => 113.266379,
                    'lat' => 23.172775
                ],
                'title' => '万达广场(白云店)',
                'status' => 1
            ],
            [
                'localtion' => [
                    'lon' => 113.384796,
                    'lat' => 23.097712
                ],
                'title' => '万胜围(地铁站)',
                'status' => 1
            ],
            [
                'localtion' => [
                    'lon' => 113.234189,
                    'lat' => 23.117751
                ],
                'title' => '广州医科大学附属第三医院',
                'status' => 1
            ]
        ];

        $data['add'] = $address;
        $data['address'] = json_encode($address);

        $this->load->view('test5', $data);
    }


}


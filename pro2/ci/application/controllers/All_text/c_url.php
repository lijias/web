<?php

/**
 * Created by PhpStorm.
 * User: php_010
 * Date: 18/5/14
 * Time: 14:37
 */
class C_url extends CI_Controller
{
    public function index()
    {
        $posturl = site_url('All_text/C_url/testpost');
//        设置post数据
        $post_data = array(
            "content" => "111啦啦啦",
            "user" => "coder"
        );
        $geturl = site_url('All_text/C_url/testget?id=10');
        //初始化
        $curl = curl_init();
        //设置抓取的url
        curl_setopt($curl, CURLOPT_URL, $posturl);
        //设置头文件的信息作为数据流输出
//        curl_setopt($curl, CURLOPT_HEADER, 1);
        //设置获取的信息以文件流的形式返回，而不是直接输出。
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        if (isset($posturl)) {
            //设置post方式提交
            curl_setopt($curl, CURLOPT_POST, 1);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $post_data);
        }

        //执行命令
        $data = curl_exec($curl);
        //关闭URL请求
        curl_close($curl);
        //显示获得的数据
        print_r($data);
    }

    public function testpost()
    {
        $data = $_POST;
//       辨认有没有中文
        $pattern = '/[^\x00-\x80]/';
        if (preg_match($pattern, $data['content'])) {
            echo mb_strlen($data['content']);
        } else {
            echo strlen($data['content']);
        }
    }

    public function testget()
    {
        $data = $_GET;
        print_r($data);
    }

    public function tuxiang()
    {
        $app_id = '5b330a2d';
        $api_key = 'f79b8f1ed2b8ee52d95ee337c8cc39c5';
        $param = array(
            'language' => 'en',
            'location' => 'false',
        );
        $param = json_encode($param);
        $param = str_replace(" ", "", $param);
        $x_param = base64_encode($param);
        $cur_time = time();
        //Body
        $file_path = 'http://tmp/wx0053667b916ec86f.o6zAJs1r7x4FepdLrwMDIDEgwBwg.QFL6XQWYnUSu091f9b05df6e23398f24976552138fe3.jpg';
        $file = file_get_contents($file_path);
        $body = base64_encode($file);
        $body_data = "image=" . urlencode($body);
        $header_data = array(
            'X-Appid' . ":" . $app_id,
            'X-CurTime' . ":" . $cur_time,
            'X-Param' . ":" . $x_param,
            'X-CheckSum' . ":" . md5($api_key . $cur_time . $x_param),
        );

        $url = "http://webapi.xfyun.cn/v1/service/v1/ocr/general";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_POST, TRUE);//设置为POST方式
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header_data);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $body_data);

        $result = curl_exec($ch);
        curl_close($ch);

        print_r($result);
    }

    public function yinpin()
    {
        $app_id = '5b330a2d';
        $api_key = '4d011a418d652f6a3d644a3c761db7ca';
        $param = [
            'engine_type' => 'sms16k',
            'aue' => 'raw',
        ];
        $param = json_encode($param);
        $param = str_replace(" ", "", $param);
        $x_param = base64_encode($param);
        $cur_time = time();
        //Body
        $file_path = 'uploads/12.wav';
        $file = file_get_contents($file_path);
        $body = base64_encode($file);
        $body_data = "audio=" . urlencode($body);
        $header_data = array(
            'X-Appid' . ":" . $app_id,
            'X-CurTime' . ":" . $cur_time,
            'X-Param' . ":" . $x_param,
            'X-CheckSum' . ":" . md5($api_key . $cur_time . $x_param),
        );

        $url = "http://api.xfyun.cn/v1/service/v1/iat";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_POST, TRUE);//设置为POST方式
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header_data);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $body_data);

        $result = curl_exec($ch);
        curl_close($ch);

        print_r($result);
    }

    function test()
    {
        $str1 = '{"code":"0","data":{"block":[{"type":"text","line":[{"confidence":1,"word":[{"content":"【批准文号】网药准字220026341"}]},{"confidence":1,"word":[{"content":""}]},{"confidence":1,"word":[{"content":"天参胶囊"}]},{"confidence":1,"word":[{"content":"TIAN"},{"content":"SHEN"},{"content":"JIAO"},{"content":"NA"}]},{"confidence":1,"word":[{"content":""}]},{"confidence":1,"word":[{"content":""}]},{"confidence":1,"word":[{"content":"《三路防业银行有限公司"}]},{"confidence":1,"word":[{"content":""}]},{"confidence":1,"word":[{"content":""}]},{"confidence":1,"word":[{"content":""}]}]}]},"desc":"success","sid":"wcr00002787@gz4def0e94d749460e00"}';

        $str2 = '{"code":"0","data":{"block":[{"type":"text","line":[]}]},"desc":"success","sid":"wcr00002835@gz4def0e94de41460e00"}';
//        json_decode加上第二个参数true即转换为数组
        $array1 = json_decode($str1, TRUE);
        $array2 = json_decode($str2, TRUE);

        $new_arr = [];

        if ($array1['desc'] == 'success' && !empty($array1['data']['block'][0]['line'])) {
            $arr = $array1['data']['block'][0]['line'];
            foreach ($arr as $key => $val) {
                if (count($val['word']) == 1) {
                    if (!empty($val['word'][0]['content'])) {
                        array_push($new_arr,trim($val['word'][0]['content']) );
                    }
                } else {
                    foreach ($val['word'] as $k => $v) {
                        if (!empty($v['content'])) {
                            array_push($new_arr, trim($v['content']));
                        }
                    }
                }
            }
        }
        print_r($new_arr);

        '[{"id":"3","section_id":"13","name":"\u5929\u53c2\u80f6\u56ca","product_num":null,"price":"30.00","created_at":"2018-07-02 11:33:31","is_on_sale":"0","on_sale_at":"2018-07-02 11:33:31","is_commend":"0","is_vip":"0","updated_at":"2018-07-02 11:33:31","is_delete":"0","send_score":"0","sales_volume":"0","limit_quantity":"0","share_mode":"0","rebate1":null,"rebate2":null,"rebate3":null,"sort_order":"0","allow_aftersales":"0","after_sales_desc":null,"return_goods_desc":"","short_desc":null,"desc":null,"goods_img":null,"goods_thumb":null,"recipe":"0","app_id":"1","product_id":"3","stock":"10","freight":"0"}]';
    }
}
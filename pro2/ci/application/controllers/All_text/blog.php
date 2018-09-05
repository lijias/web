<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller
{
    public function upload()
    {

        $path = $_FILES['File1'];
        // [tmp_name] => /Applications/MAMP/tmp/php/php5HP
        $filePath = "uploads/" . $path["name"];
        //print_r($filePath);exit;
        move_uploaded_file($path["tmp_name"], $filePath);

        //$data=array('B'=>'name','C'=>'pwd','D'=>'money1','E'=>'salt');
        $data = array('A' => 'id', 'B' => 'title', 'C' => 'description', 'D' => 'content', 'E' => 'wapContent', 'F' => 'nodeId', 'G' => 'nodeName', 'H' => 'resourcePath', 'I' => 'author', 'J' => 'mediaName', 'K' => 'showApprovedTime', 'L' => 'keywords', 'M' => 'releaseFullName', 'N' => 'nodeLevel2', 'O' => 'nodeLevel3', 'P' => 'nodeLevel4');
        $tablename = 'new';//表名字
        $this->excel_fileput($filePath, $data, $tablename);
    }

    private function excel_fileput($filePath, $data, $tablename)
    {
        $this->load->library('PHPExcel');
        $this->load->library('PHPExcel/IOFactory');//ci框架中引入excel类
//        $PHPExcel = new PHPExcel();
        $PHPReader = new PHPExcel_Reader_Excel2007();
        if (!$PHPReader->canRead($filePath)) {
            $PHPReader = new PHPExcel_Reader_Excel5();
            if (!$PHPReader->canRead($filePath)) {
                echo 'no Excel';
                return;
            }
        }
        // 加载excel文件
        $PHPExcel = $PHPReader->load($filePath);

        // 读取excel文件中的第一个工作表
        $currentSheet = $PHPExcel->getSheet(0);
        // 取得最大的列号
        $allColumn = $currentSheet->getHighestColumn();
        // 取得一共有多少行
        $allRow = $currentSheet->getHighestRow();

        // 如果从第二行开始输出，将$currentRow = 1改为$currentRow = 2
        for ($currentRow = 1; $currentRow <= $allRow; $currentRow++) {
            /**从第A列开始输出*/
            //echo $allColumn;

            for ($currentColumn = 'A'; $currentColumn <= $allColumn; $currentColumn++) {
                $val = $currentSheet->getCellByColumnAndRow(ord($currentColumn) - 65, $currentRow)->getValue();
                // print_r($currentColumn);
                // die;
                $data1[$currentColumn] = $val;

                //  如果第一行为列名解除注释
                //  if($currentColumn == 'A')
                //  {
                //      echo $val."\t";
                //  }else if($currentColumn <= $allColumn){
                //      $data1[$currentColumn]=$val;
                //  }
            }

            foreach ($data as $key => $val) {
                $data2[$val] = $data1[$key];
            }
//             print_r($data2);
            $this->load->model('Blog_model');
            $this->Blog_model->orginal_url = $data2["releaseFullName"];
//             if ($this->Blog_model->has_url())
//             {
//                 continue;
//             }
            $this->Blog_model->pristine_id = $data2["id"];
            $this->Blog_model->title = $data2["title"];
            $this->Blog_model->content = $data2["content"];
            $this->Blog_model->created_at = date("Y-m-d H:i:s", time());
            // 转化时间格式
            $dataValue = date('Y-m-d H:i:s', PHPExcel_Shared_Date::ExcelToPHP($data2["showApprovedTime"]));
            $this->Blog_model->publish_at = $dataValue;
            $this->Blog_model->author = $data2["author"];
            $keywords = $data2["keywords"];
            $keys = explode(',', $keywords);
            foreach ($keys as $key => $val) {
                $t_id = $this->Blog_model->is_exists($val);
                if (!$t_id) {
                    $this->Blog_model->tag = $val;
                    $t_id = $this->Blog_model->create();
                }
//                 $this->Blog_model->add_content($t_id);
                $tag_ids[$key] = $t_id;
            }
            $this->Blog_model->id_tags = implode(',', $tag_ids);
            $this->Blog_model->source = $data2["mediaName"];
            $this->Blog_model->img_path = $data2["resourcePath"];
            $channel = $data2["nodeLevel2"];
            $c_id = $this->Blog_model->find_channel($channel);
            if (!$c_id) {
                $c_id = $this->Blog_model->create_channel($channel);
            }
            $c_id4[$currentRow][] = $c_id;
            $channel2 = $data2["nodeLevel3"];
            if ($channel2 != '') {
                $c_id2 = $this->Blog_model->find_channel($channel2);
                if (!$c_id2) {
                    $c_id2 = $this->Blog_model->add_channel($channel2, $c_id);
                }
                $c_id4[$currentRow][] = $c_id2;
            }

            $channel3 = $data2["nodeLevel4"];
            if ($channel3 != '') {
                $c_id3 = $this->Blog_model->find_channel($channel3);
                if (!$c_id3) {
                    $c_id3 = $this->Blog_model->add_channel($channel3, $c_id2);
                }
                $c_id4[$currentRow][] = $c_id3;
            }

            $this->Blog_model->ids_channel = ',' . implode(',', $c_id4[$currentRow]) . ',';
            $id = $this->Blog_model->create_new();
//             exit;
            //print_r($data2);
            //echo "</br>";
        }
        //echo "\n";
        $url = site_url('blog/phpexecl');
        echo "导入成功<br>";
        echo '<a href=' . $url . '>返回phpexecl</a>';
    }

    public function download()
    {

        $this->load->model('Blog_model');
        $query = $this->Blog_model->fz();

        $arr = array(array('日期', '小时', '总数'));
//         foreach ($query as $k=>$v)
//         {
//             $arr[$k+1]=$v; 
//         }
//         echo '<pre>';
        array_splice($arr, 1, 0, $query);
//         print_r($arr);exit;
        $this->load->library('PHPExcel');
        $this->load->library('PHPExcel/IOFactory');

        $excel = new PHPExcel();

        $sheet = $excel->getActiveSheet(); //获取当前活动表格标签
        $sheet->setTitle('demo');

//         $arr = array(
//            array('张敏',20,1,87),
        // array('冯德伦',34,1,64),
        // array('朱咪咪',56,2,33),
        // array('汤姆斯',40,2,76),
        // array('杰克逊',60,1,64),
        // array('黑龙',40,2,26),
//         );
        $sheet->fromArray($arr);


        $write = new PHPExcel_Writer_Excel2007($excel);
        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control:must-revalidate, post-check=0, pre-check=0");
        header("Content-Type:application/force-download");
        header("Content-Type:application/vnd.ms-execl");
        header("Content-Type:application/octet-stream");
        header("Content-Type:application/download");
        header('Content-Disposition:attachment;filename="test.xlsx"');
        header("Content-Transfer-Encoding:binary");
        $write->save('php://output');
        //$this->load->view('index/load');
    }

    public function phpexecl()
    {
        $this->load->view('index/execl');
    }

    public function text()
    {
        var_dump($_POST);
    }

    public function form()
    {

        $this->load->view('index/form');
    }

    public function textredirect()
    {
        if (true) {
            redirect('welcome');
        }
    }

    public function index()
    {
        $data['title'] = "My Real Title";
        $data['heading'] = "My Real Heading";
        $data['age'] = array(1, 2, 3, 4, 5);
        $data['username'] = 'Tom';
        //可以把整个页面放到你的页面上
        //$string = $this->load->view('welcome_message','',true);
        //echo $string;

//         echo '<pre>';
//         print_r($_SERVER);
//         echo '<pre/>';

        //到入口文件                 已使用自动链接，自动连接在autoload.php，$autoload['helper'] = array('url');
        $data['url1'] = site_url();
        //到根目录
        $data['url2'] = base_url();

        //链接数据库
        // $this->load->database(); 已使用自动链接，自动连接在autoload.php，$autoload['libraries'] = array('database');

        //实例化blog_model模型
        $this->load->model('Blog_model');
        //增
        //$this->Blog_model->insert_student();
        //当执行 INSERT 语句时，这个方法返回新插入行的ID。
        //$this->db->insert_id();
        //改
        //$this->Blog_model->update_student();
        //当执行 INSERT、UPDATE 等写类型的语句时，这个方法返回受影响的行数。
        //$this->db->affected_rows()
        //删
        //$this->Blog_model->delete_student();
        //查询
//        $data['query'] = $this->Blog_model->get_student();
        //返回上一次执行的查询语句
        //$str1 = $this->db->last_query();
        //该方法用于获取数据表的总行数,要写表名
        //echo $this->db->count_all('student');
        //该方法输出你正在使用的数据库平台（MySQL，MS SQL，Postgres 等）:
        //echo $this->db->platform();
        //该方法输出你正在使用的数据库版本:
        //echo $this->db->version();
        //echo $str1;
//         echo "<hr/>";

        //获取url中的信息
        //$params = $this->uri->uri_to_assoc();
        //echo $params['name'];
        //echo '<hr/>';

        //使用类库中的myclass.php
        $p = array('type' => 'large', 'color' => 'red');
        $this->load->library('myclass', $p);//第二参数回传数据到myclass.php的构造方法
//         $this->myclass->some_method();

//         echo "<hr/>";

        // array_values()函数能把一维关联数组转换为一维索引数组;
//         echo '<pre>';
//         print_r($data);
//        foreach ($data['query'] as $key => $value)
//        {
//            for ($i=0; $i <= $key; $i++)
//            {
//                $arr[$i]=array_values($data['query'][$i]);
//            }
//        }


        // $e = array('name' =>'' ,'age' => '','class' =>'','score' =>'');
        // foreach ($arr as $key1 => $value1)
        // {
        //     foreach ($value1 as $key2 => $value2)
        //     {
        //        $a[$key1][]
        //     }
        // }
        // echo '<pre>';
        // print_r($e);

        $arr = array(
            0 => 'id=1',
            1 => 'name=test'
        );

        $arr2 = array();
        parse_str(implode('&', $arr), $arr2);

//         var_dump($arr2);
        //调用system/core/common.php的自定义的方法
        // pri($this->Blog_model->get_student());
        $this->load->view('index/blog', $data);

        // $str="";
        // if($str=="")
        // {
        //     echo 'y';
        // }
        // else
        // {
        //     echo 'no';
        // }
        // echo '<hr/>';

        //公共函数 判断当前运行的 PHP 版本是否高于或等于你提供的版本号。
//         var_dump(is_php('5.3'));
//         echo '<hr/>';

//         echo strrpos("You love php, I love php too!","php");

//         $this->benchmark->mark('dog');
//         $this->benchmark->mark('cat');
//         $this->benchmark->mark('bird');

//         echo $this->benchmark->elapsed_time('dog', 'cat');
//         echo $this->benchmark->elapsed_time('cat', 'bird');
//         echo $this->benchmark->elapsed_time('dog', 'bird');
        // $this->load->library('calendar');
        // $data = array(
        //                  3  => 'http://example.com/news/article/2006/06/03/',
        //                  7  => 'http://example.com/news/article/2006/06/07/',
        //                  13 => 'http://example.com/news/article/2006/06/13/',
        //                  26 => 'http://example.com/news/article/2006/06/26/'
        //              );

        //  echo $this->calendar->generate(2017, 3, $data);

    }

    public function home()
    {
        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');

        $this->form_validation->set_rules('username', 'Username', array('required', 'min_length[5]'));
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('index/home');
        } else {
            $this->load->view('index/formsuccess');
        }
    }

    public function message($to = 'John Smith')
    {
        echo "Hello {$to}!";
    }

    public function page()
    {
        $this->load->library('Page');
        $this->page->init(10, 2);
        $data['pagination'] = $this->page->show();
        $this->load->view('index/home', $data);
    }

    //接口
    public function jk()
    {
        $api_data = array(
            'username' => '叶泽',
            'password' => '123456'
        );
        $url = site_url('All_text/blog/register');
        $j = $this->actionPost($url, $api_data);
        $json = json_encode($j, true);
        echo $json;
    }

    public function register()
    {
        //isset表示这个变量是否存在
        if (isset($_POST['username']) && isset($_POST['password'])) {
            $this->load->database();//加载数据库类
            $username = $_POST['username'];//获取传上来的username
            $password = $_POST['password'];//获取传上来的password
            $sql = "SELECT admin_id,admin_name FROM pre_admin where admin_name = ?";
            $user = $this->db->query($sql, array($username));//执行sql语句
            $user = $user->result_array();//转换成数组
            if (count($user) == 0) { //数量为0，即表示用户不存在
                $sql1 = "INSERT INTO pre_admin(admin_name,admin_password) VALUES(?,?)";
                $this->db->query($sql1, array($username, md5($password)));//插入
                $id = $this->db->insert_id();//获取插入的行号，即id
                $user = $this->db->query($sql, array($username));
                $user = $user->result_array();//再查询一次数据库
                if (count($user) != 0) {//如果有数据，即表明插入成功
                    $viewArray = array("jsonArray" => $user[0]);//获取数组第一个对象，即插入成功的用户信息
                    ob_start();//开启缓存
                    $this->load->view('json/json', $viewArray);//输出信息到json.php视图
                    ob_end_flush();//关闭缓存
                    exit();//退出
                }
            } else {
                //如果有数据，即表明插入成功
                $viewArray = array("jsonArray" => $user[0]);//获取数组第一个对象，即插入成功的用户信息
                ob_start();//开启缓存
                $this->load->view('json/json', $viewArray);//输出信息到json.php视图
                ob_end_flush();//关闭缓存
                exit();//退出
            }
        } else {
            $viewArray = array("errorMsg" => "user exist");//打印错误信息
            $this->load->view("json/jsonerror", $viewArray);
            return;
        }
    }

    public function actionPost($url, $data)
    {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);//需要获取的URL地址
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
        //检查证书中是否有CN(common name)字段
        curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
        //访问头部
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($curl, CURLOPT_AUTOREFERER, 1);
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        curl_setopt($curl, CURLOPT_COOKIEFILE, 'cookie.txt');
        curl_setopt($curl, CURLOPT_TIMEOUT, 30);
        curl_setopt($curl, CURLOPT_HEADER, 0);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $tmpInfo = curl_exec($curl);
        if (curl_errno($curl)) {
            echo 'Errn' . curl_error($curl);
            exit;
        }
        curl_close($curl);
        return $tmpInfo;
    }

    public function layui()
    {
        print_r($_POST);
    }

}
<?php

class IndexController extends Controller
{
    public function indexAction()
    {
        $this->display("index.html");
    }

    public function addAction()
    {
        $message = APP.'/Index/select';
        $data['username'] = $_POST['username'];
        $data['leaveword'] = $_POST['content'];
        $data['time'] = date("Y-m-d H:i:s", time());
        $result = M('infos')->insert($data);
        if ($result) {
            $this->success('成功',$message);
        } else {
            $this->success('失败',$message);
        }
    }

    public function selectAction()
    {
        $result = M('infos')->select();
//        print_r($result);
        $this->assign('result',$result);
        $this->display("search.html");
    }
}

?>
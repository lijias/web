<?php
namespace app\index\controller;

use app\common\controller\Index as commonIndex;
use app\common\controller\User as commonUser;

use think\config;
use think\Request;
use think\Controller;
use think\View;
use think\Db;

use think\Loader;
use app\index\model\Admin;

//use think\Env;

class Index extends Controller
{
    public function index()
    {
        return 'index Index index';
    }

    public function commonIndex()
    {
        echo 'index <br>';
        $commonIndex = new commonIndex();
        return $commonIndex->index();
    }

//    公共方法
    public function commonUser()
    {
        $commonUser = new commonUser();
        return $commonUser->showName('因特斯');
    }

//    配置
    public function indexConfig()
    {
//        方法一(需要写 use think\config;)
//        $res = '';
//        config::set('abc', '1', 'index');
//        if (config::has('abc', 'index')) {
//            $res = config::get('abc', 'index');
//        }

//        方法二(使用tp助手函数)
        $res = '';
        config('abc', '2');
        if (config('?abc')) {
            $res = config('abc');
        }
        dump($res);
    }

//    环境变量
    public function env()
    {
        print_r(config::get());
    }

//    路由
    public function rout($id)
    {
        echo $id;
        echo url('index/index/rout', ['id' => $id]);
    }

//    4-1 请求对象获取
    public function req(Request $request)
    {
//        方法1
//        $request = request();

//        方法2
//        $request = Request::instance();

        print_r($request->root());
    }

//    4-2
    public function req2(Request $request)
    {
//        获取流浪器输入框的值
        dump($request->url());
        dump($request->baseUrl());
        dump($request->path());
        dump($request->pathinfo());
        dump($request->domain());
        dump($request->root());

//        请求的类型
        dump($request->method());
        dump($request->isGet());
        dump($request->isPost());
        dump($request->isAjax());

//        请求的参数
        dump($request->get());
        dump($request->param());
        dump($request->post());
//        session('name','li');
        dump($request->session());
//        cookie('pwd','123');
        dump($request->cookie());

        dump($request->param('id'));
        dump($request->session('name'));

//        获取模块 控制器 方法
        dump($request->module());
        dump($request->controller());
        dump($request->action());
    }

//    4-3
    public function req3()
    {
//        url(http://thinkphp.com/index.php/index/index/req3/type/5?id=3)
        dump(input());
        dump(input('get.id'));
        dump(input('post.name'));
//        默认值
        dump(input('post.names', 'james'));
        dump(input('post.ids', '100', 'intval'));
//        session('email', '1097786399@qq.com');
        dump(input('session.email'));
//        session('emails', '  1515096301@qq.com   ');
        dump(input('session.emails', '', 'trim'));
    }

//    5-1
    public function view1()
    {
//        方法1
//        视图路径为:/app/index/view/index/view1.html
//        return view();
//        视图路径为:/app/index/view/index/index.html
//        return view('index');
//        视图路径为:/app/index/view/index/upload.html
//        return view('index/upload');
//        视图路径为:/public/123.html
//        return view('./123.html');
//        视图路径为:/public/html/123.html
//        return view('./html/123.html');

//        方法2(建议使用)
//        视图路径为:/app/index/view/index/view1.html
//        $this->fetch();
//        视图路径为:/app/index/view/index/index.html
//        return $this->fetch('index');
//        视图路径为:/app/index/view/index/upload.html
//        return $this->fetch('index/upload');
//        视图路径为:/public/123.html
//        return $this->fetch('./123.html');
//        视图路径为:/public/html/123.html
//        return $this->fetch('./html/123.html');

//        方法3
//        该方法等于使用控制器写页面,不建议使用
//        $this->assign('user', '用户');
//        $this->assign('age', '年龄');
//        return $this->display('{$user}index{$age}');

//        传递参数
//        方法1
//        $data = ['user' => 'lll', 'age' => '18'];
//        第二个参数为需要传递到视图的数据
//        return $this->fetch('index', $data);
//        第三个参数个第二个参数用途相同(注意:如果需要修改内容,需在html中删除重新再写一次)
//        $third = ['STATIC' => '这是第三个参数传递的内容'];
//        return $this->fetch('index', $data, $third);

//        方法2
//        使用$this->assign()方法传递数据
        $this->assign('user', 'name');
        $this->assign('age', '19');
        $this->assign('title', 'index');
        return $this->fetch('index');
    }

//    5-2
    public function view2()
    {
//        传递参数
//        方法3
//        $this->view->key = 'val';

//        方法4
        View::share('key', 'val');
        $this->assign('title', '5-2');
        return $this->fetch('5-2', [], ['__UP__' => '/uploads']);
    }

//    5-3
    public function view3()
    {
//        session('name', 'edc');
//        cookie('age', 19);
        $this->assign('title', '5-3');
        return $this->fetch('5-3');
    }

//    5-4
    public function view4()
    {
        $this->assign('pwd', '12345');
        $this->assign('a', '1');
        $this->assign('b', '2');
        $this->assign('c', '3');
        $this->assign('title', '5-4');
        return $this->fetch('5-4');
    }

//    5-5
    public function view5()
    {
        $data = [
            ['name' => '一', 'age' => 18],
            ['name' => '二', 'age' => 31],
            ['name' => '三', 'age' => 54],
            ['name' => '四', 'age' => 46],
        ];
        $this->assign('data', $data);
        $this->assign('title', '5-5');
        return $this->fetch('5-5');
    }

//    5-6
    public function view6()
    {
        $this->assign('a', 10);
        $this->assign('b', 10);
        $this->assign('title', '5-6');
        return $this->fetch('5-6');
    }

//    5-7
    public function view7()
    {
        $this->assign('title', '5-7');
        return $this->fetch('5-7');
    }

//    5-8
    public function view8()
    {
        $this->assign('title', '5-8');
        return $this->fetch('5-8');
    }

//    模型
    public function mod1()
    {
//        dump(config::get('database'));
        $res = Db::connect();
        dump($res);
    }

    public function mod2()
    {
//        select 返回所有记录 返回的结果是一个二维数组
//        如果结果不存在 返回一个空数组
//        eg:
//        $res = Db::table('pre_admin')->select();

//        column 返回一个一维数组 数组中的value值就是我们要获取的值
//        如果存在第二个参数 就返回这个数组并且用第二个参数的值
//        如果结果不存在返回空数组
//        eg:
//        $res = Db::table('pre_admin')->column('admin_name', 'admin_password');

//        find返回一条记录 返回的结果是一个一维数组
//        如果结果不存在 返回 NULL
//        $res = Db::table('pre_admin')->find();

//        value 返回一条记录 并且是记录的某个字段值
//        如果结果不存在 返回NULL
//        $res = Db::table('pre_admin')->value('admin_name');

//        使用name不需写表前缀(提示:必须在config中填写表前缀)
//        $res = Db::name('admin')->select();

        $res = db('admin', [], false)->select();
        print_r($res);

    }

    public function mod3()
    {
//        新增
        $db = Db::name('admin');

//        原始写法
//        Db::execute('insert into pre_admin set admin_name=?,admin_password=?,admin_type=?',
//            [
//                '猪兜',
//                md5(12345),
//                '1'
//            ]);

//        成功返回受影响行数
//        $res = $db->insert([
//            'admin_name' => '麦兜',
//            'admin_password' => md5(12345),
//            'admin_type' => '1'
//        ]);

//        成功返回当前记录id
//        $res = $db->insertGetId([
//            'admin_name' => '麦田',
//            'admin_password' => md5(12345),
//            'admin_type' => '1'
//        ]);

//        成功返回受影响行数
        $data = array();
        for ($i = 1; $i <= 10; $i++) {
            $data[] = [
                'admin_name' => $i,
                'admin_password' => md5(12345),
                'admin_type' => '1'
            ];
        }
        $res = $db->insertAll($data);

        print_r($res);
    }

    public function mod4()
    {
//        编辑
        $db = Db::name('admin');

//        成功返回受影响行数
//        $res = $db->where('admin_id', 13)->update([
//            'admin_name' => '一'
//        ]);

//        成功返回受影响行数
        $res = $db->where('admin_id', 14)->setField('admin_name', '二');

//        自增(第二个参数为每次自增的数量,若没填则为1)
//        $res = $db->where('admin_id',14)->setInc('admin_type');

//        自减(第二个参数为每次自减的数量,若没填则为1)
//        $res = $db->where('admin_id',14)->setDec('admin_type');

        print_r($res);
    }

    public function mod5()
    {
//        删除
        $db = Db::name('admin');

//        方法1
//        $res = $db->where('admin_id',22)->delete();

//        方法2(注意:只有以主键为条件的删除才能使用这种方法)
//        $res = $db->delete(21);

//        删除全部内容(不建议使用)
//        $res = $db->where('1=1')->delete();

//        print_r($res);
    }

    public function mod6()
    {
//        条件构造器
        $db = Db::name('admin');

        #备注信息
        #EQ =
        #NEQ <>
        #LT <
        #ELT <=
        #$GT >
        #EGT >=
        #BETWEEN BETWEEN * AND *
        #NOTBETWEEN NOTBETWEEN * AND *
        #IN IN (*,*)
        #NOTIN NOT IN (*,*)

//        $sql = $db->where('admin_id', 'in', [1, 2, 3])->buildSql();

//        $sql = $db->where('admin_id', 'between', '1,3')->buildSql();

//        当tp提供的条件构造器无法满足是第二个参数填写exp
//        $sql = $db->where('admin_id', 'exp', 'not in (1,2,3)')->buildSql();

//        where and
//        $sql = $db
//            ->where('admin_id', 'neq', '1')
//            ->where('admin_name', '特斯')
//            ->buildSql();

//        where or
//        $sql = $db
//            ->where('admin_id', 'neq', '1')
//            ->whereOr('admin_name', '特斯')
//            ->buildSql();

        $sql = $db
            ->where("admin_id", "in", "1,2,3")
            ->whereOr("admin_name", "eq", "张三")
            ->whereOr("admin_type", 'lt', "2")
            ->where("admin_password", md5(12345))
            ->buildSql();

        print_r($sql);
    }

    public function mod7()
    {
//        链式操作
        $db = Db::name('admin');

        $res = $db
            ->where('admin_id', '>', 5)#条件ID > 5
            ->field('admin_name', 'admin_id')#只搜索username和id两个字段
            ->order('admin_id DESC')#order排序	id DESC   id倒序
//            ->limit(3, 7)#limit截取  3,7   从3开始截取7个
//            ->page(3, 5)#page()多用于分页
            ->group('`admin_type`')
            ->select();            #select();  搜索

        print_r($res);
    }

    public function mod8()
    {
//        使用model

//        方法1(该方法需引入think\Loader;)
//        $admin = Loader::model('Admin');
//        $res = $admin->get(25);

//        方法2(该方法需引入app\index\model\Admin;) 推荐使用
        $res = Admin::get(24);
//        $admin = new Admin;
//        $res = $admin::get(24);

//        方法3
//        $admin = model("Admin");
//        $res = $admin->get(23);


//        把对象转化为数组
        $res = $res->toArray();
        print_r($res);
    }

    public function mod9()
    {
//        使用model查询(该方法需引入app\index\model\Admin;)
        $res = Admin::mod9();

//        $res = $res->toArray();
//        print_r($res);

        foreach ($res as $val) {
            print_r($val->toArray());
        }

    }

    public function mod10()
    {
//        使用model新增(该方法需引入app\index\model\Admin;)
        $array = [
            'admin_name' => '笑嘻嘻',
            'admin_type' => 1,
            'admin_password' => md5('123qwe')
        ];
//        $arr = [];
//        for ($i = 1; $i < 21; $i++) {
//            $arr[]['admin_name'] = $i;
//        }
        $res = Admin::mod10($array);

//        返回新增的id
//        print_r($res->admin_id);

        print_r($res);
    }

    public function mod11()
    {
//        使用model更新(该方法需引入app\index\model\Admin;)
        $array = [
            'admin_name' => '布什',
            'admin_type' => 1,
            'admin_password' => md5('555699')
        ];
        $res = Admin::mod11($array);

        print_r($res);
    }

    public function mod12()
    {
//        使用model删除(该方法需引入app\index\model\Admin;)
        $id = 33;
        $res = Admin::mod12($id);

        print_r($res);
    }

    public function mod13()
    {
//        聚合函数(该方法需引入app\index\model\Admin;)
        $res = Admin::mod13();

        print_r($res);
    }

    public function mod14()
    {
//       模型获取器(该方法需引入app\index\model\Admin;)
        $res = Admin::mod14();

        foreach ($res as $val) {
            print_r($val->toArray());
        }
    }

    public function mod15()
    {
//       模型获取器(该方法需引入app\index\model\Admin;)
        $res = Admin::mod14();

        foreach ($res as $val) {
            print_r($val->toArray());
        }
    }
}

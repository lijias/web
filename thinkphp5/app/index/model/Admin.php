<?php
/**
 * Created by PhpStorm.
 * User: php_010
 * Date: 18/4/23
 * Time: 16:30
 */
namespace app\index\model;

use think\Model;
use traits\model\SoftDelete;

class Admin extends Model
{
    use SoftDelete;

    protected $autoWriteTimestamp = true;
    protected $createTime = 'create_time';
    protected $updateTime = 'update_time';
    protected $deleteTime = 'delete_time';
//    model的命名规范：一般model的名字和表名是对应的，例如
//    提示:去掉pre是因为config文件中设置了自动加表前缀
//    表名为pre_admin->模型名Admin.php
//    表名pre_admin_info->模型名AdminInfo.php

//    无论对数据库执行插入&更新操作，总是在数据中加上time字段相应的值
    protected $auto = [
        'time'//字段名
    ];

    public function setTimeAttr()
    {
        return time();//字段对应的值
    }

//    insert/update对数据库执行插入/更新操作时，在数据字段中加入对应的值
    protected $insert = [
        'create_time'//字段名
    ];

    public function setCreateTimeAttr()
    {
        return time();
    }

//    insert/update对数据库执行插入/更新操作时，在数据字段中加入对应的值
    protected $update = [
        'update_time'//字段名
    ];

    public function setUpdateTimeAttr()
    {
        return time();
    }

    public static function mod9()
    {
//        $res = Admin::where('admin_id',24)
//            ->field('admin_id,admin_name')
//            ->find();

//        $res = Admin::all();

        $res = Admin::where('admin_id', '>', 23)
            ->field('admin_id,admin_name')
            ->select();

//        $res = Admin::where('admin_id','23')->value('admin_type');

//        $res = Admin::column('admin_name','admin_id');
        return $res;
    }

    public static function mod10($array = array())
    {
//        方法1
//        第二个参数可以不写
//        第二个参数如果为ture,就算参入没有的字段也不会报错,可以直接插入数据
//        第二个参数如果是数组,则新增时只会新增数组内有的字段
//        $res = Admin::create($array,['admin_name']);


        $adminModel = new Admin;
//        方法2(使用该方法才能使用自动完成)
        $adminModel->admin_name = '乌龙茶';
        $adminModel->admin_password = md5('17771258');
        $res = $adminModel->save();

//        方法3
//        allowField()的作用跟方法1:第二个参数作用一样
//        $res = $adminModel
//            ->allowField('admin_name')
//            ->save([
//                'admin_name' => '橡皮眼',
//                'admin_password' => md5('imooc1'),
//                'demo' => 123
//            ]);

//        方法4(批量新增)
//        $res = $adminModel->saveAll([
//            ['admin_name' => '香蕉人'],
//            ['admin_name' => '西瓜人']
//        ]);
        return $res;
    }

    public static function mod11($array = array())
    {
//        方法1
//        $res = Admin::where('admin_id', '=', 42)
//            ->update($array);

//        方法2(使用该方法才能使用自动完成)
        $adminModel = Admin::get(42);
        $adminModel->admin_name = '小布什';
        $adminModel->admin_type = '3';
        $res = $adminModel->save();

        $adminModel = new Admin;
//        方法3
//        $res = $adminModel->save([
//            'admin_type' => 2
//        ], function ($query) {
//            $query->where('admin_id', '<', 27);
//        });

//        方法4(批量修改)
//        $res = $adminModel->saveAll([
//            ['admin_id' => 23, 'admin_name' => '老夫子'],
//            ['admin_id' => 24, 'admin_name' => '大番薯']
//        ]);
        return $res;
    }

    public static function mod12($id = '')
    {
//        方法1
//        $res = Admin::destroy(['admin_id' => $id]);

//        方法2
        $adminModel = Admin::get($id);
        $res = $adminModel->delete();

//        方法3
//        $res = Admin::where('admin_id', $id)->delete();
//        $res = Admin::where('admin_id', '>', $id)->delete();
//        这样写为删除全部数据
//        $res = Admin::where('1=1')->delete();

        return $res;
    }

    public static function mod13()
    {
//        count获取表中数据的条数
//        $res = Admin::count();
//        给count加where条件
//        $res = Admin::where('admin_id','>',23)
//            ->where('admin_id','<',30)
//            ->count();

//        max/min获取指定字段中数据的最大/小值
//        $res = Admin::max('admin_id');
//        给max/min添加where条件
//        $res = Admin::where('admin_id',"<",38)->count('admin_id');

//        sum对指定字段数据求和
//        $res = Admin::sum('admin_id');
//        对sum添加where条件
//        $res = Admin::where('admin_id','<',40)->sum('admin_id');

//        avg对指定字段数据求平均值
//        $res = Admin::avg('admin_id');
//        对avg添加where条件
        $res = Admin::where('admin_id', '>', 23)->avg('admin_id');

        return $res;
    }

    public static function mod14()
    {
        $res = Admin::where('admin_id', '>', 23)
            ->field('admin_id,admin_name,admin_type')
            ->select();

        return $res;
    }

//    查询时自动替换
//    起名规范:get+字段名+Attr
    public function getAdminTypeAttr($val)
    {
        switch ($val) {
            case "1";
                return '后台管理权限';
                break;
            case "2";
                return '项目管理权限';
                break;
            default;
                return '未知';
                break;
        }
    }
}
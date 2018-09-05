<?php
class Blog_model extends CI_Model {

    public $name;
    public $age;

    function __construct() {
        parent::__construct ();
    }

    public function get_student()
    {
        //查询构造器类
        //$query = $this->db->get('student');
        
        //第二和第三个参数用于设置 LIMIT 子句:
        //$query = $this->db->get('student', 10, 20);  第11个开始查20个 
        
        //直接使用sql语句
        //$query = $this->db->query('select name from student');
        
        //增加where条件查询
        //$query = $this->db->get_where('student',array('id'=>1));
        
        //$this->db->select('name');//该方法用于编写查询语句中的 SELECT 子句:
        
        //生成的sql语句: SELECT MAX(age) as age FROM student（最大值）
        //$this->db->select_max('age');
        
        //生成的sql语句: SELECT MIN(age) as age FROM student（最小值）
        //$this->db->select_min('age');
        
        //生成的sql语句: SELECT AVG(age) as age FROM members（平均值）
        //$this->db->select_avg('age');
        
        //生成的sql语句: SELECT SUM(age) as age FROM members（和）
        //$this->db->select_sum('age');        
        //$query = $this->db->get('student');
        
        //二表联查
        $name=array('猪骨头','tou','ss');
        $id=2;
        $this->db->select('name,age,class.class,score');
        $this->db->from('student');
        $this->db->join('class','student.class=class.id');
        $this->db->group_by('student.score');
        
        //生成的sql语句: WHERE name != '猪骨头' OR id > 2
        //$this->db->where('name !=', $name);
        //$this->db->or_where('student.class >',$id );
        
        //生成的sql语句: WHERE name IN ('猪骨头','tou','ss')
        //$this->db->where_in('name', $name);
        
        //生成的sql语句: OR name IN ('猪骨头','tou','ss')
        //$this->db->or_where_in('name', $name);
        
        //生成的sql语句: WHERE username NOT IN ('猪骨头','tou','ss')
        //$this->db->where_not_in('name', $name);
        
        //模糊查询
        //$this->db->like('name', '汤');
        
        //分组查询
        //$this->db->group_by("student.class");
        
        //查询到重复的数据不会全部显示只显示一个
        //$this->db->distinct();
        //$query = $this->db->query('SELECT DISTINCT age FROM student ');
        
        //排序
        //$this->db->order_by('age ASC', 'class DESC');
        
        //限制
        //$this->db->limit(2);
        //$this->db->limit(2,2);
        $query = $this->db->get();
        //echo $query->num_rows();
        
        //echo $this->db->count_all_results('student');
        
//         $sql = $this->db->get_compiled_select('student');
//         echo $sql;

        //第二个参数用于设置是否重置查询(默认会重置)
        //$this->db->limit(2,3)->get_compiled_select('student',FALSE);
        //echo $this->db->select('name')->get_compiled_select();        
//         if ($query) 
//         {
//              return show_404('你没有此项操作的权限!', 'Welcome');
//         }
//         只获得第一个数据
//         return $query->row_array();
        return $query->result_array();
    }

    public function insert_student()
    {
        //方法1
        /*$this->name    = '陈五'; // please read the below note
        $this->age     = 'sadas' ;*/        
               
        //自动写出正确的sql语句(增)
//         $data = array('name' => '55k', 'age' => 23);        
//         $str = $this->db->insert_string('student', $data);
//         echo $str;
        
        //方法2
        /*if($this->db->simple_query('INSERT INTO student (name, age) VALUES ("猪骨头")'))
        {
            echo 'succes';
        }
        else 
        {
            echo 'erro';
        }*/
        
        //方法3
        $arr = array
        (
            'name' => '黑猫',
            'age' => 38,
            'class' => 2
        );
        $this->db->insert('student', $arr);
    }

    public function update_student()
    {
        $this->name    = '赵一';
        $this->age     = '25';
        
        $this->db->update('student', $this, array('id' => 2));
        
        //自动写出正确的sql语句(改)
//         $data = array('name' => '55k', 'age' => 23);       
//         $where = "id = 1";        
//         $str = $this->db->update_string('student', $data, $where);
//         echo $str;
        
    }

    public function delete_student()
    {
//         $this->db->delete('student', array('id' => 2));
           
           $id = 7;
           $this->db->where('id', $id);
           $this->db->delete('student');
    }
    
    function is_exists($tag)
    {
        $this->db->from('tag');
        $this->db->where('tag_name', $tag);
        $query = $this->db->get();
        $tags = $query->row_array();
        return count($tags) > 0?$tags['id']:FALSE;
    }
    
    function create()
    {
        $this->db->set('tag_name', $this->tag);
    
        $this->db->insert('tag');
    
        return $this->db->insert_id();
    }
    
    public function find_channel($channel)
    {
        $query = $this->db->get_where('node', array('node_name' => $channel));
        $res = $query->row_array();
        return $query->num_rows()>0?$res['id']:false;
    }
    
    public function create_channel($channel)
    {
        $this->db->set('node_name', $channel);
//         $this->db->set('app_id', 1);
        $this->db->insert('node');
        return $this->db->insert_id();
    }
    
    function create_new()
    {
        $this->db->set('title', (string) $this->title);
        $this->db->set('author', $this->author);
        if ($this->publish_at != null && $this->publish_at != "") {
            $this->db->set('time', (string) $this->publish_at);
        }
        $this->db->set('content', $this->content);
//         $this->db->set('node_id', $this->id_region == "" ? 0 : $this->id_region);
        $this->db->set('media', $this->source);
        $this->db->set('tag_id', $this->id_tags);
        $this->db->set('node_id', $this->ids_channel);
//         $this->db->set('time', date('Y-m-d H:i:s'));
        $this->db->set('url', $this->orginal_url);
//         $this->db->set('is_page', $this->is_page == null ? 0 : $this->is_page);
        $this->db->set('img', $this->img_path);
//         $this->db->set('article_grade', $this->grade);
        // echo "bbb";
        // exit();
    
        $this->db->insert('new');
        return $this->db->insert_id();
    }
    
    public function add_channel($cha,$c_id)
    {
        $this->db->set('node_name', $cha);
        $this->db->set('id_parent', $c_id);
        $this->db->insert('node');
        return $this->db->insert_id();
    }
    
    public function fz()
    {
        $query = $this->db->query("select COUNT(a.request_uri) as zs,HOUR(a.created_at) data_hour,FROM_UNIXTIME(UNIX_TIMESTAMP(a.created_at),'%Y-%m-%d') as data_date 
                                    from `9thleaf_action_log` as a 
                                    where request_uri = '/policy/email' 
                                    GROUP BY data_hour, data_date
                                    ORDER BY data_date DESC,data_hour ASC");
        return $query->result_array();
    }
    
    public function check_news($time='')
    {
        $this->db->select('COUNT(id) as zs,FROM_UNIXTIME(UNIX_TIMESTAMP(created_at),"%Y-%m-%d") as data_date ');
        $this->db->from('news');
        if (isset($time) && $time != "") 
        {
            $this->db->where("created_at >=", $time);
            $end_time = strtotime($time)+86399 ;
            $end = date("Y-m-d H:i:s",$end_time);
            $this->db->where("created_at <", $end);
        }
        $this->db->group_by('data_date');
        $query = $this->db->get();
//         echo $this->db->last_query();
        return $query->row_array();
    }
    
    public function search_activity($start,$end_time)
    {
        $this->db->select('COUNT(id) as zs,FROM_UNIXTIME(UNIX_TIMESTAMP(created_at),"%Y-%m-%d") as data_date ');
        $this->db->from('action_log');
        $this->db->where("created_at >=", $start);
        $this->db->where("created_at <", $end_time);
        $this->db->where('request_uri','/index');
        $this->db->group_by('data_date');
        $query = $this->db->get();
//                 echo $this->db->last_query();exit;
        return $query->result_array();
    }
    
    
    
    
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Select2_4 extends CI_Controller
{
    /*
     * 构造函数
     */
    function __construct()
    {
        parent::__construct();
        $this->load->model('content/content_mdl', 'content_mdl');
        $this->load->model('channel/channel_mdl', 'channel_mdl');
        $this->load->model('tag/tag_mdl', 'tag_mdl');
    }

    /*
     * select2 4.0.5
     */
    public function index()
    {
        $id = 871;
        $content_type = 1;
        $data['editing'] = $this->content_mdl->load($id, $content_type);
        $channels_str = '';
        $channel_arr = explode(',', $data['editing']['ids_channel']);
        foreach ($channel_arr as $key => $val) {
            if ($val != '') {
                $channel = $this->channel_mdl->content_channel($val);
                if ($channels_str == '') {
                    $channels_str = $channel['channel_name'];
                } else {
                    $channels_str .= ';' . $channel['channel_name'];
                }
            }
        }
        $data['editing']['channel_str'] = $channels_str;
        $tags_str = '';
        $tag_arr = explode(',', $data['editing']['tag_id']);
        foreach ($tag_arr as $k => $v) {
            if ($v != '') {
                $tag = $this->tag_mdl->content_tag($v);
                if ($tags_str == '') {
                    $tags_str = $tag['tag'];
                } else {
                    $tags_str .= ';' . $tag['tag'];
                }
            }
        }
        $data['editing']['tags_str'] = $tags_str;
        $this->load->view('select2/select2_4', $data);
    }

//    查询数据
    public function getObj()
    {
        $search = $this->input->get("search");
        $offset = $this->input->get("page");
        $limit = 500;
        $type = $_GET['type'];
        if ($type == 'channel') {
            $parent_name = '';
            $all = $this->channel_mdl->search_list_channel($search, $offset, $limit);
            foreach ($all as $key => $val) {
                if ($val['pid'] > 0) {
                    $parent = $this->channel_mdl->content_channel($val['pid']);
                    $parent_name = $parent['channel_name'] . '--';
                }
                $all[$key]['text'] = $parent_name . $val['text'];
                $all[$key]['channel'] = $val['text'];
            }
        } elseif ($type == 'tag') {
            $all = $this->tag_mdl->search_list_tag($search, $offset, $limit);
            foreach ($all as $key => $val) {
                $all[$key]['text'] = $val['text'];
                $all[$key]['tag'] = $val['text'];
            }
        }
        $data[$type]['results'] = $all;
        echo json_encode($data[$type]);
    }

//    初始数据
    public function get_obj()
    {
        $content_id = $_GET['content_id'];
        $content_type = 1;
        $data['list'] = $this->content_mdl->load($content_id, $content_type);
        if ($_GET['type'] == 'channel') {
            $channels_str = '';
            $parent_name = '';
            $channel_arr = explode(',', $data['list']['ids_channel']);
            foreach ($channel_arr as $key => $val) {
                if ($val != '') {
                    $channel = $this->channel_mdl->content_channel($val);
                    if ($channel['pid'] > 0) {
                        $parent = $this->channel_mdl->content_channel($channel['pid']);
                        $parent_name = $parent['channel_name'] . '--';
                    }
                    if ($channels_str == '') {
                        $channels_str = $parent_name . $channel['channel_name'];
                    } else {
                        $channels_str .= ';' . $parent_name . $channel['channel_name'];
                    }
                    $arr[] = array('id' => $val, 'text' => $parent_name . $channel['channel_name']);
                }
            }
        } elseif ($_GET['type'] == 'tag') {
            $tags_str = '';
            $tag_arr = explode(',', $data['list']['tag_id']);
            foreach ($tag_arr as $key => $val) {
                if ($val != '') {
                    $tag = $this->tag_mdl->content_tag($val);
                    if ($tags_str == '') {
                        $tags_str = $tag['tag'];
                    } else {
                        $tags_str .= ';' . $tag['tag'];
                    }
                    $arr[] = array('id' => $val, 'text' => $tag['tag']);
                }
            }
        }
        echo json_encode($arr);
    }
}


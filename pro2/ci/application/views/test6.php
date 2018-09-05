<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>js/select2/css/select2.css"/>
<script language="javascript" type="text/javascript" src="<?php echo base_url() ?>js/jquery.js"></script>
<script src="<?php echo base_url() ?>js/select2/js/select2.full.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>js/select2/js/i18n/zh-CN.js" type="text/javascript"></script>
<script language="JavaScript"> var base_url = '<?php echo base_url()?>'; </script>
<script language="JavaScript"> var site_url = '<?php echo site_url()?>'; </script>

<div style="margin: 50px;">
    <ladel>频道:</ladel>
    <select id="channel"></select>
    <input type="hidden" name="channel_str" id="channel_str"
           value="<?php echo isset($editing['channel_str']) ? $editing['channel_str'] : ''; ?>">
</div>
<script>
    //    使用select2
    $('#channel').select2({
//        tags:true 新建一个搜索不到的标签,为false时显示没有找到
        tags: false,
//        multiple: true 多选
        multiple: true,
        width: '85%',
        language: 'zh-CN',
        ajax: {
            url: site_url + '/select2/select2_4/getObj?type=channel',
            dataType: "json",
//            用户停止输入后多久开始搜索,单位毫秒
            delay: 1000,
//            点击时
            data: function (params) {
                var query = {
//                    搜索内容
                    search: params.term,
                }
                return query;
            },
//            返回数据
            processResults: function (data, params) {
                params.page = params.page || 1;
                return {
//                    数据需已results为键值的数组
                    results: data.results,
                };
            },
        },
    });

    /**
     *  频道
     */
    $('#channel').on("select2:select", function (e) {
//        获取全部频道
        var channel_str = $('#channel_str').val();
//        获取全部标签
        var tags_str = $('#tags_str').val();
//        新增频道名,判断是否为已有频道
        if (e.params.data.channel) {
            var channel = e.params.data.channel;
        } else {
            var channel = e.params.data.text;
        }
//        新增频道ID
        var id = e.params.data.id;
//        把新的频道拼装到原有频道中
        if (channel_str != '') {
            var new_channel = channel_str + ';' + channel;
        } else {
            var new_channel = channel;
        }
//        频道重新赋值
        $('#channel_str').val(new_channel);
//        字符串拆分成数组
        var tag_arr = tags_str.split(';');
        var tag_len = tag_arr.length;
//        把标签的值组装成规格的数组
        var tag_new_arr = [];
        var flag = 1;
        for (var i = 0; i < tag_len; i++) {
            if (tag_arr[i].indexOf(channel) > -1) {
                flag = 0;
            }
        }
        if (flag == 1) {
//        把新的频道拼装到标签中
            if (tags_str != '') {
                var new_tag = tags_str + ';' + channel;
            } else {
                var new_tag = channel;
            }
//        标签重新赋值
            $('#tags_str').val(new_tag);
//        生成数组
            var data = [];
//        生成json对象
            var tag_json = {};
//        新的频道赋值到json对象中
            tag_json.id = id;
            tag_json.text = channel;
//        把json对象推进数组中
            data.push(tag_json);
//        生成新的标签
            for (var d = 0; d < data.length; d++) {
                var item = data[d];
//            创建默认选择的DOM选项
                var option = new Option(item.text, item.id, true, true);
//            追加数据
                tag_element.append(option);
            }
//        更新需展示的数据
            tag_element.trigger('change');
        }
    });

    /**
     * 删除频道
     */
    $('#channel').on("select2:unselect", function (e) {
//        获取全部频道
        var channel_str = $('#channel_str').val();
//        获取全部标签
        var tags_str = $('#tags_str').val();
//        删除频道名
        var channel = e.params.data.text;
//        删除频道ID
        var id = e.params.data.id;
//        字符串拆分成数组
        var channel_arr = channel_str.split(';');
        var channel_len = channel_arr.length;
//        把标签的值组装成规格的数组
        var channel_new_arr = [];
        for (var j = 0; j < channel_len; j++) {
//            是否为一级频道
            if (channel.indexOf('--') > -1) {
//                截取位置
                var cposition = channel.indexOf('--') + Number(2);
//                截取字符串
                var ccut_out = channel.substring(cposition);
                if (channel_arr[j].indexOf(ccut_out) < 0) {
                    channel_new_arr.push(channel_arr[j]);
                }
            } else {
                if (channel_arr[j].indexOf(channel) < 0) {
                    channel_new_arr.push(channel_arr[j]);
                }
            }
        }
//        把新的频道拼装到原有频道中
        if (channel_new_arr.length > 0) {
            var new_channel = channel_new_arr.join(";");
        } else {
            var new_channel = '';
        }
//        频道重新赋值
        $('#channel_str').val(new_channel);
//        字符串拆分成数组
        var tag_arr = tags_str.split(';');
        var tag_len = tag_arr.length;
//        把标签的值组装成规格的数组
        var tag_new_arr = [];
        for (var i = 0; i < tag_len; i++) {
//            是否为一级频道
            if (channel.indexOf('--') > -1) {
//                截取位置
                var tposition = channel.indexOf('--') + Number(2);
//                截取字符串
                var tcut_out = channel.substring(tposition);
                if (tag_arr[i].indexOf(tcut_out) < 0) {
                    tag_new_arr.push(tag_arr[i]);
                }
            } else {
                if (tag_arr[i].indexOf(channel) < 0) {
                    tag_new_arr.push(tag_arr[i]);
                }
            }
        }
//        把新的频道拼装到标签中
        if (tag_new_arr.length > 0) {
            var new_tag = tag_new_arr.join(";");
        } else {
            var new_tag = '';
        }
//        标签重新赋值
        $('#tags_str').val(new_tag);
//        生成数组
        var data = new Array();
        for (var k = 0; k < tag_new_arr.length; k++) {
//            生成json对象
            data[k] = {};
//        新的频道赋值到json对象中
            if (channel.indexOf('--') > -1) {
                data[k].id = tag_new_arr[k];
                data[k].text = tag_new_arr[k];
            } else {
                data[k].id = tag_new_arr[k];
                data[k].text = tag_new_arr[k];
            }
        }
//        清除全部选择
        tag_element.val(null).trigger('change');
//        生成新的标签
        for (var d = 0; d < data.length; d++) {
            var item = data[d];
//            创建默认选择的DOM选项
            var option = new Option(item.text, item.id, true, true);
//            追加数据
            tag_element.append(option);
        }
//        更新需展示的数据
        tag_element.trigger('change');
    });
</script>
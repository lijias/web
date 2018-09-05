<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link rel="stylesheet" href="<?php echo base_url(); ?>js/plupload/css/plupload.css">
<script> var base_url = "<?php echo base_url(); ?>"</script>
<script> var site_url = "<?php echo site_url(); ?>"</script>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>plupload仿新浪微博多图片上传兼容IE</title>
</head>
<body>
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/plupload/plupload/plupload.full.min.js"></script>

<div class="photo_upload_box">
    <h1>本地上传</h1>
    <p class="upload_num">共<span id="uploaded_length">0</span>张，还能上传<span id="upload_other">99</span>张</p>
    <ul id="ul_pics" class="ul_pics clearfix">
        <li id="local_upload">
            <img src="<?php echo base_url(); ?>js/plupload/images/local_upload.png" id="btn2"/>
        </li>
    </ul>
</div>
<div style="text-align:center;margin-top: 20px;">
    <input type="button" value="保存" id="save">
</div>
<p style="text-align:center"><a onclick="getPics()" style="color:red;font-size:15px">获取图片</a></p>
<script type="text/javascript">
    var upload_total = 99;//最多上传数量
    var uploader = new plupload.Uploader({//创建实例的构造方法
        runtimes: 'gears,html5,html4,silverlight,flash', //上传插件初始化选用那种方式的优先级顺序
        browse_button: ['btn2'], // 上传按钮
        url: site_url + '/file/plupload/upload', //远程上传地址
        flash_swf_url: base_url + 'js/plupload/plupload/Moxie.swf', //flash文件地址
        silverlight_xap_url: base_url + 'js/plupload/plupload/Moxie.xap', //silverlight文件地址
        filters: {
            max_file_size: '10mb', //最大上传文件大小（格式100b, 10kb, 10mb, 1gb）
            mime_types: [//允许文件上传类型
                {title: "files", extensions: "jpg,png,gif,jpeg"}
            ]
        },
        multi_selection: true, //true:ctrl多文件上传, false 单文件上传
        init: {
            FilesAdded: function (up, files) { //文件上传前
                var length_has_upload = $("#ul_pics").children("li").length;
                if (files.length >= upload_total) { //超过上传总数量则隐藏
                    $("#local_upload").hide();
                }
                var li = '';
                plupload.each(files, function (file) { //遍历文件

                    if (length_has_upload <= upload_total) {
                        li += "<li class='li_upload' id='" + file['id'] + "'><div class='progress'><span class='bar'></span><span class='percent'>0%</span></div></li>";
                    }
                    length_has_upload++;
                });
                $("#ul_pics").prepend(li);
                uploader.start();
            },
            UploadProgress: function (up, file) { //上传中，显示进度条
                var percent = file.percent;
                $("#" + file.id).find('.bar').css({"width": percent + "%"});
                $("#" + file.id).find(".percent").text(percent + "%");
            },
            FileUploaded: function (up, file, info) { //文件上传成功的时候触发
                var uploaded_length = $(".img_common").length;
                if (uploaded_length <= upload_total) {
                    var data = eval("(" + info.response + ")");//解析返回的json数据
                    if (data.message != undefined) {
                        $("#" + file.id).remove();
                        alert(data.message);
                        return false;
                    }
                    $("#" + file.id).html("<input type='hidden'name='pic[]' value='" + data.pic + "'/><input type='hidden'name='pic_name[]' value='" + data.name + "'/>\n\
                <img class='img_common' src='" + data.pic + "' /><span class='picbg'></span><div  class='uploading-tip' style='overflow: hidden; height: 0px;'><span class='onLandR' onclick='reverse_left($(this))'>&lt;</span><span class='onLandR' onclick='reverse_right($(this))'>&gt;</span><i class='onDelPic' onclick=delPic('" + data.pic + "','" + file.id + "')>×</i></div>");
                    document.getElementById(file.id).id = data.id;
                }
                showUploadBtn();
                hover_li();
            },
            Error: function (up, err) { //上传出错的时候触发
                alert(err.message);
            }
        }
    });
    uploader.init();


    function showUploadBtn() { //是否显示上传按钮
        var uploaded_length = $(".img_common").length;
        $("#uploaded_length").text(uploaded_length);
        var other_length = (upload_total - uploaded_length) > 0 ? upload_total - uploaded_length : 0;
        $("#upload_other").text(other_length);
        var uploaded_length = $(".img_common").length;
        if (uploaded_length >= upload_total) {
            $("#local_upload").hide();
        } else {
            $("#local_upload").show();
        }
    }


    function hover_li() {
        $("#ul_pics").children(".li_upload").hover(function () {
            $(this).find(".uploading-tip").stop().animate({height: '25px'}, 200);
        }, function () {
            $(this).find(".uploading-tip").stop().animate({height: '0'}, 200);
        })
    }
    //向左移动图片
    function reverse_left(obj) {
        var obj_li = obj.parents("li");
        var obj_prev = obj_li.prev("li");
        if (obj_prev.hasClass("li_upload")) {
            obj_li.insertBefore(obj_prev);
            obj_li.find(".uploading-tip").css({"height": 0});
        }
    }
    //向右移动图片
    function reverse_right(obj) {
        var obj_li = obj.parents("li");
        var obj_next = obj_li.next("li");
        if (obj_next.hasClass("li_upload")) {
            obj_li.insertAfter(obj_next);
            obj_li.find(".uploading-tip").css({"height": 0});
        }
    }
    //获取第一张图片(封面)和所有上传的图片
    function getPics() {
        var pics = "";
        $("#ul_pics").find(".img_common").each(function () {
            pics += $(this).attr("src") + ",";
        })
        var logo = "";
        if ($("#ul_pics").find(".img_common").length > 0) {
            logo = $("#ul_pics").find(".img_common").eq(0).attr("src");
        }
        alert("第一张图片：" + logo + "\n\所有图片：" + pics)
    }
    //删除图片
    function delPic(pic, file_id) { //删除图片 参数1图片路径  参数2 随机数
        alert(1);
        $.post("del.php", {pic: pic}, function (data) {
            $("#" + file_id).remove();
            showUploadBtn();
        })
    }
</script>
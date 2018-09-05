<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/js/jquery.select2/select2.css"/>
<script language="javascript" type="text/javascript" src="<?php echo base_url() ?>js/jquery.js"></script>
<script language="JavaScript"> var base_url = '<?php echo base_url()?>'; </script>
<script language="javascript" type="text/javascript" src="<?php echo base_url() ?>js/admin.js"></script>
<script src="<?php echo base_url() ?>js/ckeditor/ckeditor.js"></script>
<script src="<?php echo base_url() ?>/js/jquery.select2/select2.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>/js/jquery.select2/select2_locale_zh-CN.js" type="text/javascript"></script>
<script language="JavaScript">
    <!--

    $(document).ready(function () {

    });
    $(window).resize(function () {
        //editBody();
    });
    function check(list, obj) {
        var frm = obj.form;

        for (i = 0; i < frm.elements.length; i++) {
            if (frm.elements[i].name == "action_code[]") {
                var regx = new RegExp(frm.elements[i].value + "(?!_)", "i");

                if (list.search(regx) > -1) frm.elements[i].checked = obj.checked;
            }
        }
    }

    $(document).ready(function () {
        $('#checkAll').click(function () {
            if (this.checked) {
                $("input:checkbox").each(function () {

                    $(this).attr("checked", true);
                });
            } else {
                $("input:checkbox").each(function () {
                    $(this).attr("checked", false);
                });
            }
        });

        $('#reset').click(function () {//新增并继续编辑
            $('#form')[0].reset();
        });

        //防止编辑标签时突然刷新页面
        var edit_tag = '<?php echo isset($editing['tagtx']) ? $editing['tagtx'] : "{}"?>';
        var url = window.location.href;
        //在新增的情况下
        if (url.indexOf('news/add') > -1) {
            $('#tag').val('');
        }
        //在编辑的情况下
        else if (url.indexOf('news/edit') > -1) {
            $('#tag').val(edit_tag);
        }
        var tagdata = '[{"id":"\u7535\u5b50\u5546\u52a1","text":"\u7535\u5b50\u5546\u52a1"},{"id":"\u7f51\u7edc\u8425\u9500","text":"\u7f51\u7edc\u8425\u9500"},{"id":"\u7f51\u7edc\u5e94\u7528","text":"\u7f51\u7edc\u5e94\u7528"}]';
        var tagdatas = JSON.parse(tagdata);
console.log(tagdatas);

        $('#tag').select2({
            tags: true,
            separator: ";",
            multiple: true,
            initSelection: function (element, callback) {
                callback(tagdatas);
            },
            createSearchChoice: function (term) {
                return {
                    id: $.trim(term),
                    text: $.trim(term)
                };
            },
            ajax: {
                url: '<?php echo site_url("select2/select/gettags")?>',
                dataType: "json",
                data: function (term, page) {
                    return {key: term};
                },
                results: function (data, page) {
                    return {results: data};
                }
            }

        });

        //防止编辑频道时突然刷新页面
        var edit_channel = '<?php echo isset($editing['channel']) ? $editing['channel'] : "{}"?>';
        //在新增的情况下
        if (url.indexOf('news/add') > -1) {
            $('#ids_channel').val('');
        }
        //在编辑的情况下
        else if (url.indexOf('news/edit') > -1) {
            $('#ids_channel').val(edit_channel);
        }
        var channeldata = '<?php echo isset($editing['ids_channel']) ? $editing['ids_channel'] : "{}"?>';
        var channeldatas = JSON.parse(channeldata);

        $('#ids_channel').select2({
            tags: true,
            separator: ";",
            multiple: true,
            language:"zh-CN",
//            如果language加载失败,使用下面两个方法
//            formatNoMatches: function () {
//                return "没有找到匹配项";
//            },
//            formatSearching: function () {
//                return "搜索中...";
//            },
            initSelection: function (element, callback) {
                callback(channeldatas);
            },
            ajax: {
                url: '<?php echo site_url("channel/gettags")?>',
                dataType: "json",
                data: function (term, page) {
                    return {key: term};
                },
                results: function (data, page) {
                    return {results: data};
                }
            }
        });
    })

    //alert("<?php echo base_url()?>js/ckeditor/plugins/imgupload/imgupload.php");

    //-->
</script>
<div class="form-group">
    <label class="col-sm-3 control-label">频道*</label>
    <div class="col-sm-6">
        <?php $editing['tagtx'] = '电子商务;网络营销;网络应用'; ?>
        <input id="ids_channel" required name="ids_channel" type="hidden"
               value='<?php echo isset($editing['channel']) ? $editing['channel'] : ""; ?>' placeholder="频道"
               style="width: 100%"/>
        <input id="channel_num" required style="display: none;"
               value="<?php echo isset($editing['tagtx']) ? $editing['tagtx'] : ""; ?>">
    </div>
</div>
<div class="form-group">
    <label class="col-sm-3 control-label">标签*</label>
    <div class="col-sm-6">
        <input id="tag" name="tag" type="hidden"
               value="<?php echo isset($editing['tagtx']) ? $editing['tagtx'] : ""; ?>" placeholder="标签"
               style="width: 100%"/>
        <input id="tag_num" required style="display: none;"
               value="<?php echo isset($editing['tagtx']) ? $editing['tagtx'] : ""; ?>">
    </div>
</div>

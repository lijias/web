<style>
    #wrap {
        position: fixed;
        top: 50%;
        left: 0;
        width: 100%;
    }

    #cen {
        position: relative;
        top: -100px;
        width: 350px;
        margin: 0px auto;
    }

    .inp {
        margin: 10px;
    }
</style>
<script language="JavaScript">
    $(document).ready(function () {
        if (document.referrer.indexOf('/project/project/edit') == -1) {
            url = document.referrer;
        }
    });
</script>
<div id="wrap">
    <div id="cen">
        <form action="" id="form">
            <input type="hidden" name="id" value="<?php echo isset($editing['id']) ? $editing['id'] : ""; ?>">
            <div class="inp">
                <label class="col-sm-3 control-label">项目名称</label>
                <input id="project_name" name="project_name" type="text"
                       value='<?php echo isset($editing['project_name']) ? $editing['project_name'] : ""; ?>'
                       placeholder="名称"/>
            </div>
            <div class="inp">
                <label class="col-sm-3 control-label">地区</label>
                <select name="first" id="first">
                    <option value="">请选择</option>
                    <optgroup label="国内">
                        <?php foreach ($province as $k => $v) { ?>
                            <option value="<?php echo $v['id']; ?>"
                                <?php if (isset($editing['province']) && $v['id'] == $editing['province']) {
                                    echo 'selected';
                                } ?>>
                                <?php echo $v['province']; ?>
                            </option>
                        <?php } ?>
                    </optgroup>
                    <optgroup label="外国">
                        <?php foreach ($foreign as $kk => $vv) { ?>
                            <option value="<?php echo $vv['id']; ?>"
                                <?php if (isset($editing['province']) && $vv['id'] == $editing['province']) {
                                    echo 'selected';
                                } ?>>
                                <?php echo $vv['foreign']; ?>
                            </option>
                        <?php } ?>
                    </optgroup>
                </select>
                <select name="second" id="second" <?php if (!isset($editing['city']) || $editing['city'] == '') {
                    echo 'style="display: none;"';
                } ?>>
                    <option value="">请选择</option>
                    <optgroup label="地区">
                        <?php foreach ($city as $kkk => $vvv) { ?>
                            <option value="<?php echo $vvv['id']; ?>"
                                <?php if (isset($editing['city']) && $vvv['id'] == $editing['city']) {
                                    echo 'selected';
                                } ?>>
                                <?php echo $vvv['city']; ?>
                            </option>
                        <?php } ?>
                    </optgroup>
                </select>
            </div>
        </form>
        <div class="inp">
            <button id="sub">提交</button>
            <button id="ret" onclick="history.go(-1)">返回</button>
        </div>
    </div>
</div>
<script>
    $('#sub').click(function () {
        var form = new FormData(document.getElementById('form'));
        $.ajax({
            url: '<?php echo site_url("project/project/save")?>',
            type: 'post',
            data: form,
            processData: false,
            contentType: false,
            dataType: 'json',
            success: function (data) {
                if (data.code == 'success') {
                    if (data.type == 'create') {
                        if (confirm('新增成功') == true) {
                            window.location.href = url;
                        } else {
                            window.location.href = url;
                        }
                    } else {
                        if (confirm('更新成功') == true) {
                            window.location.href = url;
                        } else {
                            window.location.href = url;
                        }
                    }
                }
            }
        });
    });

    $('#first').change(function () {
        var first = $('#first').find('option:selected').val();
        var form = new FormData();
        form.append('first', first);
        $.ajax({
            url: '<?php echo site_url("region/region/get_city")?>',
            type: 'post',
            data: form,
            processData: false,
            contentType: false,
            dataType: 'json',
            success: function (data) {
//                是否成功
                if (data.message == 'success') {
//                    清除子节点内容
                    $('#second').empty();
                    var len = data.list.length;
                    var html = '';
                    for (var i = 0; i < len; i++) {
                        html += '<option value="' + data.list[i].id + '">' + data.list[i].city + '</option>';
                    }
                    $('#second').append('<optgroup label="地区"><option value="">请选择</option>' + html + '</optgroup>');
                    $('#second').show();
                } else {
                    $('#second').hide();
//                    清空值
                    $('#second').val('');
                }
            }
        });
    });
</script>
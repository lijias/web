<style>
    #wrap {
        position: fixed;
        top: 50%;
        left: 0;
        width: 100%;
    }

    #cen {
        position: relative;
        height: 200px;
        top: -100px;
        width: 300px;
        margin: 0px auto;
    }

    .inp {
        margin: 10px;
    }
</style>
<script language="JavaScript">
    $(document).ready(function () {

        var url = window.location.href;

//        a初始数据
        var a_json = '<?php echo isset($editing['a_json']) ? $editing['a_json'] : "{}"?>';
        var adatas = JSON.parse(a_json);

        $('#a').select2({
            tags: true,
            separator: ";",
            multiple: true,
            language: "zh-CN",
//            如果language加载失败,使用下面两个方法
//            formatNoMatches: function () {
//                return "没有找到匹配项";
//            },
//            formatSearching: function () {
//                return "搜索中...";
//            },
            initSelection: function (element, callback) {
                callback(adatas);
            },
            ajax: {
                url: '<?php echo site_url("project/project_people/getAccounts")?>',
                dataType: "json",
                data: function (term, page) {
                    var cant = $('#cant').val();
                    return {key: term, cant: cant};
                },
                results: function (data, page) {
                    return {results: data};
                }
            }
        }).on('change', function (e) {
//            新增
            if (e.added) {
                if ($('#people_a').val() == '') {
                    $('#people_a').val(e.added.text);
                } else {
                    $('#people_a').val($('#people_a').val() + ',' + e.added.text);
                }
                add_cant(e.added.text);
            }
//            移除
            if (e.removed) {
                var a_arr = $('#people_a').val().split(",");
                var newA = new Array();
                $.each(a_arr, function (i, item) {
                    if (e.removed.text.indexOf(a_arr[i]) < 0) {
                        newA.push(a_arr[i]);
                    }
                });
                var new_a = newA.join(',');
                $('#people_a').val(new_a);
                del_cant(e.removed.text);
            }
        });

//        b初始数据
        var b_json = '<?php echo isset($editing['b_json']) ? $editing['b_json'] : "{}"?>';
        var bdatas = JSON.parse(b_json);

        $('#b').select2({
            tags: true,
            separator: ";",
            multiple: true,
            initSelection: function (element, callback) {
                callback(bdatas);
            },
            ajax: {
                url: '<?php echo site_url("project/project_people/getAccounts")?>',
                dataType: "json",
                data: function (term, page) {
                    var cant = $('#cant').val();
                    return {key: term, cant: cant};
                },
                results: function (data, page) {
                    return {results: data};
                }
            }
        }).on('change', function (e) {
//            新增
            if (e.added) {
                if ($('#people_b').val() == '') {
                    $('#people_b').val(e.added.text);
                } else {
                    $('#people_b').val($('#people_b').val() + ',' + e.added.text);
                }
                add_cant(e.added.text);
            }
//            移除
            if (e.removed) {
                var b_arr = $('#people_b').val().split(",");
                var newB = new Array();
                $.each(b_arr, function (i, item) {
                    if (e.removed.text.indexOf(b_arr[i]) < 0) {
                        newB.push(b_arr[i]);
                    }
                });
                var new_b = newB.join(',');
                $('#people_b').val(new_b);
                del_cant(e.removed.text);
            }
        });

        function add_cant(obj) {
            var cant = $('#cant').val();
            if (cant == '') {
                $('#cant').val(obj);
            } else {
                $('#cant').val(cant + ',' + obj);
            }
        }

        function del_cant(obj) {
            var cant = $('#cant').val();
            var old_arr = cant.split(",");
            var new_arr = new Array();
            $.each(old_arr, function (i, item) {
                if (obj.indexOf(old_arr[i]) < 0) {
                    new_arr.push(old_arr[i]);
                }
            });
            var new_cant = new_arr.join(',');
            $('#cant').val(new_cant);
        }
    });
</script>
<div id="wrap">
    <div id="cen">
        <form action="" id="form">
            <div class="inp">
                <label class="col-sm-3 control-label">项目ID</label>
                <input id="project_id" name="project_id" type="text"
                       value='<?php echo isset($project_id) ? $project_id : "1"; ?>'
                       placeholder="项目ID"/>
                <input id="id" type="hidden" name="id"
                       value="<?php echo isset($id) ? $id : ""; ?>">
            </div>
            <div class="inp">
                <label class="col-sm-3 control-label">路人A</label>
                <input id="a" name="a" type="hidden" style="width: 80%"
                       value='<?php echo isset($a_ids) ? $a_ids : ""; ?>' placeholder="路人A"/>
                <input id="people_a" style="display: none;" name="people_a"
                       value="<?php echo isset($a_names) ? $a_names : ""; ?>">
            </div>
            <div class="inp">
                <label class="col-sm-3 control-label">路人B</label>
                <input id="b" name="b" type="hidden" style="width: 80%"
                       value="<?php echo isset($b_ids) ? $b_ids : ""; ?>" placeholder="路人B"/>
                <input id="people_b" style="display: none;" name="people_b"
                       value="<?php echo isset($b_names) ? $b_names : ""; ?>">
            </div>
            <input id="cant" style="display: none;" name="cant"
                   value="<?php echo isset($editing['cant']) ? $editing['cant'] : ""; ?>">
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
            url: '<?php echo site_url("project/project_people/save")?>',
            type: 'post',
            data: form,
            processData: false,
            contentType: false,
            dataType: 'json',
            success: function (data) {
                console.log(data);
            }
        });
    });
</script>
<!DOCTYPE html>
<html>
<link rel="stylesheet" href="<?php echo base_url() ?>js/layui/dist/css/layui.css">
<head>
    <title>Layui</title>
</head>
<body>
<script type="text/javascript" src="<?php echo base_url() ?>js/jquery.js"></script>
<script src="<?php echo base_url() ?>js/layui/dist/layui.js"></script>
<input id="approve" type="button" value="审核">
</body>
</html>
<script>
    $(function(){
        $("#approve").click(function () {
            layui.use('layer', function () {
                var layer = layui.layer;
                layer.open({
                    type: 1,
                    content: '<div>' +
                    '<img src="<?php echo base_url(); ?>uploads/timg.jpeg" style="width:100%;height:100%;" alt="">' +
                    '<br>' +
                    '<input type="radio" class="status" name="status" value="1" checked>通过' +
                    '<br>' +
                    '<input type="radio" class="status" name="status" value="2" style="margin-top: 10px">不通过  ' +
                    '</div>',
                    btn: ['确认', '取消'],
                    yes: function (index, layero) {
                        var status = $("input[name='status']:checked").val();
                        $.ajax({
                            url: "<?php echo site_url('layui/layui/approve');?>",
                            data: {'status': status},
                            type: "Post",
                            dataType: "json",
                            success: function (data) {
                                layer.msg(data.msg);
                            },
                            error: function (data) {
//                        $.messager.alert('错误',data.msg);
                            }
                        });
                        layer.close(index);
                    }
                });
            });
        });
    });
</script>
<!DOCTYPE html>
<html>
<link rel="stylesheet" href="<?php echo base_url() ?>js/layui/dist/css/layui.css">
<head>
    <title>Layui-date</title>
</head>
<body>
<script type="text/javascript" src="<?php echo base_url() ?>js/jquery.js"></script>
<script src="<?php echo base_url() ?>js/layui/dist/layui.js"></script>
<div class="layui-inline"> <!-- 注意：这一层元素并不是必须的 -->
    <input type="text" class="layui-input" id="test1">
</div>
<script>
    layui.use('laydate', function(){
        var laydate = layui.laydate;
        //执行一个laydate实例
        laydate.render({
            elem: '#test1' //指定元素
        });
    });
</script>
</body>
</html>
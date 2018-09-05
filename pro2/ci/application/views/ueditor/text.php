<!DOCTYPE html>
<html>
<head>
    <title>Ueditor</title>
</head>
<body>
<script type="text/javascript" src="<?php echo base_url() ?>js/jquery.js"></script>
<div class="form-group">
    <label class="col-sm-3 control-label">内容</label>
    <div class="col-sm-8">
        <span id='con_tis' style="color:red"></span>
        <script id="container" name="content"
                type="text/plain"><?php echo isset($editing["content"]) ? $editing['content'] : ""; ?></script>
        <script src="<?php echo base_url() ?>js/ueditor/ueditor.config.js"></script>
        <script src="<?php echo base_url() ?>js/ueditor/ueditor.all.js"></script>
        <script src="<?php echo base_url() ?>js/ueditor/ueditor.parse.js"></script>
        <script src="<?php echo base_url() ?>js/ueditor/lang/zh-cn/zh-cn.js"></script>
        <script type="text/javascript">
            var ue = UE.getEditor('container', {
                initialFrameWidth: 600,//设置编辑器宽度
                initialFrameHeight: 200,//设置编辑器高度
                scaleEnabled: true
            });
        </script>
    </div>
</div>
</body>
</html>
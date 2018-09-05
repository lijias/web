<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>文件上传/下载</title>
</head>
<body>
<script language="javascript" type="text/javascript" src="<?php echo base_url() ?>js/jquery.js"></script>
<script>
    $(function () {
        $("#rea").click(function () {
            var all_files = $(".upF")[0]['files'];
//            $("#Apic").html('');
//            var form = new FormData(document.getElementById('form'));
            var form = new FormData();
            for (var i = 0; i < all_files.length; i++) {
                form.append(i, all_files[i]);
            }
            $.ajax({
                url: "<?php echo site_url('file/file/ready') ?>",
                type: 'post',
                data: form,
                processData: false,
                contentType: false,
                dataType: "json",
                success: function (data) {

                }
            });
            for (var i = 0; i < all_files.length; i++) {
                $("#Apic").append('<div id="' + i + '"><img style="width: 200px;"  src="' + getObjectURL(all_files[i]) + '"/><br><input type="button" onclick="$(this).parent().remove();" value="删除"><br></div>');
            }
        });
        <!--把文件转换成可读URL-->
        function getObjectURL(file) {
            var url = null;
            if (window.createObjectURL != undefined) { // basic
                url = window.createObjectURL(file);
            } else if (window.URL != undefined) { // mozilla(firefox)
                url = window.URL.createObjectURL(file);
            } else if (window.webkitURL != undefined) { // webkit or chrome
                url = window.webkitURL.createObjectURL(file);
            }
            return url;
        }
    });
</script>
<form id="form" action="<?php echo site_url('file/file/upload') ?>" method="post" enctype="multipart/form-data">
    <div>
        选择上传文件:<input type="file" class="upF" name="upload[]" multiple>
    </div>
    <div>
        <input type="button" id="rea" value="预览">
        <input type="submit" id="sub" value="提交">
    </div>
    <div id="Apic">

    </div>
</form>
</body>
</html>
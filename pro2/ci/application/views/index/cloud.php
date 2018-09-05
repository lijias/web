<style type="text/css">
    .div1 {
        position: relative;
        width: 400px;
        height: 450px;
        margin: 20px auto 0;
    }

    .div1 a {
        position: absolute;
        top: 0px;
        left: 0px;
        font-family: Microsoft YaHei;
        color: #7a43b6;
        font-weight: bold;
        text-decoration: none;
        padding: 3px 6px;
    }

    .div1 a:hover {
        border: 1px solid #eee;
        background: #fff;
    }
</style>
<script language="javascript" type="text/javascript" src="<?php echo base_url() ?>js/jquery.js"></script>
<script src="<?php echo base_url() ?>js/tagCloud.js"></script>
<div class="div1" id="tagCloud">
    <?php foreach ($tags as $tag) { ?>
        <a href="javascript:void(0)" onclick="hah(<?php echo $tag['id']; ?>)"><?php echo $tag['tag']; ?></a>
    <?php } ?>
</div>
<script>
    $(function () {
        $('#tagCloud').tagCloud();
    });
    function hah(id){
        var form = new FormData();
        form.append('id',id);
        $.ajax({
            url:"<?php echo site_url("select2/select/add")?>",
            type:"post",
            data:form,
            processData: false,
            contentType: false,
            success:function(data){

            }
        });
    }
</script>

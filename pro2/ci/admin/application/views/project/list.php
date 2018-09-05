<div id="wrap">
    <div id="cen">
        <button id="create" style="width: 100px;float:right;margin-bottom: 20px;">新增
        </button>
        <table border="1" style="width: 100%;">
            <tr>
                <th>ID</th>
                <th>项目名称</th>
                <th>地区</th>
                <th>操作</th>
            </tr>
            <?php foreach ($list as $k => $v) { ?>
                <tr>
                    <th><?php echo $v['id']; ?></th>
                    <th><?php echo $v['project_name']; ?></th>
                    <th><?php echo $v['region_name']; ?></th>
                    <th>
                        <a href="<?php echo site_url() . '/project/project/edit?id=' . $v['id']; ?>">编辑</a>
                        /
                        <a href="javascript:void(0)" onclick="del(<?php echo $v['id']; ?>)">删除</a>
                    </th>
                </tr>
            <?php } ?>
        </table>
    </div>
</div>
<script>
    $('#create').click(function () {
        window.location.href = "<?php echo site_url('/project/project/edit');?>";
    });

    function del(id) {
        if (confirm('确定要删除吗?') == true) {
            var id = id;
            $.ajax({
                url: '<?php echo site_url("project/project/delete")?>',
                type: 'post',
                data: {id: id},
                dataType: 'json',
                success: function (data) {
                    if (data.code == 'success') {
                        alert('删除成功')
                        history.go(0);
                    } else {
                        alert(data.message);
                    }
                }
            });
        }
    }
</script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/js/jquery.select2/select2.css"/>
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
        width: 500px;
        margin: 0px auto;
    }
</style>
<script language="javascript" type="text/javascript" src="<?php echo base_url() ?>js/jquery.js"></script>
<script language="JavaScript"> var base_url = '<?php echo base_url()?>'; </script>
<script language="javascript" type="text/javascript" src="<?php echo base_url() ?>js/admin.js"></script>
<script language="JavaScript">

</script>
<div id="wrap">
    <div id="cen">
        <table border="1" style="width: 100%;">
            <tr>
                <td>ID</td>
                <td>项目名称</td>
                <td>路人A</td>
                <td>路人B</td>
                <td>操作</td>
            </tr>
            <?php foreach ($list as $k => $v) { ?>
                <tr>
                    <td><?php echo $v['id']; ?></td>
                    <td><?php echo $v['project_name']; ?></td>
                    <td><?php echo $v['a_names']; ?></td>
                    <td><?php echo $v['b_names']; ?></td>
                    <td>
                        <a href="<?php echo site_url() . '/admin_account/admin_account/edit?id=' . $v['id']; ?>">编辑</a>
                        /
                        <a href="<?php echo site_url() . '/admin_account/admin_account/delete?id=' . $v['id']; ?>">删除</a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
</div>
<div id="wrap">
    <div id="cen">
        <table border="1" style="width: 100%;">
            <tr>
                <th>ID</th>
                <th>项目名称</th>
                <th>路人A</th>
                <th>路人B</th>
                <th>操作</th>
            </tr>
            <?php foreach ($list as $k => $v) { ?>
                <tr>
                    <th><?php echo $v['id']; ?></th>
                    <th><?php echo $v['project_name']; ?></th>
                    <th><?php echo $v['a_names']; ?></th>
                    <th><?php echo $v['b_names']; ?></th>
                    <th>
                        <a href="<?php echo site_url() . '/project/project_people/edit?id=' . $v['id']; ?>">编辑</a>
                        /
                        <a href="<?php echo site_url() . '/project/project_people/delete?id=' . $v['id']; ?>">删除</a>
                    </th>
                </tr>
            <?php } ?>
        </table>
    </div>
</div>
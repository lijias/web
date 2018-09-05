<div class="wmenu">
    <?php $left_list = $this->session->userdata('left_list'); ?>
    <?php $mod_id = $this->session->userdata('mod_id'); ?>
    <dl>
        <?php foreach ($left_list as $k => $v) { ?>
            <?php if ($v['id_parent'] == $mod_id) { ?>
                <dt><a href="javascript:void(0);"><?php echo $v['cn_name'] ?></a></dt>
                <?php foreach ($left_list as $kk => $vv) { ?>
                    <?php if ($v['id'] == $vv['id_parent']) { ?>
                        <dd><a href="<?php echo site_url() . $vv['url']; ?>"><?php echo $vv['cn_name'] ?></a></dd>
                    <?php } ?>
                <?php } ?>
            <?php } ?>
        <?php } ?>
    </dl>
</div>
<script type="text/javascript">
    $('.wmenu dl dt').click(function () {
        $(this).toggleClass('icotop');
        $(this).siblings('dd').toggleClass('hidden');
    });
</script>
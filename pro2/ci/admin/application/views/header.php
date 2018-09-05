<link rel="stylesheet" href="<?php echo base_url() . '/css/header.css'; ?>">
<link rel="stylesheet" href="<?php echo base_url() . '/css/left.css'; ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/js/jquery.select2/select2.css"/>
<style>
    #out a {
        width: 80px;
        height: 48px;
        line-height: 50px;
        background: #800000;
        color: #FFF;
        margin: 0px 10px;
        font-size: 12px;
        display: block;
        text-align: center;
        text-decoration: none;
    }

    #wrap {
        position: fixed;
        top: 190px;
        left: 0;
        width: 100%;
    }

    #cen {
        position: relative;
        height: 200px;
        top: -100px;
        width: calc(100% - 500px);;
        margin: 0px auto;
        z-index: 9999;
    }
</style>
<html>
<head>
    <script language="javascript" type="text/javascript" src="<?php echo base_url() ?>js/jquery.js"></script>
    <script src="<?php echo base_url() ?>/js/jquery.select2/select2.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>/js/jquery.select2/select2_locale_zh-CN.js" type="text/javascript"></script>
    <title></title>
</head>
<body>
<div class="nav">
    <ul>
        <li>
            <img src="<?php echo base_url() ?>upload/logo.jpeg" style="width: 191.5px;height: 50px;">
        </li>
        <?php $header_list = $this->session->userdata('header_list'); ?>
        <?php foreach ($header_list as $k => $v) { ?>
            <li><a href="<?php echo site_url() . $v['url']; ?>"><?php echo $v['cn_name']; ?></a></li>
        <?php } ?>
    </ul>
    <div id="out" align="right">
        <a href="<?php echo site_url() ?>/login">退出</a>
    </div>
</div>
</body>
</html>
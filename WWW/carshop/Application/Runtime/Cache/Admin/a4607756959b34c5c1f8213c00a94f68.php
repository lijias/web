<?php if (!defined('THINK_PATH')) exit();?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>查看及回复留言-后台管理</title>
    <link rel="stylesheet" type="text/css" href="<?PHP echo ADMIN_PUC;?>/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="<?PHP echo ADMIN_PUC;?>/css/main.css"/>
    <script type="text/javascript" src="<?PHP echo ADMIN_PUC;?>/js/libs/modernizr.min.js"></script>
    
    
</head>
<body>

<!--头部 -->
<div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <h1 class="topbar-logo none"><a href="" class="navbar-brand">后台管理</a></h1>
            <ul class="navbar-list clearfix">
                <li><a class="on" href="/carshop/index.php/Admin/Index/index">首页</a></li>
                <li><a href="/carshop/index.php/Home/Index/index" target="_blank">网站首页</a></li>
            </ul>
        </div>
        <div class="top-info-wrap">
            <ul class="top-info-list clearfix">
                <li><a href="/carshop/index.php/Admin/Admin/update/id/<?php echo session('id');?>">欢迎您，<?php echo session('rolename');?>:<?php echo session('username');?></a></li>
                <li><a href="/carshop/index.php/Admin/Admin/update/id/<?php echo session('id');?>">修改密码</a></li>
                <li><a href="/carshop/index.php/Admin/Admin/logout">退出</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- /头部 -->

<div class="container clearfix">
 <div class="sidebar-wrap">
        <div class="sidebar-title">
            <h1>菜单</h1>
        </div>
    <!--左侧-->

        <div class="sidebar-content">
            <ul class="sidebar-list">
            <!--
            <?php $menu=session('menu'); foreach($menu as $k=>$v): ?>
            <li>
                    <a href="#"><i class="icon-font">&#xe003;</i><?php echo $v['pri_name'];?></a>
                    <ul class="sub-menu">
                  <?php foreach($v['sub'] as $k1=>$v1):?>
                        <li><a href="<?php echo U($v1['mname'].'/'.$v1['cname'].'/'.$v1['aname']);?>"><i class="icon-font">&#xe008;</i><?php echo $v1['pri_name'];?></a></li>
                  <?php endforeach;?>      
                    </ul>
                </li>
            <?php endforeach;?>
            -->
                 <li>
                    <a href="#"><i class="icon-font">&#xe003;</i>常用操作</a>
                    <ul class="sub-menu">
                        <li><a href="/carshop/index.php/Admin/Cate/lst"><i class="icon-font">&#xe008;</i>栏目管理</a></li>
                        <li><a href="/carshop/index.php/Admin/Article/lst"><i class="icon-font">&#xe005;</i>文章管理</a></li>                       
                        <li><a href="/carshop/index.php/Admin/Message/lst"><i class="icon-font">&#xe004;</i>留言管理</a></li>
                        <li><a href="/carshop/index.php/Admin/Job/lst"><i class="icon-font">&#xe012;</i>求职信息</a></li>
                        <li><a href="/carshop/index.php/Admin/Link/lst"><i class="icon-font">&#xe052;</i>友情链接</a></li>
                        <li><a href="design.html"><i class="icon-font">&#xe033;</i>广告管理</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-font">&#xe018;</i>系统管理</a>
                    <ul class="sub-menu">
                        <li><a href="/carshop/index.php/Admin/System/lst"><i class="icon-font">&#xe017;</i>系统设置</a></li>
                        <li><a href="/carshop/index.php/Admin/Admin/lst"><i class="icon-font">&#xe006;</i>管理员管理</a></li>
                        <li><a href="/carshop/index.php/Admin/Privilege/lst"><i class="icon-font">&#xe037;</i>权限列表</a></li>
                        <li><a href="/carshop/index.php/Admin/Role/lst"><i class="icon-font">&#xe046;</i>角色列表</a></li>
                        <li><a href="system.html"><i class="icon-font">&#xe045;</i>数据还原</a></li>
                    </ul>
                </li> 
                
            </ul>
        </div>
    </div>  
    <!--/左侧-->
    
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="/carshop/index.php/Admin/Index/index">首页</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="/carshop/index.php/Admin/Message/lst.html">留言管理</a><span class="crumb-step">&gt;</span><span>查看及回复留言</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form action="" method="post" id="myform" name="myform" enctype="multipart/form-data">
                	<input type="hidden" name="id" value="<?php echo ($messages["id"]); ?>"/>
                    <table class="insert-tab" width="100%">
                        <tbody>
                            <tr>
                                <th><i class="require-red">*</i>姓名：</th>
                                <td>
                                    <?php echo ($messages["nickname"]); ?>
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>手机：</th>
                                <td>
                                    <?php echo ($messages["telephone"]); ?>
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>邮箱：</th>
                                <td>
                                    <?php echo ($messages["email"]); ?>
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>留言内容：</th>
                                <td>
                                    <?php echo ($messages["content"]); ?>
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>审核状态：</th>
                                <td>
                                  	 <input type="checkbox" name="checked" value=1 <?php if($messages['checked'] == 1): ?>checked="checked"<?php endif; ?>/>  审核通过
                                            
                                </td>
                            </tr>
                            <tr>
                                <th></th>
                                <td>
                                    <input class="btn btn-primary btn6 mr10" value="审核" type="submit">
                                    <input class="btn btn6" onclick="history.go(-1)" value="返回" type="button">
                                </td>
                            </tr>
                        </tbody></table>
                </form>
            </div>
        </div>

    </div>
    <!--/main-->
</div>
</body>
</html>
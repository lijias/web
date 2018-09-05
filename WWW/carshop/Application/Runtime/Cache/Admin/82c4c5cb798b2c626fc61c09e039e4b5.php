<?php if (!defined('THINK_PATH')) exit();?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>修改求职信息-后台管理</title>
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
            <div class="crumb-list"><i class="icon-font"></i><a href="/carshop/index.php/Admin/Index/index">首页</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="/carshop/index.php/Admin/Job/lst.html">求职信息管理</a><span class="crumb-step">&gt;</span><span>求职信息查看</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form method="post" name="hrform" id="hrform" action="">
        
        <table width="95%" border="1"  cellspacing="0" cellpadding="3" align="center" class="hr"> 
            <tbody><tr>
            <td height="40" colspan="4" align="center" class="bord"><h2>求职表</h2></td>
            </tr>
            <tr>
            <td height="25" align="right" class="bord"><span class="c_red">*</span>应聘职位：</td>
            <td height="25" colspan="3" align="left" class="bord">
            <?php echo ($jobs["title"]); ?>
            </td>
            </tr>
            <tr>
            <td height="25" align="right" class="bord"><span class="c_red">*</span>真实姓名：</td>
            <td height="25" align="left" class="bord">
            <?php echo ($jobs["name"]); ?>
            </td>
            <td height="25" align="right" class="bord">性别：</td>
            <td height="25" align="left" class="bord">
            <?php echo ($jobs["sex"]); ?>
            </tr>
            <tr>
            <td width="14%" height="25" align="right" class="bord">民族：</td>
            <td width="27%" height="25" align="left" class="bord">
            <?php echo ($jobs["nation"]); ?>
            </td>
            <td width="17%" height="25" align="right" class="bord">出生日期：</td>
            <td width="42%" height="25" align="left" class="bord">
            <?php echo ($jobs["age"]); ?>
            </tr>
            <tr>
            <td width="14%" height="25" align="right" class="bord">婚姻状况：</td>
            <td width="27%" height="25" align="left" class="bord">
            <?php echo ($jobs["marry"]); ?>
            </td>
            <td width="17%" height="25" align="right" class="bord">有无子女：</td>
            <td width="42%" height="25" align="left" class="bord">
            <?php echo ($jobs["child"]); ?>
            </td>
            </tr>
            <tr>
            <td width="14%" height="25" align="right" class="bord">籍贯：</td>
            <td width="27%" height="25" align="left" class="bord">
            <?php echo ($jobs["bplace"]); ?>
            </td>
            <td width="17%" height="25" align="right" class="bord">户口所在地：</td>
            <td width="42%" height="25" align="left" class="bord">
            <?php echo ($jobs["address"]); ?>
            </td>
            </tr>
            <tr>
            <td width="14%" height="25" align="right" class="bord">学历：</td>
            <td height="25" align="left" class="bord">
           <?php echo ($jobs["education"]); ?>
            </td>
            <td height="25" align="right" class="bord"><span class="STYLE2">外语语种及程度：</span></td>
            <td height="25" align="left" class="bord">
            <?php echo ($jobs["foreign"]); ?>
            </td>
            </tr>
            <tr>
            <td width="14%" height="25" align="right" class="bord"><span class="c_red">*</span>移动电话：</td>
            <td width="27%" height="25" align="left" class="bord">
            <?php echo ($jobs["mobile"]); ?>
            </td>
            <td width="17%" height="25" align="right" class="bord">电子邮件：</td>
            <td width="42%" height="25" align="left" class="bord">
            <?php echo ($jobs["email"]); ?>
            </td>
            </tr>
            <tr>
            <td height="25" align="right" class="bord">身份证号：</td>
            <td height="25" align="left" class="bord">
            <?php echo ($jobs["idnums"]); ?>
            </td>
            <td height="25" align="right" class="bord"><span class="STYLE2">现住址：</span></td>
            <td height="25" align="left" class="bord">
            <?php echo ($jobs["address_now"]); ?>
            </td>
            </tr>
            <tr>
            <td width="14%" height="25" align="right" class="bord">可到职日期：</td>
            <td height="25" colspan="3" align="left" class="bord">
            <?php echo ($jobs["slim"]); ?>
            </td>
            </tr>
            <tr>
            <td width="14%" height="25" align="right" class="bord">备注：</td>
            <td height="25" colspan="3" align="left" class="bord">
            <?php echo ($jobs["content"]); ?>
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
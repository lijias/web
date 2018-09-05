<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>后台管理</title>
    <link rel="stylesheet" type="text/css" href="<?PHP echo ADMIN_PUC;?>/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="<?PHP echo ADMIN_PUC;?>/css/main.css"/>
    <script type="text/javascript" src="<?PHP echo ADMIN_PUC;?>/js/libs/modernizr.min.js"></script>
    <script type="text/javascript" src="<?PHP echo ADMIN_PUC;?>/js/jquery-1.4.2.min.js"></script>
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
            <div class="crumb-list"><i class="icon-font"></i><a href="/carshop/index.php/Admin/Index/index">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">栏目管理</span></div>
        </div>
        <div class="search-wrap">
            <div class="search-content">
                <form action="/jscss/admin/design/index" method="post">
                    <table class="search-tab">
                        <tr>
                            <th width="120">选择分类:</th>
                            <td>
                                <select name="search-sort" id="">
                                    <option value="">全部</option>
                                    <option value="19">精品界面</option><option value="20">推荐界面</option>
                                </select>
                            </td>
                            <th width="70">关键字:</th>
                            <td><input class="common-text" placeholder="关键字" name="keywords" value="" id="" type="text"></td>
                            <td><input class="btn btn-primary btn2" name="sub" value="查询" type="submit"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
        <div class="result-wrap">
            <form name="myform" id="myform" method="post">
                <div class="result-title">
                    <div class="result-list">
                        <a href="/carshop/index.php/Admin/Cate/add.html" class="btn btn-primary btn2"><i class="icon-font"></i>新增栏目</a>
                        <a id="batchDel" href="javascript:void(0)"><i class="icon-font"></i><input form="myform" formaction="/carshop/index.php/Admin/Cate/bdelete.html" type="submit" value="批量删除" class="btn btn-primary btn2"/></a>
                        <a id="updateOrd" href="javascript:void(0)"><i class="icon-font"></i><input form="myform" formaction="/carshop/index.php/Admin/Cate/sortcate.html" type="submit" value="更新排序" class="btn btn-primary btn2"/></a>
                    </div>
                </div>
                <div class="result-content">
                    <table class="result-tab" width="100%">
                        <tr>
                            <th class="tc" width="5%"><input class="allChoose" id="check" name="" type="checkbox"></th>
                            <th>排序</th>
                            <th>ID</th>
                            <th>栏目名称</th>
                            <th>栏目类型</th>
                            <th>缩略图</th>
                            <th>是否PC端</th>
                            <th>操作</th>
                        </tr>
                        <?php if(is_array($cates)): foreach($cates as $key=>$v): ?><tr>
                            <td class="tc"><input name="ids[]" value="<?php echo ($v["id"]); ?>" class="check" type="checkbox"></td>
                            <td>
                               <!--  <input name="ids[]" value="59" type="hidden"> --> 
                                <input class="common-input sort-input" name="<?php echo ($v["id"]); ?>" value="<?php echo ($v["sort"]); ?>" type="text">
                            </td>
                            <td><?php echo ($v["id"]); ?></td>
                            <td><?php if($v['parentid'] != 0): ?>|<?php endif; echo str_repeat('-',$v['level']*8); echo ($v["name"]); ?></td>
                            <td>
                            	<?php if($v['type'] == 1): ?>列表
                            	<?php elseif($v['type'] == 2): ?>
                            		单页
                               	<?php elseif($v['type'] == 3): ?>
                            		留言
                            	<?php elseif($v['type'] == 4): ?>
                            		招聘
                            	<?php elseif($v['type'] == 5): ?>
                            		车辆列表
                            	<?php elseif($v['type'] == 6): ?>
                            		荣誉列表
                            	<?php elseif($v['type'] == 7): ?>
                            		求职表<?php endif; ?>
                            </td>
                            <td>
                            	<?php if($v['pic'] != ''): ?><img alt="" src="/carshop/<?php echo ($v["pic"]); ?>" height="50px">
                            	<?php else: ?>
                            		暂无缩略图<?php endif; ?>
                            </td>
                            <td>
                            	<?php if($v['pc'] == 1): ?>PC端<?php else: ?>移动端<?php endif; ?>
                            </td>
                            <td>
                                <a class="link-update" href="/carshop/index.php/Admin/Cate/update/id/<?php echo ($v["id"]); ?>.html">修改</a>
                                <a class="link-del" onclick="return confirm('是否删除该分类下的所有类容!');" href="/carshop/index.php/Admin/Cate/delete/id/<?php echo ($v["id"]); ?>.html">删除</a>
                            </td>
                        </tr><?php endforeach; endif; ?>                     
                    </table>
                   
                </div>
            </form>
        </div>
    </div>
    <!--/main-->
</div>
</body>
</html>
<script>
	$("#check").click(function(){
		if($(this).attr("checked"))
		{
			$(".check").attr("checked","checked")
		}
		else
		{
			$(".check").removeAttr("checked")
		}
	});
</script>
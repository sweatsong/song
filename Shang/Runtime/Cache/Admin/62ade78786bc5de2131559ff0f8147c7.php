<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>全民尚网后台管理</title>
    <link rel="stylesheet" type="text/css" href="/Public/Admin/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="/Public/Admin/css/main.css"/>
     <link rel="stylesheet" type="text/css" href="/Public/Admin/css/page.css"/>
    <script type="text/javascript" src="/Public/Admin/js/libs/modernizr.min.js"></script>

 
</head>
<body>
<div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <h1 class="topbar-logo none"><a href="index.html" class="navbar-brand">后台管理</a></h1>
            <ul class="navbar-list clearfix">
                <li><a class="on" href="<?php echo U('Index/index');?>">首页</a></li>
                <li><a href="http://www.shang-wifi.com/" target="_blank">网站首页</a></li>
            </ul>
        </div>
        <div class="top-info-wrap">
            <ul class="top-info-list clearfix">
                <li><?php echo (session('username')); ?></li>
                <li><a href="<?php echo U('User/edit');?>/id/<?php echo (session('id')); ?>">修改密码</a></li>
                <li><a href="<?php echo U('User/quit');?>">退出</a></li>
            </ul>
        </div>
    </div>
</div>

<div class="container clearfix">
    <div class="sidebar-wrap">
        <div class="sidebar-title">
            <h1>菜单</h1>
        </div>
        <div class="sidebar-content">
            <ul class="sidebar-list">
                <li>
                    <a href="#"><i class="icon-font">&#xe002;</i>常用操作</a>
                    <ul class="sub-menu">
                        <li><a href="<?php echo U('User/index');?>"><i class="icon-font">&#xe003;</i>管理员管理</a></li>
                        <li><a href="<?php echo U('UserInfo/index');?>"><i class="icon-font">&#xe005;</i>用户信息</a></li>
                       <!--  <li><a href="<?php echo U('Product/index');?>"><i class="icon-font">&#xe006;</i>产品管理</a></li>
                       <li><a href="<?php echo U('Category/index');?>"><i class="icon-font">&#xe004;</i>分类管理</a></li>
                       <li><a href="<?php echo U('Indeximage/index');?>"><i class="icon-font">&#xe012;</i>主页图片轮播</a></li>
                       <li><a href="#"><i class="icon-font">&#xe052;</i>友情链接</a></li>
                       <li><a href="#"><i class="icon-font">&#xe033;</i>广告管理</a></li> -->
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-font">&#xe018;</i>系统管理</a>
                    <ul class="sub-menu">
                        <li><a href="#"><i class="icon-font">&#xe017;</i>系统设置</a></li>
                        <li><a href="#"><i class="icon-font">&#xe037;</i>清理缓存</a></li>
                        <li><a href="#"><i class="icon-font">&#xe046;</i>数据备份</a></li>
                        <li><a href="#"><i class="icon-font">&#xe045;</i>数据还原</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
   
    <!--/sidebar-->
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="<?php echo U('Index/index');?>">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">作品管理</span></div>
        </div>
    
        <div class="result-wrap">
            <form name="myform" id="myform" method="post">
                <div class="result-title">
                    <div class="result-list">
                        <a href="<?php echo U('User/add');?>"><i class="icon-font"></i>新增用户</a>
                        <a id="batchDel" href="javascript:void(0)"><i class="icon-font"></i>批量删除</a> 
                    </div>
                </div>
                <div class="result-content">
                    <table class="result-tab" width="100%">
                        <tr >
                            <th class="tc" width="5%" style="text-align:center"><input class="allChoose" name="" type="checkbox"></th>
                            <th style="text-align:center">ID</th>
                            <th style="text-align:center">用户名</th>
                            <th style="text-align:center">操作</th>
                        </tr>
                     <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                            <td class="tc"><input name="id[]" value="58" type="checkbox"></td>
                     		<td style="text-align:center"><?php echo ($vo["id"]); ?></td>
                     		<td style="text-align:center"><?php echo ($vo["name"]); ?></td>
                            <td style="text-align:center">
                                <a class="link-update" href="<?php echo U('Admin/User/edit/id/'.$vo['id']);?>">修改</a>
                                <a class="link-del"  href="<?php echo U('Admin/User/dele/id/'.$vo['id']);?>"  onclick="return confirm('确认删除')"  >删除</a>
                            </td>
                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                    </table>
                    <div class="list-page"> 2 条 1/1 页</div>
                </div>
            </form>
        </div>
    </div>
    <!--/main-->
</div>
</body>
</html>
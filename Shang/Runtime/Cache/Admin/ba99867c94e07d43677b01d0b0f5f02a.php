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
            <div class="crumb-list"><i class="icon-font"></i><a href="<?php echo U('Index/index');?>">首页</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="<?php echo U('User/index');?>">用户管理</a><span class="crumb-step">&gt;</span><span>用户修改</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form action="/index.php/Admin/User/editOk" method="post" id="myform" name="myform" enctype="multipart/form-data">
                <input type="hidden"  name='id' value="<?php echo ($id); ?>">
                    <table class="insert-tab" width="100%">
                        <tbody><tr>
                            <th width="120"><i class="require-red">*</i>用户名：</th>
                            <td>
                               <input class="common-text required" id="username" name="username" size="50" value="<?php echo ($name); ?>" type="text">
                            </td>
                        </tr>
                            <tr>
                                <th><i class="require-red">*</i>新密码：</th>
                                <td>
                                    <input class="common-text required" id="password" name="password" size="50" value="" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th></th>
                                <td>
                                    <input class="btn btn-primary btn6 mr10" value="提交" type="submit">
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
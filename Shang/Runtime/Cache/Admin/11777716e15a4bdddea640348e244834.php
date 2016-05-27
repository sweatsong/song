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
                        <li><a href="<?php echo U('User/index');?>"><i class="icon-font">&#xe003;</i>用户管理</a></li>
                        <li><a href="<?php echo U('Article/newslist');?>"><i class="icon-font">&#xe005;</i>博文管理</a></li>
                        <li><a href="<?php echo U('Product/index');?>"><i class="icon-font">&#xe006;</i>产品管理</a></li>
                        <li><a href="design.html"><i class="icon-font">&#xe004;</i>留言管理</a></li>
                        <li><a href="design.html"><i class="icon-font">&#xe012;</i>评论管理</a></li>
                        <li><a href="design.html"><i class="icon-font">&#xe052;</i>友情链接</a></li>
                        <li><a href="design.html"><i class="icon-font">&#xe033;</i>广告管理</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-font">&#xe018;</i>系统管理</a>
                    <ul class="sub-menu">
                        <li><a href="system.html"><i class="icon-font">&#xe017;</i>系统设置</a></li>
                        <li><a href="system.html"><i class="icon-font">&#xe037;</i>清理缓存</a></li>
                        <li><a href="system.html"><i class="icon-font">&#xe046;</i>数据备份</a></li>
                        <li><a href="system.html"><i class="icon-font">&#xe045;</i>数据还原</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
   
    <!--/sidebar-->
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="<?php echo U('Index/index');?>">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">商品信息</span></div>
    
        <div class="result-wrap">
            <form name="myform" id="myform" method="post">
                <div class="result-title">
                    <div class="result-list">
                        <a href="<?php echo U('Product/add');?>"><i class="icon-font"></i>新增商品</a>
                       
                        <a id="batchDel"  onclick='Alldele()' href=""><i class="icon-font"></i>批量删除</a>
                    </div>
                </div>
                <div class="result-content">
                    <table class="result-tab" width="100%" >
                        <tr>
                            <th class="tc" width="5%"><input class="allChoose" name="" type="checkbox"></th>
                            <th style="text-align:center">序号</th>
                            <th style="text-align:center">商品名</th>
                            <th style="text-align:center">价格/元</th>                                                    
                            <th style="text-align:center">商品图</th> 
                            <th style="text-align:center">商品描述</th>                               
                            <th style="text-align:center">创建时间</th>
                            <th style="text-align:center">操作</th>
                        </tr>
                      
                        <?php if(is_array($data)): $k = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><tr>                     
                            <td class="tc"><input name="id[]" value="<?php echo ($vo["id"]); ?>" type="checkbox"></td>
                     		<td style="text-align:center"><?php echo ($k); ?></td>
                                          <td style="text-align:center"><?php echo ($vo["name"]); ?></td>
                       		<td style="text-align:center"><?php echo ($vo["price"]); ?></td>                   
                     		<td style="text-align:center"><img src='/Public/<?php echo ($vo["thumb"]); ?>' width='' height=''/></td>                 
                     		<?php $time=$vo['addtime'];?>
                                          <td style="text-align:center" id='desc' name='<?php echo ($vo["desc"]); ?>' onclick='Alldesc(this)'><?php echo htmlspecialchars_decode(substr($vo['desc'],0,30));?></td>        
                     		<td style="text-align:center"><?php echo (date('Y-m-d H:i:s',$time)); ?></td>
                            <td style="text-align:center">
                                <a class="link-update" href="<?php echo U('Admin/Product/edit/id/'.$vo['id']);?>">修改</a>
                                <a class="link-del"  href="<?php echo U('Admin/Product/dele/id/'.$vo['id']);?>"  onclick="return confirm('确认删除')"  >删除</a>
                            </td>
                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                    </table>
                    <div class="manu"> <?php echo ($page); ?></div>
                </div>
            </form>
        </div>
    </div>
    <!--/main-->
    <script type="text/javascript">

        function Alldesc(obj){
            var desc=obj.innerHTML;
            obj.innerHTML=obj.getAttribute('name');
            obj.setAttribute('name',desc);
        }

      function Alldele(){
        var obj=document.getElementsByName('id');
        alert(typeof(obj));
      }
    </script>
</div>
</body>
</html>
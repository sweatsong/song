<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>全民尚网科技有限公司-新闻</title>
<link rel="stylesheet" href="/Public/Home/css/reste.css" type="text/css" />
<link rel="stylesheet" href="/Public/Home/css/base-main.css" type="text/css" />

<script type="text/javascript" src="/Public/Home/js/jquery-1.9.0.min.js"></script>



<!--翻页 -->
<script type="text/javascript" src="/Public/Home/js/pages.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$("#Pagination").pagination("8");//设置翻页数量
});
</script>

<!--右侧客服 js -->
<script type="text/javascript" src="/Public/Home/js/zzsc.js"></script>	
<script>
$(function (){
	
//点击弹出在线反馈	
var ofClick=document.getElementById("feedCLick");
var oFeedback=document.getElementById("feedback");
var ohClose=document.getElementById("hclose");//alert(1);

ofClick.onclick=function (){
	oFeedback.style.display="block";
	oSubBox.style.display="none";
};
ohClose.onclick=function (){
	oFeedback.style.display="none";
};


//提交成功
var oSubBox=document.getElementById("sub-box");
var oSubClose=document.getElementById("hclose02");
oSubClose.onclick=function (){
	oSubBox.style.display="none";
};

var oSubBtn=document.getElementById("subBtn");
oSubBtn.onclick=function (){
	oFeedback.style.display="none";
	oSubBox.style.display="block";
};

//选择反馈类型
var oFList=document.getElementById("feeTypeList");
var feType=oFList.getElementsByClassName("feeType");
//alert(feType.length);
for(i=0; i<feType.length; i++){
	feType[i].onclick=function (){
		
		for(var i=0; i<feType.length; i++){
			feType[i].className="feeType";
		}
		if(this.className=="feeType"){
			this.className +=" ftype_change";
		}else{
			
			this.className="feeType";
			
		}
	}
};


});
</script>
<!--导航点击显示下拉子菜单 -->
<script type="text/javascript" src="/Public/Home/js/nav-menu.js"></script>




</head>

<body style="background:#eff3f5;">
<div class="site-header">
	<div class="t-nav alignCenter">
    	<div class="container">
            <div class="ParentNav">
                <a href="<?php echo U('Index/index');?>" class="<?php echo ($active[0]); ?>">首页</a>
                <a href="<?php echo U('Index/personUser');?>" class="<?php echo ($active[1]); ?>" >个人用户</a>
                <a href="<?php echo U('Index/enterpriseUser');?>" class="<?php echo ($active[2]); ?>">企业用户</a>
                <a href="<?php echo U('Index/understandQM');?>" class="<?php echo ($active[3]); ?>" >了解全民</a>
                <a href="#">加盟合作</a>
            </div>                   	
        </div>
    </div>
    
    <div class="header-nav alignCenter">
    	<div class="container">
        	<h1 class="header-logo"><a href="index.html" title="全民尚网科技有限公司">全民尚网科技有限公司</a></h1>
            <div class="nav-list " id="navList">
            	<!--<ul class="menu">
                	<li class="nav-btn"><a href="javascript:;">I WANT</a><i class="t-arrow"></i></li>
                </ul>-->
            </div>
            <span class="fr T_userInfo">
            	<span href="#" class="t-cotus">联系我们</span><b class="line">|</b>
                <a href="#" class="Tweixing" id="topwx">微信<span class="top_wx"><img src="/Public/Home/images/weixing.png" /></span></a>
                <a href="#">微博</a>
            </span>   
            <div class="clr"></div>
        </div>
    </div>
    
    <!--下拉子菜单 Start-->
    <!--<div id="expandZone" class="expand" zdy="index">
    <div class="menuBox alignCenter">
    
        <div id="navMenu1" class="item">
            <div class="menuList container">
               <a href="#" class="navMLinks">浏览产品</a>
               <a href="#" class="navMLinks">铺设园区wifi</a>
               <a href="#" class="navMLinks">查询加盟</a>
               <a href="#" class="navMLinks">加入全民尚网</a>
               <a href="#" class="navMLinks">获得技术支持</a>
            </div>
       </div>
    <div id="closeBtn" class="close-btn"></div>
	</div></div>-->
    <!--下拉子菜单 End-->
    
  </div>  
</header>



<div class="H-90"></div>

<div class="alignCenter inside_warp">
<div class="container">
	<div class="newsMain">
        <nav>
        <ul class="fl inside_nav">
            <li class="active"><a href="#">新闻</a></li>
            <li><a href="#">专题策划</a></li>
            <li><a href="#">媒体声音</a></li>
            <li><a href="#">行业动态</a></li>
            <li><a href="#">技术洞察</a></li>
            <li><a href="#">全民信息</a></li>
        </ul>
        </nav>
    
    
    	<!--新闻页最多显示五条，多余翻页，功能需程序实现 -->
        <div class="fr newList">
        <ul>
        	<li>
            	<div class="fl newImg"><img src="/Public/Home/images/455556.jpg" /></div>
                <div class="fr newCnt">
                	<h3><a href="newsDetail.html">全民尚网与富士康达成战略合作协议于今日开始</a></h3>
                    <p class="new-jj">超值正品，再也不会担心头那里时间久了坏掉，感觉升级版萌萌哒，既好用又好看，下次还要再买，如风达快递真的很快，下次一定还会再来的...</p>
                    <div class="nc_btm">
                    	<span class="n-date">2016.2.16</span><a href="newsDetail.html" class="n-look">阅读全文</a>
                    </div>
                </div>
            </li>
            <li>
            	<div class="fl newImg"><img src="/Public/Home/images/455556.jpg" /></div>
                <div class="fr newCnt">
                	<h3><a href="newsDetail.html">全民尚网与富士康达成战略合作协议于今日开始</a></h3>
                    <p class="new-jj">超值正品，再也不会担心头那里时间久了坏掉，感觉升级版萌萌哒，既好用又好看，下次还要再买，如风达快递真的很快，下次一定还会再来的...</p>
                    <div class="nc_btm">
                    	<span class="n-date">2016.2.16</span><a href="newsDetail.html" class="n-look">阅读全文</a>
                    </div>
                </div>
            </li>
            <li>
            	<div class="fl newImg"><img src="/Public/Home/images/455556.jpg" /></div>
                <div class="fr newCnt">
                	<h3><a href="newsDetail.html">全民尚网与富士康达成战略合作协议于今日开始</a></h3>
                    <p class="new-jj">超值正品，再也不会担心头那里时间久了坏掉，感觉升级版萌萌哒，既好用又好看，下次还要再买，如风达快递真的很快，下次一定还会再来的...</p>
                    <div class="nc_btm">
                    	<span class="n-date">2016.2.16</span><a href="newsDetail.html" class="n-look">阅读全文</a>
                    </div>
                </div>
            </li>
            <li>
            	<div class="fl newImg"><img src="/Public/Home/images/455556.jpg" /></div>
                <div class="fr newCnt">
                	<h3><a href="newsDetail.html">全民尚网与富士康达成战略合作协议于今日开始</a></h3>
                    <p class="new-jj">超值正品，再也不会担心头那里时间久了坏掉，感觉升级版萌萌哒，既好用又好看，下次还要再买，如风达快递真的很快，下次一定还会再来的...</p>
                    <div class="nc_btm">
                    	<span class="n-date">2016.2.16</span><a href="newsDetail.html" class="n-look">阅读全文</a>
                    </div>
                </div>
            </li>
            <li>
            	<div class="fl newImg"><img src="/Public/Home/images/455556.jpg" /></div>
                <div class="fr newCnt">
                	<h3><a href="newsDetail.html">全民尚网与富士康达成战略合作协议于今日开始</a></h3>
                    <p class="new-jj">超值正品，再也不会担心头那里时间久了坏掉，感觉升级版萌萌哒，既好用又好看，下次还要再买，如风达快递真的很快，下次一定还会再来的...</p>
                    <div class="nc_btm">
                    	<span class="n-date">2016.2.16</span><a href="newsDetail.html" class="n-look">阅读全文</a>
                    </div>
                </div>
            </li>
        </ul>
        <!--翻页 start-->
        <div class="pages">
            <div id="Pagination"></div>
           
        </div>
        <!--翻页 end -->
        </div>
    </div>
	
</div>
</div>

<div class="H-90"></div>
<footer>
<div class="footer">
	<div class="container">
    	<div class="footer-links">
        	<dl class="col-links">
            	<dt>
                	<i class="fico-fwz"></i>
                    <h5>按访问者</h5>
                </dt>
                <dd>
                	<a href="<?php echo U('Index/personUser');?>">个人用户</a>
                    <a href="<?php echo U('Index/enterpriseUser');?>">企业用户</a>
                    <a href="#">新闻媒体</a>
                    <a href="#">供应商</a>
                    <a href="#">求职者</a>
                </dd>
            </dl>
            <dl class="col-links">
            	<dt>
                	<i class="fico-about"></i>
                    <h5>关于全民</h5>
                </dt>
                <dd>
                	<a href="#">公司简介</a>
                    <a href="#">全民文化</a>
                    <a href="#">全民团队</a>
                </dd>
            </dl>
            <dl class="col-links">
            	<dt>
                	<i class="fico-news"></i>
                    <h5>新闻</h5>
                </dt>
                <dd>
                	<a href="newsList.html">新闻</a>
                    <a href="#">媒体联系</a>
                </dd>
            </dl>
            <dl class="col-links">
            	<dt>
                	<i class="fico-links"></i>
                    <h5>快速连接</h5>
                </dt>
                <dd>
                	<a href="#">全民商城</a>
                    <a href="#">蓝领社区</a>
                    <a href="#">智慧公寓</a>
                    <a href="#">全民支付</a>
                    <a href="#">全民尚学</a>
                </dd>
            </dl>
            <div class="col-cnt">
            	<h5>全民尚网微信</h5>
                <span class="f-wx"><img src="/Public/Home/images/wx.jpg" /></span>
                <p>地址：深圳市龙华新区民治七星商业广场B座6层</p>
                <p>电话：+86-755-29307732</p>
                <p>Email: qmsw@shang—wifi.com</p>
            </div>
        </div>
    </div>
    <div class="foot-info">
    	<div class="container">
        	<span class="fot-sites">
            	<a href="#">加入我们</a><b class="f-line">|</b><a href="#">免责声明 </a><b class="f-line">|</b><a href="#">版权所有 </a><b class="f-line">|</b><a href="#">网站地图</a>
            </span>
    		<p>© 深圳全民尚网科技有限公司 2015-2016 。 保留一切权利。粤ICP备15062101号</p>
        </div>
    </div>
</div>
</footer>






<!--右侧悬浮客服 -->
<div id="scroolTop"></div>

<!-- 在线反馈 -->
<div class="Feedback-box" id="feedback" style="display:none;">
	<h2><a href="javascript:;" title="关闭" class="hClose" id="hclose"></a>在线反馈</h2>
    <dl class="feeTit">
    	<dt>请选择反馈类型</dt>
        <dd id="feeTypeList">
        	<span class="feeType"><i class="i-dot"></i>个人业务</span>
            <span class="feeType"><i class="i-dot"></i>企业业务</span>
            <span class="feeType"><i class="i-dot"></i>求职</span>
            <span class="feeType"><i class="i-dot"></i>其他</span>
        </dd>
    </dl>
    <ul class="typeFrom">
    	<li>
        	<span class="xh">*</span>
        	<input type="text" value="" placeholder="姓名" class="feInput wInput390" />
        </li>
        <li>
        	<span class="xh">*</span>
        	<input type="text" value="" placeholder="邮箱" class="feInput wInput390" />
        </li>
        <li>
        	<span class="xh">&nbsp;</span>
        	<input type="text" value="" placeholder="公司名称" class="feInput wInput180" />
            <input type="text" value="" placeholder="手机号码" class="feInput wInput180 feInputFR" />
        </li>
        <li>
        	<span class="xh">*</span>
            <textarea class="feInput feTextarae" name="" cols="" rows="" placeholder="请输入您的问题（不超过400字）"></textarea>
        </li>
        <li>
        	<span class="xh">&nbsp;</span>
        	<input type="button" value="提交" class="submitBtn" id="subBtn" /><span class="feeFZ">带*号为必填项！</span>
        </li>
    </ul>
</div>

<!--提交成功 -->
<div class="Feedback-box subBox" id="sub-box" style="display:none;">
	<h2><a href="javascript:;" title="关闭" class="hClose" id="hclose02"></a></h2>
    <div class="submitOK">
        <p>提交成功！</p>
    </div>
</div>



</body>
</html>
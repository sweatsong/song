<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>全民尚网科技有限公司</title>
<link rel="stylesheet" href="/Public/Home/css/reste.css" type="text/css" />
<link rel="stylesheet" href="/Public/Home/css/base-main.css" type="text/css" />

<!--轮播图切换js -->
<script type="text/javascript" src="/Public/Home/js/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="/Public/Home/js/jquery.flexslider-min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$('.flexslider').flexslider({
		directionNav: true,
		pauseOnAction: false
	});
});
</script>

<!--导航点击显示下拉子菜单 -->
<script type="text/javascript" src="/Public/Home/js/nav-menu.js"></script>



<!--滚动公告栏 js -->
<script type="text/javascript" src="/Public/Home/js/jquery.SuperSlide.2.1.1.js"></script>
<script type="text/javascript">
$(document).ready(function (){
	jQuery(".site-notice").slide({titCell:".hd ul",mainCell:".notice-cnt ul",autoPage:true,effect:"top",autoPlay:true,vis:1});
});
</script>


<!-- 战略合作 图片切换-->
<script src="/Public/Home/js/jquery.accordion.js"></script>
<script type="text/javascript">
	  $(document).ready(function(){
	    $(".accordion").accordion();
	  });
</script>


<!--右侧客服 js -->
<script type="text/javascript" src="/Public/Home/js/zzsc.js"></script>	
<script>
window.onload=function (){
	
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


}
</script>




<script type="text/javascript">
//点击弹出视频
$(function (){
var oVedioImg = document.getElementById('vedioImg');
var videobox = document.getElementById('videobox');
var closex  = document.getElementById('closex');
 
oVedioImg.onclick = function(){
    videobox.style.display = 'block';
}
closex.onclick = function(){
    videobox.style.display = 'none';
}


});


//头部微信
$(function (){
var oTWX=document.getElementById("topwx");
var owxHover=oTWX.getElementsByClassName("top_wx")[0];
oTWX.onmouseover=function (){
	owxHover.style.display="block";
};
oTWX.onmouseout=function (){
	owxHover.style.display="none";
};
});
</script>
</head>
<body>


<header>
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
        	<h1 class="header-logo"><a href="#" title="全民尚网科技有限公司">全民尚网科技有限公司</a></h1>
            <div class="nav-list " id="navList">
            	<ul class="menu">
                	<li class="nav-btn"><a href="javascript:;">I WANT</a><i class="t-arrow"></i></li>
                </ul>
            </div>
            <span class="fr T_userInfo">
            	<span href="#" class="t-cotus">联系我们</span><b class="line">|</b>
                <a href="#" class="Tweixing" id="topwx">微信<span class="top_wx"><img src="/Public/Home/images/weixing.png" /></span></a>
                <a href="#">微博</a>
            </span><div class="clr"></div>
        </div>
    </div>
    
    <!--下拉子菜单 Start-->
    <div id="expandZone" class="expand" zdy="index">
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
	</div></div>
    <!--下拉子菜单 End-->
    
  </div>  
</header>



<!--轮播图切换 -->
<div class="flexslider">
	<ul class="slides">
		<li style="background:url(/Public/Home/images/img1.jpg) 50% 0 no-repeat;"></li>
                     <li style="background:url(/Public/Home/images/img2.jpg) 50% 0 no-repeat;"></li>
                     <li style="background:url(/Public/Home/images/img3.jpg) 50% 0 no-repeat;"></li>
	</ul>
</div>
<!--轮播图切换 End-->

<div class="alignCenter">
<div class="container">
	<!--滚动公告栏 Start-->
    <div class="site-notice">
    <div class="notice-cnt">
   		 <ul class="noticeList">
    			<li><a href="#" tarzet="_blank">全民尚网与富士康达成战略合作伙伴</a><a href="#" class="look-btn">查看全文</a></li>
                <li><a href="#" target="_blank">口语：传说中文就能说英语！</a><a href="#" class="look-btn">查看全文</a></li>
                <li><a href="#" target="_blank">农场摘菜不如在线学外语好玩</a><a href="#" class="look-btn">查看全文</a></li>
            </ul>
        </div>
    </div>
    <!--滚动公告栏 End-->
    
   <!--战略合作 -->
    <article class="htmleaf-container">
		<div class="accordion">
			<ul>
				<li class="item1 active"><a href=""></a></li>
				<li class="item2"><a href=""></a></li>
				<li class="item3"><a href=""></a></li>
			</ul>
		</div>		
	</article>
    <!--战略合作 End-->
	
</div>
</div>

<!--视频 -->
<div class="pStatic">
<div class="index-vedio alignCenter">
	
    <div class="">
    	<div class="container">
        <div class="vedioMain">
           <img src="/Public/Home/images/video-bg.jpg" class="vebg" />
           <img id="vedioImg"  src="/Public/Home/images/vedio-img.png" />
            <div id="videobox" class="video-box">
                <div class="vedio_cnt">
                    <span id="closex"  class="close-video">×</span>
                    <video id="video" width="500" height="500" src="#" style="background:#000;"></video>
                </div>
            </div>
        </div>
        </div>

    </div>
</div>
</div>
<!--视频ñEnd-->



<!--新闻动态 -->
<div class="i-new-warp alignCenter">
    <div class="i-news-content">
	<div class="container">
    	<div class="i-n-tit">
      		<span class="i-n-ico"></span>
        	<h2>新闻动态</h2>
 			<span class="i-n-eng">NEWS CENTER</span>
        </div>
        <ul class="i-news-list2">
        	<li>
            	<div class="i-n-date">
                	<span class="i-month-day">2.16</span>
                    <span class="i-year">2016</span>
                </div>
                <dl class="i-n-nxt">
                	<dt><a href="newsDetail.html">全民尚网与富士康达成战略</a></dt>
                    <dd>超值正品，再也不会担心头那里时间久了坏掉，感觉升级版萌萌哒，既好用又好看，下次还要再买，如风达快递真的很</dd>
                </dl>
            </li>
            <li>
            	<div class="i-n-date">
                	<span class="i-month-day">2.16</span>
                    <span class="i-year">2016</span>
                </div>
                <dl class="i-n-nxt">
                	<dt><a href="newsDetail.html">全民尚网与富士康达成战略</a></dt>
                    <dd>超值正品，再也不会担心头那里时间久了坏掉，感觉升级版萌萌哒，既好用又好看，下次还要再买，如风达快递真的很</dd>
                </dl>
            </li>
            <li>
            	<div class="i-n-date">
                	<span class="i-month-day">2.16</span>
                    <span class="i-year">2016</span>
                </div>
                <dl class="i-n-nxt">
                	<dt><a href="newsDetail.html">全民尚网与富士康达成战略</a></dt>
                    <dd>超值正品，再也不会担心头那里时间久了坏掉，感觉升级版萌萌哒，既好用又好看，下次还要再买，如风达快递真的很</dd>
                </dl>
            </li>
            <li>
            	<div class="i-n-date">
                	<span class="i-month-day">2.16</span>
                    <span class="i-year">2016</span>
                </div>
                <dl class="i-n-nxt">
                	<dt><a href="newsDetail.html">全民尚网与富士康达成战略</a></dt>
                    <dd>超值正品，再也不会担心头那里时间久了坏掉，感觉升级版萌萌哒，既好用又好看，下次还要再买，如风达快递真的很</dd>
                </dl>
            </li>
            <li>
            	<div class="i-n-date">
                	<span class="i-month-day">2.16</span>
                    <span class="i-year">2016</span>
                </div>
                <dl class="i-n-nxt">
                	<dt><a href="newsDetail.html">全民尚网与富士康达成战略</a></dt>
                    <dd>超值正品，再也不会担心头那里时间久了坏掉，感觉升级版萌萌哒，既好用又好看，下次还要再买，如风达快递真的很</dd>
                </dl>
            </li>
            <li>
            	<div class="i-n-date">
                	<span class="i-month-day">2.16</span>
                    <span class="i-year">2016</span>
                </div>
                <dl class="i-n-nxt">
                	<dt><a href="newsDetail.html">全民尚网与富士康达成战略</a></dt>
                    <dd>超值正品，再也不会担心头那里时间久了坏掉，感觉升级版萌萌哒，既好用又好看，下次还要再买，如风达快递真的很</dd>
                </dl>
            </li>
        </ul>
        <div class="i-n-btm"><a href="<?php echo U('Index/newsList');?>" class="in-more">查看更多</a></div>
    </div>
    </div>
</div>

<!--引入尾部文件-->
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
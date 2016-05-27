<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>全民尚网科技有限公司</title>
<link rel="stylesheet" href="/Public/Home/css/reste.css" type="text/css" />
<link rel="stylesheet" href="/Public/Home/css/base-main.css" type="text/css" />

<script type="text/javascript" src="/Public/Home/js/jquery-1.9.0.min.js"></script>



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
	<div class="newsMain news_detail">
      <h2 class="newsTit">全民启动智慧公寓项目 开启智慧生活新时代</h2>
      <span class="newD-date"><i class="clockIco"></i>2016-03-07 10:29  <span class="fb">发表</span></span>
      <img src="/Public/Home/images/32656675767.jpg" style="width:100%; display:block;" />
      <div class="newsDetailCnt">
      	
        <p>2016年3月6日，全民尚网与碧桂园签署战略合作协议，充分发挥双方各自优势和特色，充分整合双方资源，在社区生活、娱乐、休闲等领域开展全面合作，探索建立社区智慧生活与互联网+时代的有效结合的途径，合力开启智慧公寓的智慧生活新时代。</p>
        <p>全民尚网此前已与富士康、比亚迪等知名大型企业达成深度战略合作，进一步提高WiFi领域市场竞争力，目前全民尚网线下布点已覆盖200多座城市的工厂、园区、城中村、学校等场所wifi，日均流量和使用频次巨大，是用户连接WiFi的首选平台。</p>
        <p>碧桂园集团是一家以房地产为主营业务，涵盖建筑、装修、物业管理、酒店开发及管理、教育等行业的国内著名综合性企业集团，中国房地产十强企业。下辖国家一级资质建筑公司、国家一级资质物业管理公司、甲级资质设计院等专业公司；涉及酒店、教育等多个行业。</p>
        <p>全民尚网早在今年的发展计划中就对智慧公寓项目有一定的倾斜方针。全民尚网在智慧公寓、智慧城市领域，依托其专业的商业WIFi技术，将社区的人连接到企业，将企业连接到更多企业，将每个人主动或者被动的连接到互联网，真正的实现智慧公寓、智慧城市、智慧生活的全新开端。全民尚网另外也锁定以手机为代表的智能移动终端用户，抢占互联网的原始入口，在物联网领域，为物联网的生态链提供所需的技术应用服务平台。</p>
        <p>次的战略合作，全民尚网为碧桂园提供全方位的智慧公寓服务，并为其开发专属的移动端应用服务系统，包括门禁系统、车禁系统、监管系统等智能物业管理，引入智能监管等硬件设备的引入，另外全民尚网在数据方面也将给予碧桂园全面支持，后续也将通过搭建WIFi入口，获取用户生活和用户消费习惯，不断的完善用户数据模型，有效获取和处理相关的价值。针对O2O生活服务，社区电商，互联网金融等进行全面分析服务，结合社区监管系统，利用wifi连接时代科技，实现信息共享，充分实现分享经济、分享智慧、分享生活的智能体验，为社区的智能化全面铺开道路。</p>
        <p>共享经济  合作共赢</p>
        <p>届时，双方将积极配合工作，从物业管理系统的搭建，到数据挖掘，都会有一套相对完善的流程，最后的数据分析和实际运用，需要两方针对性的协商，从而制定最有效的服务解决方案。届时，智慧公寓的智慧生活方式才算是真正的到来。</p>
        <p>当然双方的合作需要一个过程，但是我们可以预料到是，全民尚网结合碧桂园这一社区化服务模式，不仅为碧桂园带来更多的市场优势，也将会为智慧公寓带来一个全新的起点。也许到时候，全民尚网的提升智慧社区生活品质的梦想，将不再是梦想，而是惠及中国数亿人口的重大工程。而碧桂园，是见证工程开始的第一人。全民尚网现在还在为这个工程努力。为后期开展深入合作提供便利与经验。</p>
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
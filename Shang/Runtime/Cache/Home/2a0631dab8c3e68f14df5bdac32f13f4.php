<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>全民尚网科技有限公司-了解全民</title>
<link rel="stylesheet" href="/Public/Home/css/reste.css" type="text/css" />
<link rel="stylesheet" href="/Public/Home/css/base-main.css" type="text/css" />


<!--滚动显示一屏js -->
<script src="/Public/Home/js/jquery.js"></script>
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

<script src="/Public/Home/js/jquery.easing.js"></script>
<script src="/Public/Home/js/jquery.scrollify.min.js"></script>
<script src="/Public/Home/js/scroller.js" type="text/javascript"></script>
<script src="/Public/Home/js/init.js" type="text/javascript"></script>
<script>
$(function() {
	
	$('.panel').css({'height': $(window).height()});
	$('.introList2 li').css({'height': $(window).height()});
	$('.introList5 ul li').css({'height': $(window).height()});
	
	$.scrollify({
		section: '.panel'
	});
});
</script>





<!--公司简介滚动条 js-->
<script type="text/javascript" src="/Public/Home/js/jquery.nicescroll.js"></script>
<script type="text/javascript">
$(function (){
	$('#introduction').niceScroll({
		cursorcolor: "#9097a3",//#CC0071 光标颜色
		cursoropacitymax: 1, //改变不透明度非常光标处于活动状态（scrollabar“可见”状态），范围从1到0
		touchbehavior: false, //使光标拖动滚动像在台式电脑触摸设备
		cursorwidth: "9px", //像素光标的宽度
		cursorborder: "0", // 	游标边框css定义
		cursorborderradius: "5px",//以像素为光标边界半径
		autohidemode: false //是否隐藏滚动条
		
	});
});
</script>





<!--introList2 js -->
<script>
$(function (){
var oIntroList=document.getElementById("introList");
var oIntroLi=oIntroList.getElementsByTagName("li");

var arrL1IMg="";
var arrChange="";
var arrImg=["/Public/Home/images/hov-img1.jpg","/Public/Home/images/hov-img2.jpg","/Public/Home/images/hov-img3.jpg","/Public/Home/images/hov-img4.jpg"];

for(i=0; i<oIntroLi.length; i++){
	oIntroLi[i].index=i;
	oIntroLi[i].onmouseover=function (){
		arrL1IMg=this.getElementsByClassName("introImg")[0];
		arrChange=this.getElementsByClassName("inl2-change")[0];
		arrL1IMg.src=arrImg[this.index];
		arrL1IMg.style.display="block";
		arrChange.style.display="block";
	};
	
	oIntroLi[i].onmouseout=function (){
		arrL1IMg.style.display="none";
		arrChange.style.display="none";
	};
	
};	
})
</script>

<!--introList5 js -->
<script>
$(function (){
	
var oList5=document.getElementById("intrLIst5");
var oListLi=oList5.getElementsByTagName("li");
var oBlackBg="";

for(i=0; i<oListLi.length; i++){
	oListLi[i].onmouseover=function (){
		oBlackBg=this.getElementsByClassName("blackBg")[0];
		oBlackBg.style.display="none";
	}
	oListLi[i].onmouseout=function (){
		oBlackBg.style.display="block";
	}
}
});
</script>


</head>


<body  onload="defaultChoose()">


<!--01 Start -->
<div class="panel" style="background-color:#eff3f5;">
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
            <div id="navList" class="nav-list">
                <ul class="menu">
                    <li class="nav-NoMenu navMenu-change"><a href="#">全民简介</a></li>
                    <li class="nav-NoMenu"><a href="#">全民文化</a></li>
                    <li class="nav-NoMenu"><a href="#">全民团队</a></li>
                    <li class="nav-NoMenu"><a href="#">加入全民 </a></li>
                </ul>          
            </div>
            <span class="fr T_userInfo">
            	<span href="#" class="t-cotus">联系我们</span><b class="line">|</b>
                <a href="#" class="Tweixing" id="topwx">微信<span class="top_wx"><img src="/Public/Home/images/weixing.png" /></span></a>
                <a href="#">微博</a>
            </span>            
            <div class="clr"></div>
        </div>
    </div>
  </div>  
</header> 

  <div class="alignCenter intrQM_box1">	
  <div class="container">
  	<div class="fl QM-introduction">
    	<span class="qm_logo"><img src="/Public/Home/images/logo2.png" /></span>
       <!-- -->
       <div id="introduction">
            <p>深圳全民尚网科技有限公司（简称“全民尚网”）是一家以打通2.74亿蓝领人群互联入口实现蓝领人群智能化生活为使命的移动互联网公司</p>
            <h3>立足深圳覆盖全国</h3>
            <p>公司成立于2014年，截止至今全民尚网系列产品已经覆盖500个区域20个城市，基于客户需求持续创新，并赢得富士康、中国移动、中国联通等中国</p>
            <p>公司成立于2014年，截止至今全民尚网系列产品已经覆盖500个区域20个城市，基于客户需求持续创新，并赢得富士康、中国移动、中国联通等中国</p>
            <p>公司成立于2014年，截止至今全民尚网系列产品已经覆盖500个区域20个城市，基于客户需求持续创新，并赢得富士康、中国移动、中国联通等中国</p>
            <p>公司成立于2014年，截止至今全民尚网系列产品已经覆盖500个区域20个城市，基于客户需求持续创新，并赢得富士康、中国移动、中国联通等中国</p>
            <p>公司成立于2014年，截止至今全民尚网系列产品已经覆盖500个区域20个城市，基于客户需求持续创新，并赢得富士康、中国移动、中国联通等中国</p>
            <p>公司成立于2014年，截止至今全民尚网系列产品已经覆盖500个区域20个城市，基于客户需求持续创新，并赢得富士康、中国移动、中国联通等中国</p>
            <p>公司成立于2014年，截止至今全民尚网系列产品已经覆盖500个区域20个城市，基于客户需求持续创新，并赢得富士康、中国移动、中国联通等中国</p>
           
        </div>
		<!-- -->
    </div>
    <div class="fr QM-place">
    	<ul>
        	<li style="left:350px; top:325px;">
                <a href="#">
                    <span class="pl_city">广东</span>
                    <i class="flagIco"></i>
                    <div class="cityBox">
                        <i class="arrow-r"></i>
                        <span class="cityb-list">
                            <span>深圳</span>
                            <span>惠州</span>
                            <span>广州</span>
                            <span>珠海</span>
                        </span>
                    </div>                
                </a>
            </li>
            <li style="left:280px; top:260px;">
                <a href="#">
                    <span class="pl_city">四川</span>
                    <i class="flagIco"></i>
                    <div class="cityBox">
                        <i class="arrow-r"></i>
                        <span class="cityb-list">
                            <span>深圳</span>
                            <span>惠州</span>
                            <span>广州</span>
                            <span>珠海</span>
                        </span>
                    </div>                
                </a>
            </li>
            <li style="left:340px; top:210px;">
                <a href="#">
                    <span class="pl_city">河南</span>
                    <i class="flagIco"></i>
                    <div class="cityBox">
                        <i class="arrow-r"></i>
                        <span class="cityb-list">
                            <span>深圳</span>
                            <span>惠州</span>
                            <span>广州</span>
                            <span>珠海</span>
                        </span>
                    </div>                
                </a>
            </li>
        </ul>
    </div>
  </div>
  </div>
  
  
</div>
<!--01 End -->





<!--02 Start -->
<div class="panel" style="background-color: #0f1424;">	
<div class="introList2">
	<ul id="introList">
    	<li>
        	
        	<div class="inl2-default">
                <h2>覆盖区域</h2>
                <p>Areas Covered</p>
            </div>
            <img src="/Public/Home/images/hov-img1.jpg" class="introImg" />
            <div class="inl2-change">
            	<h2>20000000+</h2>
            </div>
        </li>
        <li>
        	
        	<div class="inl2-default">
                <h2>覆盖区域</h2>
                <p>Areas Covered</p>
            </div>
            <img src="/Public/Home/images/hov-img2.jpg" class="introImg"  />
            <div class="inl2-change">
            	<h2>20000000+</h2>
            </div>
        </li>
        <li>
        	
        	<div class="inl2-default">
                <h2>覆盖区域</h2>
                <p>Areas Covered</p>
            </div>
            <img src="/Public/Home/images/hov-img3.jpg" class="introImg" />
            <div class="inl2-change">
            	<h2>20000000+</h2>
            </div>
        </li>
        <li class="dli4">
        	
        	<div class="inl2-default">
                <h2>覆盖区域</h2>
                <p>Areas Covered</p>
            </div>
            <img src="/Public/Home/images/hov-img4.jpg" class="introImg" />
            <div class="inl2-change">
            	<h2>20000000+</h2>
            </div>
        </li>
    </ul>
</div>
</div>
<!--02 End -->


<!--03 Start -->
<div class="panel " style="background-color:#fff; position:relative; ">
    <div class="introList3">
        <div class="container">
            <div class="i-n-tit">
                <span class="i-n-ico"></span>
                <h2>核心决策层</h2>
                <span class="i-n-eng">POLICY MAKERS</span>
            </div>
        </div>
        <img src="/Public/Home/images/coreMan1.jpg" class="inlImg" />
    </div>
</div>
<!--03 End -->


<!--04 Start -->
<div class="panel" style="background-color: #eff3f5; position:relative;">
	<div class="introList4">
        <div class="container">
            <div class="i-n-tit">
                <span class="i-n-ico"></span>
                <h2>核心成员</h2>
                <span class="i-n-eng">CORE MEMBERS</span>
            </div>
        </div>
        <img src="/Public/Home/images/coreMan2.jpg" class="inlImg" />
    </div>
	
</div>
<!--04 End -->


<!--05 Start -->
<div class="panel" style="background-color: #fff;">
<div class="introList5" id="intrLIst5">
	<ul>
    	<li>
        	<img src="/Public/Home/images/idea-l.jpg" />
            <span class="blackBg"></span>
            <div class="ideaTxt">
            	<h3 class="idH3">理念主张</h3>
                <div class="id-change">
            		<p>互联网正以更加快速、更加强力的方式推动着经济社会的变革。</p>
					<p>全民尚网努力为合作伙伴以及蓝领用户提供便捷高效的移动互联网服务，实现社会、园区与蓝领人群之间信息交流的立体化;推动中国蓝领信息服务产业移动互联网化，加速推动物联网到来，为创建智慧城市、和谐社会贡献力量。</p>
                </div>
            </div>
        </li>
        <li class="in5fr">
        	<img src="/Public/Home/images/idea-r.jpg" />
            <span class="blackBg"></span>
            
            <div class="ideaTxt">
            	<h3 class="idH3">理念主张</h3>
                <div class="id-change">
            		<p>互联网正以更加快速、更加强力的方式推动着经济社会的变革。</p>
					<p>全民尚网努力为合作伙伴以及蓝领用户提供便捷高效的移动互联网服务，实现社会、园区与蓝领人群之间信息交流的立体化;推动中国蓝领信息服务产业移动互联网化，加速推动物联网到来，为创建智慧城市、和谐社会贡献力量。</p>
                </div>
            </div>
        </li>
    </ul>
</div>	
	
</div>
<!--05 End -->










<!--页脚 -->
<!--06 Start -->
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
<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>全民尚网科技有限公司-企业用户</title>
<link rel="stylesheet" href="/Public/Home/css/reste.css" type="text/css" />
<link rel="stylesheet" href="/Public/Home/css/base-main.css" type="text/css" />


<script type="text/javascript" src="/Public/Home/js/jquery-1.9.0.min.js"></script>



<!--导航点击显示下拉子菜单--> 
<script type="text/javascript" src="/Public/Home/js/nav-menu.js"></script>


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


<!--新闻触摸改变背景颜色 -->
<script>
$(function (){
var oInews=document.getElementById("iNews");
var oINli=oInews.getElementsByTagName("li");
var oIH2=oInews.getElementsByTagName("h2");
var oIP=oInews.getElementsByTagName("p");
//var oFuz=document.getElementsByClassName('i-n-fuz');
var oFuz=$(".i-n-fuz");

var ofuA=""; //找到a
var arr=[];

var ofuSpan=""; //找到span
var arrSpan=[];



for(i=0; i<oFuz.length; i++){	
ofuA=oFuz[i].getElementsByTagName("a");
ofuSpan=oFuz[i].getElementsByTagName("span");

	for(j=0; j<ofuA.length; j++){
		arr.push(ofuA[j]);
	}
	
	
	for(j=0; j<ofuSpan.length; j++){
		arrSpan.push(ofuSpan[j]);
	}
	
};

for(i=0; i<oINli.length; i++){
	oINli[i].index=i;	
	oINli[i].onmouseover=function (){
		
	 	this.style.background="#009aff";
	 	oIH2[this.index].className="oih2-hov";
		oIP[this.index].className="oip-hov";
		arr[this.index].style.background="#fff";
		arr[this.index].style.color="#009aff";
		arrSpan[this.index].style.color="#fff";
		//$(".i-n-fuz a").css("background","red");
		
		
	}
	
	 oINli[i].onmouseout=function (){
	 	this.style.background="#fff";
	 	oIH2[this.index].className="";
		oIP[this.index].className="";
		arr[this.index].style.background="#009aff";
		arr[this.index].style.color="";
		arrSpan[this.index].style.color="";
	}


};
});
</script>


</head>


<body>
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
                	<li class="nav-btn"><a href="javascript:;">产品</a><i class="t-arrow"></i></li>
                    <li class="nav-btn"><a href="javascript:;">平台</a><i class="t-arrow"></i></li>
                    <li class="nav-btn"><a href="javascript:;">解决方案</a><i class="t-arrow"></i></li>
                    <li class="nav-NoMenu navMenu-change"><a href="#">合作伙伴及案例</a></li>
                    <li class="nav-NoMenu"><a href="#">技术支持</a></li>
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
    
    <!--下拉子菜单 Start-->
    <div id="expandZone" class="expand MenuActive alignCenter" zdy="selfInside">
    <div class="menuBox">
    
        <div id="navMenu1" class="item">
            <div class="menuList container">
            	<h2 class="mTit">软件</h2>
                <span class="mList">
                   <a href="http://sc.chinaz.com/jiaoben/" class="navMLinks">wifi8APP</a>
                   <a href="#" class="navMLinks" target="_blank">智慧公寓</a>
                   <a href="#" class="navMLinks" target="_blank">智慧社区</a>
                   <a href="#" class="navMLinks" target="_blank">移动OA</a>
                </span>
                <h2 class="mTit">硬件</h2>
                <span class="mList">
                   <a href="#"  target="_blank" class="navMLinks">AP</a>
                   <a href="#" class="navMLinks">室外双屏AP</a>
                   <a href="#" class="navMLinks">电影服务器</a>
                   <a href="#" class="navMLinks">网关</a>
                   <a href="#" class="navMLinks">POE管理型交换机</a>
                </span>
              
            </div>
       </div>
       
       <div id="navMenu2" class="item">
            <div class="menuList container">
               <a href="http://sc.chinaz.com/jiaoben/"  target="_blank" class="navMLinks">WIFI云平台</a>
               <a href="#" class="navMLinks">审计探针平台</a>
               <a href="#" class="navMLinks">网关管理系统</a>
            </div>
       </div>
       
       <div id="navMenu3" class="item">
            <div class="menuList container">
               <a href="#" class="navMLinks">智慧工业园</a>
               <a href="#" class="navMLinks">智慧公寓</a>
               <a href="#" class="navMLinks">城市wifi</a>
               <a href="#" class="navMLinks">智慧校园</a>
               <a href="#" class="navMLinks">大数据中心</a>
               <a href="#" class="navMLinks">智能物业</a>
            </div>
       </div>
       
      
    <div id="closeBtn" class="close-btn"></div>
	</div></div>
    <!--下拉子菜单 End-->
    
    
  </div>  
</header>


<div class="H-90"></div>

<div class="alignCenter">
<div class="container">
	
    
    
    <!--合作案例Start -->
    <div class="CooperationCase">
        <div class="i-n-tit">
            <span class="i-n-ico"></span>
            <h2>合作案例</h2>
            <span class="i-n-eng">COOPERATION CASE</span>
        </div>
        <ul class="caseList">
        	<li>
            	<a href="#" class="caseImgs"><img src="/Public/Home/images/caseImg1.jpg" /></a>
                <a href="#" class="caseLinks">碧桂园理想家APP</a>
            </li>
            <li>
            	<a href="#" class="caseImgs"><img src="/Public/Home/images/caseImg2.jpg" /></a>
                <a href="#" class="caseLinks">恒博OA</a>
            </li>
            <li class="mR0">
            	<a href="#" class="caseImgs"><img src="/Public/Home/images/caseImg3.jpg" /></a>
                <a href="#" class="caseLinks">碧桂园理想家APP</a>
            </li>
        </ul>
    
    </div>
    <!--合作案例 End -->
    
    <!--合作伙伴 Start -->
    <div class="cooperationPartners">
    	<div class="i-n-tit">
            <span class="i-n-ico"></span>
            <h2>合作伙伴</h2>
            <span class="i-n-eng">COOPERATION PARTNERS</span>
        </div>
        <div class="cooperParList">
        	<ul>
            	<li><img src="/Public/Home/images/partners_img1.jpg" /></li>
                <li><img src="/Public/Home/images/partners_img2.jpg" /></li>
                <li><img src="/Public/Home/images/partners_img3.jpg" /></li>
                <li><img src="/Public/Home/images/partners_img4.jpg" /></li>
                <li class="mR0"><img src="/Public/Home/images/partners_img5.jpg" /></li>
                <li><img src="/Public/Home/images/partners_img6.jpg" /></li>
                <li><img src="/Public/Home/images/partners_img7.jpg" /></li>
                <li><img src="/Public/Home/images/partners_img8.jpg" /></li>
                <li><img src="/Public/Home/images/partners_img9.jpg" /></li>
                <li class="mR0"><img src="/Public/Home/images/partners_img10.jpg" /></li>
                <li><img src="/Public/Home/images/partners_img11.jpg" /></li>
                <li><img src="/Public/Home/images/partners_img12.jpg" /></li>
                <li><img src="/Public/Home/images/partners_img13.jpg" /></li>
                <li><img src="/Public/Home/images/partners_img14.jpg" /></li>
                <li class="mR0"><img src="/Public/Home/images/partners_img15.jpg" /></li>
                <li><img src="/Public/Home/images/partners_img16.jpg" /></li>
                <li><img src="/Public/Home/images/partners_img17.jpg" /></li>
                <li><img src="/Public/Home/images/partners_img18.jpg" /></li>
                <li><img src="/Public/Home/images/partners_img19.jpg" /></li>
                <li class="mR0"><img src="/Public/Home/images/partners_img20.jpg" /></li>
            </ul>
        </div>
    </div>
    
    <!--合作伙伴 End -->
      
</div>
</div>







<!--页脚 -->
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
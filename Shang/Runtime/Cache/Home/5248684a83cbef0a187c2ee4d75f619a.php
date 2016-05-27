<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>全民尚网科技有限公司-个人用户</title>
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
                    <li class="nav-btn"><a href="javascript:;">VR</a><i class="t-arrow"></i></li>
                    <li class="nav-btn"><a href="javascript:;">Wifi8 APP</a><i class="t-arrow"></i></li>
                    <li class="nav-btn"><a href="javascript:;">服务支持 </a><i class="t-arrow"></i></li>
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
                <a href="#" class="navProduct">
                    <span class="navImg"><img src="/Public/Home/images/mj-imgs4.png" /></span>
                    <span class="text">全民魔镜</span>
                </a>
               
               
            </div>
       </div>
       
       <div id="navMenu2" class="item">
            <div class="menuList container">
                <a href="#" class="navProduct">
                    <span class="navImg"><img src="/Public/Home/images/mj-imgs5.png" /></span>
                    <span class="text">WIFI8</span>
                </a>
               
            </div>
       </div>
       
       <div id="navMenu3" class="item">
            <div class="menuList container">
                <a href="#" class="navProduct">
                    <span class="navImg"><img src="/Public/Home/images/mj-imgs1.png" /></span>
                    <span class="text">全民魔镜31</span>
                </a>
                <a href="#" class="navProduct">
                    <span class="navImg"><img src="/Public/Home/images/mj-imgs2.png" /></span>
                    <span class="text">全民魔镜31</span>
                </a>
               
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
        <li style="background:url(/Public/Home/images/img2.jpg) 50% 0 no-repeat;"></li>
        <li style="background:url(/Public/Home/images/img1.jpg) 50% 0 no-repeat;"></li>
	</ul>
</div>
<!--轮播图切换 End-->


<div class="inside-user-warp1 alignCenter">
    <div class="container">
    	<div class="fl inUserTxt">
        	<h2>VR影视</h2>
            <span class="iu-fz">流动卓然</span>
            <span class="iu-links">
            	<a href="#" class="change">立即购买</a><b class="line">|</b><a href="#">立即购买</a>
            </span>
        </div>
    	<div class="fr inUserImg"><img src="/Public/Home/images/product-img1.jpg" /></div>    
        
    </div>
</div>


<div class="inside-user-warp2 alignCenter">
<div class="insideU2Img"><img src="/Public/Home/images/inside-download-img.jpg" /></div>
<div class="inside-wifi8IMg">
    <div class="container">
        <div class="fl inUserImg"><img src="/Public/Home/images/wifi8ICO.png" /></div>
        <div class="fr inUserTxt">
        	<h2>休闲娱乐，一点即用</h2>
            <span class="iu-fz">WIFI8 免费WIFI</span>
            <span class="iu-links">
            	<a href="#" class="change">立即下载</a><b class="line">|</b><a href="#">了解更多</a>
            </span>
        </div>
        
    </div>
</div>
</div>



<!--照片墙 -->
<div class="photoWall-warp">
	<div class="photoBG"><img src="/Public/Home/images/photo-bg.jpg" /></div>
    <div class="photoWall alignCenter">
    	<div class="container">
        	<ul class="photo-list">
            	<li style="position:absolute; left:0; top:0;">
                	<a href="#">
                    	<img src="/Public/Home/images/photo-img1.jpg" width="332" height="168" class="phImg" />
                        <img src="/Public/Home/images/photo-img1-hov.jpg" width="332" height="168" class="phImg-hov" />
                        <span class="phTxt" style="width:332px; height:168px; line-height:168px;">杨朝来&蒋平</span>
                        <span class="phBorder" style="width:322px; height:158px; _width:332px; _height:168px;"></span>
                    </a>
                </li>
                <li style="position:absolute; left:332px; top:0;">
                	<a href="#">
                    	<img src="/Public/Home/images/photo-img2.jpg" width="165" height="168" class="phImg" />
                        <img src="/Public/Home/images/photo-img2-hov.jpg" width="165" height="168" class="phImg-hov" />
                        <span class="phTxt" style="width:165px; height:168px; line-height:168px;">杨朝来&蒋平</span>
                        <span class="phBorder" style="width:155px; height:158px; _width:165px; _height:168px;"></span>
                    </a>
                </li>
                <li style="position:absolute; left:497px; top:0;">
                	<a href="#">
                    	<img src="/Public/Home/images/photo-img3.jpg" width="334" height="336" class="phImg" />
                        <img src="/Public/Home/images/photo-img3-hov.jpg" width="334" height="336" class="phImg-hov" />
                        <span class="phTxt" style="width:334px; height:336px; line-height:336px;">杨朝来&蒋平</span>
                        <span class="phBorder" style="width:324px; height:326px;  _width:334px; _height:336px;"></span>
                    </a>
                </li>
                <li style="position:absolute; left:831px; top:0;">
                	<a href="#">
                    	<img src="/Public/Home/images/photo-img4.jpg" width="171" height="168" class="phImg" />
                        <img src="/Public/Home/images/photo-img4-hov.jpg" width="171" height="168" class="phImg-hov" />
                        <span class="phTxt" style="width:171px; height:168px; line-height:168px;">杨朝来&蒋平</span>
                        <span class="phBorder" style="width:161px; height:158px;  _width:171px; _height:168px;"></span>
                    </a>
                </li>
                
                <li style="position:absolute; left:0; top:168px;">
                	<a href="#">
                    	<img src="/Public/Home/images/photo-img5.jpg" width="166" height="168" class="phImg" />
                        <img src="/Public/Home/images/photo-img5-hov.jpg" width="166" height="168" class="phImg-hov" />
                        <span class="phTxt" style="width:166px; height:168px; line-height:168px;">杨朝来&蒋平</span>
                        <span class="phBorder" style="width:156px; height:158px; _width:166px; _height:168px;"></span>
                    </a>
                </li>
                <li style="position:absolute; left:166px; top:168px;">
                	<a href="#">
                    	<img src="/Public/Home/images/photo-img6.jpg" width="166" height="168" class="phImg" />
                        <img src="/Public/Home/images/photo-img6.jpg" width="166" height="168" class="phImg-hov" />
                    </a>
                </li>
                <li style="position:absolute; left:332px; top:168px;">
                	<a href="#">
                    	<img src="/Public/Home/images/photo-img7.jpg" width="166" height="168" class="phImg" />
                        <img src="/Public/Home/images/photo-img7.jpg" width="166" height="168" class="phImg-hov" />
                    </a>
                </li>
                <li style="position:absolute; left:831px; top:168px;">
                	<a href="#">
                    	<img src="/Public/Home/images/photo-img8.jpg" width="171" height="333" class="phImg" />
                        <img src="/Public/Home/images/photo-img8-hov.jpg" width="171" height="333" class="phImg-hov" />
                        <span class="phTxt" style="width:171px; height:337px; line-height:333px;">杨朝来&蒋平</span>
                        <span class="phBorder" style="width:161px; height:323px; _width:171px; _height:333px;"></span>
                    </a>
                </li>
                
                <li style="position:absolute; left:0; top:336px;">
                	<a href="#">
                    	<img src="/Public/Home/images/photo-img9.jpg" width="166" height="165" class="phImg" />
                        <img src="/Public/Home/images/photo-img9-hov.jpg" width="166" height="165" class="phImg-hov" />
                        <span class="phTxt" style="width:166px; height:165px; line-height:165px;">杨朝来&蒋平</span>
                        <span class="phBorder" style="width:156px; height:155px; _width:166px; _height:165px;"></span>
                    </a>
                </li>
                <li style="position:absolute; left:166px; top:336px;">
                	<a href="#">
                    	<img src="/Public/Home/images/photo-img10.jpg" width="500" height="330" class="phImg" />
                        <img src="/Public/Home/images/photo-img10-hov.jpg" width="500" height="330" class="phImg-hov" />
                        <span class="phTxt" style="width:500px; height:330px; line-height:330px;">杨朝来&蒋平</span>
                        <span class="phBorder" style="width:490px; height:320px; _width:500px; _height:330px;"></span>
                    </a>
                </li>
                <li style="position:absolute; left:666px; top:336px;">
                	<a href="#">
                    	<img src="/Public/Home/images/photo-img11.jpg" width="166" height="165" class="phImg" />
                        <img src="/Public/Home/images/photo-img11-hov.jpg" width="166" height="165" class="phImg-hov" />
                        <span class="phTxt" style="width:166px; height:165px; line-height:165px;">杨朝来&蒋平</span>
                        <span class="phBorder" style="width:156px; height:155px; _width:166px; _height:165px;"></span>
                    </a>
                </li>
                <li style="position:absolute; left:0; top:501px;">
                	<a href="#">
                    	<img src="/Public/Home/images/photo-img12.jpg" width="166" height="165" class="phImg" />
                        <img src="/Public/Home/images/photo-img12-hov.jpg" width="166" height="165" class="phImg-hov" />
                        <span class="phTxt" style="width:166px; height:165px; line-height:165px;">杨朝来&蒋平</span>
                        <span class="phBorder" style="width:156px; height:155px; _width:166px; _height:165px;"></span>
                    </a>
                </li>
                <li style="position:absolute; left:666px; top:501px;">
                	<a href="#">
                    	<img src="/Public/Home/images/photo-img13.jpg" width="336" height="165" class="phImg" />
                        <img src="/Public/Home/images/photo-img13-hov.jpg" width="336" height="165" class="phImg-hov" />
                        <span class="phTxt" style="width:336px; height:165px; line-height:165px;">杨朝来&蒋平</span>
                        <span class="phBorder" style="width:326px; height:155px; _width:336px; _height:165px;"></span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>



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
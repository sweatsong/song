<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0,minimum-scale=1.0">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<title>无标题文档</title>
<link type="text/css" rel="stylesheet" href="/Public/Home/css/main.css" />
<script type="text/javascript" src="/Public/Home/js/jquery-1.7.2.min.js"></script>

<script>
     
      $(function(){
         /* $('#telephone').blur(function(){
            var str=$('#telephone').val();
            var reg=/1[34578]\d{9}/g;
            if(reg.test(str)==false){
              $('#telephone').val('请输入正确的电话号码');
            }
          });*/
      });

</script>


<script type="text/javascript">
  $(function(){
    
     $.post('/index.php/Home/Login/ajaxsheng',function(msg){
               $(msg).each(function(i,item){
                var name=item.name;
                var id=item.id;
                var op=new Option(name,id);
                $('#c1')[0].options.add(op);
            });          
    },'json');

     $('#c1').bind('change',function(){
          var pid=$('#c1').val();
          $.post('/index.php/Home/Login/ajaxcity','pid='+pid,function(msg){
            $('#c2')[0].length=0;
                $(msg).each(function(i,item){
                    var name=item.name;
                    var id=item.id;
                    var op=new Option(name,id);
                    $('#c2')[0].options.add(op);
                });
          });
     });
  });
</script>

</head>

<body style="background:#e6e6e6;">

 <div class="Tj_mian">
       <form action="/index.php/Home/Login/add"  method='post'>
               <dl  class="Tj_form">
                <dt>加盟个人信息填写</dt>

                <dd>
                  <span class="jmTit">姓名</span>
                  <input  type="text" name="username" />
                </dd>

                <dd>
                  <span class="jmTit">电话</span>
                  <input  type="text" id='telephone' name="telephone" />
                </dd>

                <dd>
                  <span class="jmTit">地区</span>
                  <select name="sheng" id='c1' class="Tj_sel1">
                        <option value="0">请选择</option> 
                     </select>
                    <span class="addTxt"> </span> 

                      <select name="city" id='c2' class="Tj_sel2">
                        <option value="0">请选择</option> 
                     </select>
                </dd>
            <dd >
              <input type='submit'  class="sub-btn  sub_inuput" value="提交索取项目资料"/>

              </dd>  
             <!--<dd><a href="#" class="sub-btn">提交索取项目资料</a></dd>-- >
                </dl>
       </form>
   
        
        <div class="jo5Txt contactus">
        	<p>深圳全民尚网科技有限公司</p>
                <p>招商加盟热线：<span style="color:#179bf3;">18822889146</span>（杨）</p>
                <p>网址：www.shang-wifi.com</p>
                <p>地址：深圳龙华新区民治1980文化创意园三期7栋5层</p>
        </div>
   
  
  </div>
  
  
  
  
  <div class="submitOK" style="display:none;">
  	<span class="okimg"><img src="/Public/Home/images/ok.png" /></span>
  	<p>提交成功！</p>
  </div>
  
</body>
</html>
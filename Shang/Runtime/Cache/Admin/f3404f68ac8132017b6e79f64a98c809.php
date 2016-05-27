<?php if (!defined('THINK_PATH')) exit(); if(C('LAYOUT_ON')) { echo ''; } ?>
<!DOCTYPE html>
<html class="bg4">
	<head>
		
		<!--There is a special meta tag you can append into the document header which resets this in most Android and iPhone devices.-->
		<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
		<link rel="stylesheet" type="text/css" href="/Public/Jump/css/style.css" />
		<!--[if IE]> <link rel="stylesheet" type="text/css" href="css/ie.css" /><![endif]--> 
		<title>www.shang-wifi.com</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
	<body>
		<section id="container" class="blue">

			<!-- TOOLS PANEL-->
			
			 
			  
			</div>
			  <!-- / TOOLS PANEL -->

			<!-- LOGO -->
			<div id="logo">全民尚网</div>
			<div id="skins-select">
				<a href="#" class="blue skins" id="blue-skin">www.</a>
				<a href="#" class="red skins" id="red-skin">shang-</a>
				<a href="#" class="purple skins" id="purple-skin">wifi</a>
				<a href="#" class="green skins" id="green-skin">.com</a>
			  </div>
			<!-- /LOGO -->

			<br />

			<!-- WELCOME TEXT -->
			<!-- <p>
				操作成功
				<br />
				<span>请等待</span>
			</p> -->
			<!-- WELCOME TEXT -->
			<div class="system-message">
			<?php if(isset($message)) {?>
			<h1>:)</h1>
			<p class="success"><?php echo($message); ?></p>
			<?php }else{?>
			<h1>:(</h1>
			<p class="error"><?php echo($error); ?></p>
			<?php }?>
			<p class="detail"></p>
			<p class="jump">
			页面自动 <a id="href" href="<?php echo($jumpUrl); ?>">跳转</a> 等待时间： <b id="wait"><?php echo($waitSecond); ?></b>
			</p>
			</div>
			<script type="text/javascript">
			(function(){
			var wait = document.getElementById('wait'),href = document.getElementById('href').href;
			var interval = setInterval(function(){
				var time = --wait.innerHTML;
				if(time <= 0) {
					location.href = href;
					clearInterval(interval);
				};
			}, 1000);
			})();
			</script>			

			<br />

			<!-- COUNTDOWN // html code generated in main.js -->
			
			<!-- /COUNTDOWN  -->

			
				
			<!-- /SUBSCRIBE FORM -->

			 <!-- SOCIAL -->
			  
			<!-- /SOCIAL -->
		</section>

		<!--JS FILES LOAD-->
		<script src="/Public/Jump/script/jquery.min.js" type="text/javascript"></script>
		<script src="/Public/Jump/script/jcountdown.min.js" type="text/javascript"></script>
		<script src="/Public/Jump/script/main.js" type="text/javascript"></script>

</body>
</html>
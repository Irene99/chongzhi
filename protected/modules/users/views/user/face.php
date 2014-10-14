<!DOCTYPE html Public/Home "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>修改头像 - 网页游戏平台</title>
<meta name="keywords" content="网页游戏,网页游戏平台,最新网页游戏,好玩的网页游戏,页游平台" />
<meta name="description" content="最新好玩的网页游戏，最热最火最人气的网络页游，玩机之家网页游戏平台致力于为广大中小R及非人民币玩家打造一个口碑最好的游戏空间；精品网页游戏运营策略，年度最牛的网页游戏一个不漏，玩给力页游就上玩机之家平台；不用公会，绿色没有托，玩机之家页游平台目标是成为最受玩家欢迎的一流国际化品牌网页游戏运营商。" />
<link href="/css/Public/Home/Images/style.css?t=0623" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/css/Public/Home/Js/jquery-1.6.2.min.js"></script>
<script type="text/javascript" src="/css/Public/Home/Js/common.js"></script>
<!--[if IE 6]> 
<script type="text/javascript" src="/Public/Home/Js/DD_belatedPNG_0.0.8a-min.js"></script> 
<script> 
DD_belatedPNG.fix('.pngfix'); 
try { 
	document.execCommand("BackgroundImageCache", false, true); 
} 
catch (err) {
}; 
</script> 
<![endif]-->
<script>
$(document).ready(function(){
	$('#form1 li img').click(function(){
		var src = $(this).attr('src');
		var img_num = src.match(/\d+/) ;

		$('.btn-login-1').click(function(){
		$.post('/users/ajax/facedo',{"num":img_num},function(result){
			if( $.browser.msie )
			{
				result = eval('('+result+')');
			}
			else{
				result = JSON.parse(result);
			}

			var success = result.mark ;
			var message = result.message ;
			if( success == 1 )
			{
				$('#remind').text(message);
			}else{
				$('#remind').text(message);
			}


		})	
	})
	})
})
</script>
</head>
<body>
<!-- Topbar Start -->
<?php
    include_once(dirname(dirname(__FILE__))."/common/topbar.php");
?>
<!-- Topbar End -->


<div id="Container">

<div id="warp">

<!-- Header Start -->
<?php
	include_once(dirname(dirname(__FILE__)).'/common/head_nav2.php');
?>
<!-- Menu End -->

<!-- Main Start -->
<div id="main">

	<!-- 会员中心 -->
	<div class="box user">
	<div class="title">会员中心</div>

<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
<td class="sidebar">
	<ul>
	<li style="font-weight:bold;">帐号信息</li>
	<li class="icon_1"><a href="/users/user/index" >我的资料</a></li>
	<li class="icon_2"><a href="/users/user/profile" >修改资料</a></li>
	<li class="icon_28"><a href="/users/user/face" class="chosen">修改头像</a></li>
	<li class="icon_7"><a href="/users/user/password" >修改密码</a></li>
	<li class="icon_3"><a href="/users/user/fcm" >防沉迷认证</a></li>
	</ul>
<!--
	<ul>
	<li>帐号安全</li>
	<li class="icon_4"><a href="/user/security" >安全信息</a></li>
	<li class="icon_5"><a href="/user/mobile_verify" >手机绑定</a></li>
	<li class="icon_6"><a href="/user/email_verify" >邮箱绑定</a></li>
	<li class="icon_7"><a href="/user/password" >修改密码</a></li>
	</ul>
-->
	<ul style="display:none;">
	<li style="font-weight:bold;">充值中心</li>
	<li class="icon_8"><a href="/pay">我要充值</a></li>
	<li class="icon_9"><a href="/pay/aoblog" >傲币交易明细</a></li>
	<li class="icon_10"><a href="/pay/gamelog" >游戏充值记录</a></li>
	<li class="icon_11"><a href="/pay/convert" >傲币兑换</a></li>
	</ul>
	<div style="height:100px;"></div>
</td>
<td class="body">

	<div class="sub-menu">帐号信息<span>&gt;</span>修改头像</div>

	<div class="sub-content">

			<form id="form1" name="form1" method="post" action="/users/ajax/facedo">
			<input type="hidden" name="face" id="face" value="" />
			<div class="face-nav">
			<ul>
			<li><img src="/Upload/face/01.jpg" width="60" height="60" /></li>
			<li><img src="/Upload/face/02.jpg" width="60" height="60" /></li>
			<li><img src="/Upload/face/03.jpg" width="60" height="60" /></li>
			<li><img src="/Upload/face/04.jpg" width="60" height="60" /></li>
			<li><img src="/Upload/face/05.jpg" width="60" height="60" /></li>
			<li><img src="/Upload/face/06.jpg" width="60" height="60" /></li>
			<li><img src="/Upload/face/07.jpg" width="60" height="60" /></li>
			<li><img src="/Upload/face/08.jpg" width="60" height="60" /></li>
			<li><img src="/Upload/face/09.jpg" width="60" height="60" /></li>
			<li><img src="/Upload/face/10.jpg" width="60" height="60" /></li>
			<li><img src="/Upload/face/11.jpg" width="60" height="60" /></li>
			<li><img src="/Upload/face/12.jpg" width="60" height="60" /></li>
			<li><img src="/Upload/face/13.jpg" width="60" height="60" /></li>
			<li><img src="/Upload/face/14.jpg" width="60" height="60" /></li>
			<li><img src="/Upload/face/15.jpg" width="60" height="60" /></li>
			<li><img src="/Upload/face/16.jpg" width="60" height="60" /></li>
			<li><img src="/Upload/face/17.jpg" width="60" height="60" /></li>
			<li><img src="/Upload/face/18.jpg" width="60" height="60" /></li>
			<li><img src="/Upload/face/19.jpg" width="60" height="60" /></li>
			<li><img src="/Upload/face/20.jpg" width="60" height="60" /></li>
			<li><img src="/Upload/face/21.jpg" width="60" height="60" /></li>
			</ul>
			</div>
			<div class="face-btn">
				<input type="button" name="Submit" value="保存头像" class="btn-login-1" />
				<span style="color:red" id="remind"></span>
			</div>
			<input type="hidden" name="__hash__" value="c1e6ad886e4b2f02a2fbf29f93e6d570" /></form>

	</div>

</td>
</tr>
</table>


	</div>

</div>
<!-- Main End -->

<script type="text/javascript">
var val;
var face=$("#face").val();
$(".face-nav img").each(function(){
	val=$(this).attr("src");
	if(val==face){
		$(this).addClass('on');
	}
	$(this).click(function(){

		$(".face-nav img").each(function(){
			$(this).removeClass('on');
		});

		$("#face").attr("value",$(this).attr("src"));
		$(this).addClass('on');
	});
});
</script>


<?php
    include_once(dirname(dirname(__FILE__))."/common/footer.php");
?>

</div>
</div>
<!-- TIP START -->

<!-- TIP END -->


<!--<script type="text/javascript" src="/Public/Home/Js/weixin.js?t=0623"></script>
<script language="javascript" src="http://bbs.77313.com/actimgs/tingfengzhe.js?t=0623"></script>-->
<!--float right-->
<div id="pop_float_right" style="z-index:9;right:0px;bottom:0; width:120px; height:280px; overflow:hidden;POSITION:fixed;_position:absolute; _margin-top: expression(document.documentElement.clientHeight-this.style.pixelHeight+document.documentElement.scrollTop);display:none;">
<div style="background-color: #AB0000;font: bold 12px/20px 'arial'; height: 20px;opacity: 0.7;overflow: hidden;position: absolute;right: 0;text-align: center;top: 0; width: 40px;"><a target="_self" href="javascript:void(0);" onclick="javascript:remove('pop_float_right');" style="color:#FFF;">关闭</a></div>

<a class="tg_link" href="http://www.77313.com/article/view-439.html" target="_blank"></a>
<img src="/Upload/pop/dwj.jpg" />
</div>
<!--end float right-->



</body>
</html>
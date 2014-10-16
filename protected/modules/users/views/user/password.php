<!DOCTYPE html Public/Home "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>修改密码 - 玩机之家网页游戏平台</title>
<meta name="keywords" content="网页游戏,网页游戏平台,最新网页游戏,好玩的网页游戏,页游平台" />
<meta name="description" content="最新好玩的网页游戏，最热最火最人气的网络页游，玩机之家网页游戏平台致力于为广大中小R及非人民币玩家打造一个口碑最好的游戏空间；精品网页游戏运营策略，年度最牛的网页游戏一个不漏，玩给力页游就上玩机之家平台；不用公会，绿色没有托，玩机之家页游平台目标是成为最受玩家欢迎的一流国际化品牌网页游戏运营商。" />
<link href="/css/Public/Home/Images/style.css" rel="stylesheet" type="text/css" />
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
	<li class="icon_28"><a href="/users/user/face" >修改头像</a></li>
	<li class="icon_7"><a href="/users/user/password" class="chosen">修改密码</a></li>
	<li class="icon_3"><a href="/users/user/fcm" >防沉迷认证</a></li>
	</ul>
<!--
	<ul>
	<li>帐号安全</li>
	<li class="icon_4"><a href="/user/security" >安全信息</a></li>
	<li class="icon_5"><a href="/user/mobile_verify" >手机绑定</a></li>
	<li class="icon_6"><a href="/user/email_verify" >邮箱绑定</a></li>
	<li class="icon_7"><a href="/user/password" class="chosen">修改密码</a></li>
	</ul>
-->
	<ul style="display:none;">
	<li style="font-weight:bold;">充值中心</li>
	<li class="icon_8"><a href="/pay">我要充值</a></li>
	<li class="icon_9"><a href="/pay/aoblog" >米币交易明细</a></li>
	<li class="icon_10"><a href="/pay/gamelog" >游戏充值记录</a></li>
	<li class="icon_11"><a href="/pay/convert" >米币兑换</a></li>
	</ul>
	<div style="height:100px;"></div>
		</td>
		<td class="body">

			<div class="sub-menu">帐号信息<span>&gt;</span>修改密码</div>

			<div class="sub-content">

				<form id="form1" name="form1" method="post" action="/users/user/passworddo" onsubmit="return checkDo()">
				<table width="670" border="0" align="center" cellpadding="5" cellspacing="0">
				<tr>
				<td width="95" align="right">原始密码：</td>
				<td width="245"><input type="password" name="prepassword" id="prepassword" class="text" style="width:230px" value="" maxlength="50"/></td>
				<td width="330"><span id="check_prepass_info"></span></td>
				</tr>
				<tr>
				<td align="right">新密码：</td>
				<td><input type="password" name="password" id="password" class="text" style="width:230px" value="" maxlength="50"/></td>
				<td><span id="check_pass_info">密码长度为6~16位字符</span></td>
				</tr>
				<tr>
				<td align="right">确认新密码：</td>
				<td><input type="password" name="password_confirm" id="password_confirm" class="text" style="width:230px" value="" maxlength="50"/></td>
				<td><span id="check_pass2_info">请输入确认密码</span></td>
				</tr>
				<tr>
				<td>&nbsp;</td>
				<td height="80"><input type="submit" name="Submit" value="提交修改" class="btn-login-1" /></td>
				</tr>
				</table>
				<input type="hidden" name="__hash__" value="fe848d296074873a97aad4a7977b28f8" /></form>

			</div>

		</td>
		</tr>
		</table>


	</div>

</div>
<!-- Main End -->

<script type="text/javascript">
function checkDo(){

	/* 检测密码 */
	var prepassword=$.trim($("#prepassword").val());
	if(prepassword==''){
		alert('请输入原始密码.');
		$("#prepassword").focus();
		return false;
	}
	var password=$.trim($("#password").val());
	if(password==''){
		alert('请输入密码.');
		$("#password").focus();
		return false;
	}
	if(password.length<6 || password.length>16){
		alert('密码长度需要6-16个字符内');
		$("#password").focus();
		return false;
	}

	/* 检测确认密码 */
	var password_confirm=$.trim($("#password_confirm").val());
	if(password!=password_confirm){
		alert('两次输入的密码不一致！.');
		$("#password").focus();
		return false;
	}
}
$('#prepassword').blur(checkpass_pre);
$('#password').blur(checkpass);
$('#password_confirm').blur(checkpass_2);

/* 验证密码 */
function checkpass_pre(){
	var prepassword=$.trim($("#prepassword").val());
	if(prepassword==''){
		$("#check_prepass_info").html("请输入正在使用的密码");
		$("#check_prepass_info").attr("class","tip_error");
		return false;
	}
	$("#check_prepass_info").html("");
	$("#check_prepass_info").attr("class","");
}

/* 验证密码 */
function checkpass(){
	var password=$.trim($("#password").val());
	if(password==''){
		$("#check_pass_info").html("请输入密码");
		$("#check_pass_info").attr("class","tip_error");
		return false;
	}

	if(password.length<6 || password.length>16){
		$("#check_pass_info").html("密码长度需要6-16个字符内");
		$("#check_pass_info").attr("class","tip_error");
		return false;
	}
	$("#check_pass_info").html("输入正确");
	$("#check_pass_info").attr("class","tip_ok");
}

/* 验证确认密码 */
function checkpass_2(){
	var password=$.trim($("#password").val());
	var password_confirm=$.trim($("#password_confirm").val());
	if(password_confirm==''){
		$("#check_pass2_info").html("请输入确认密码");
		$("#check_pass2_info").attr("class","tip_error");
		return false;
	}

	if(password!=password_confirm){
		$("#check_pass2_info").html("密码输入不一致");
		$("#check_pass2_info").attr("class","tip_error");
		return false;
	}
	$("#check_pass2_info").html("输入正确");
	$("#check_pass2_info").attr("class","tip_ok");
}
</script>


<?php
    include_once(dirname(dirname(__FILE__))."/common/footer.php")
?>

</div>
</div>
<!-- TIP START -->

<!-- TIP END -->


<div style="display:none">
<script language="javascript" type="text/javascript" src="http://js.users.51.la/16723167.js"></script>
<noscript><a href="http://www.51.la/?16723167" target="_blank"><img alt="&#x6211;&#x8981;&#x5566;&#x514D;&#x8D39;&#x7EDF;&#x8BA1;" src="http://img.users.51.la/16723167.asp" style="border:none" /></a></noscript>
</div>
<!--float right-->
<div id="pop_float_right" style="z-index:9;right:0px;bottom:0; width:120px; height:280px; overflow:hidden;POSITION:fixed;_position:absolute; _margin-top: expression(document.documentElement.clientHeight-this.style.pixelHeight+document.documentElement.scrollTop);display:none;">
<div style="background-color: #AB0000;font: bold 12px/20px 'arial'; height: 20px;opacity: 0.7;overflow: hidden;position: absolute;right: 0;text-align: center;top: 0; width: 40px;"><a target="_self" href="javascript:void(0);" onclick="javascript:remove('pop_float_right');" style="color:#FFF;">关闭</a></div>

<a class="tg_link" href="http://www.77313.com/article/view-439.html" target="_blank"></a>
<img src="/Upload/pop/dwj.jpg" />
</div>
<!--end float right-->


</body>
</html>
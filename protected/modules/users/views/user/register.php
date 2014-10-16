<!DOCTYPE html Public/Home "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>用户注册 - 网页游戏平台 - 玩机之家</title>
<meta name="keywords" content="网页游戏,网页游戏平台,最新网页游戏,好玩的网页游戏,页游平台" />
<meta name="description" content="最新好玩的网页游戏，最热最火最人气的网络页游，玩机之家网页游戏平台致力于为广大中小R及非人民币玩家打造一个口碑最好的游戏空间；精品网页游戏运营策略，年度最牛的网页游戏一个不漏，玩给力页游就上玩机之家平台；不用公会，绿色没有托，玩机之家页游平台目标是成为最受玩家欢迎的一流国际化品牌网页游戏运营商。" />
<link href="/css/Public/Home/Images/style.css?t=0623" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/css/Public/Home/Js/jquery-1.6.2.min.js?t=0623"></script>
<script type="text/javascript" src="/css/Public/Home/Js/common.js?t=0623"></script>
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
	include_once(dirname(dirname(__FILE__))."/common/topbar.php")
?>
<!-- Topbar End -->


<div id="Container">

<div id="warp">

<!-- Header Start -->
<div id="header">
<div class="logo"><a href="/"><img src="/css/Public/Home/Images/logo.png?v=919" class="pngfix" /></a></div>
<div class="right">

<div style="width:625px;height:95px;">

</div>

</div>
<div class="clear"></div>
</div>
<!-- Header End -->

<!-- Menu Start -->
<div id="nav">
	<div class="menu">
	<ul>
	<li  class="cur"><a href="/users/default/index">网站首页</a></li>
	<li  class=""><a href="/users/game/index">游戏大厅</a></li>
	<li class=""><a href="/users/user/index">用户中心</a></li>
	<li class=""><a href="/users/pay/index">充值中心</a></li>
	<li class=""><a href="/service/">客服中心</a></li>
	<li><a href="http://bbs.wanjizhijia.com" target="_blank" class="pngfix bbs">玩家论坛</a></li>
	</ul>
	</div>
</div>
<!-- Menu End -->

<!-- Main Start -->
<div id="main">

		<!-- 注册 -->
		<div class="box reg">
		<div class="title"><label>注册玩机之家通行证</label><span>已有通行证，请直接 <a href="/users/default/index" style="color:#FF3300">登录</a></span></div>
		<div class="content">

			<br />
			<form id="form1" name="form1" method="post" action="/module/user/registerdo.php" onsubmit="return checkDo2()">		    
			<table width="770" border="0" align="center" cellpadding="0" cellspacing="0">
			<tr>
			<td height="60" colspan="3"><img src="/Public/Home/Images/reg-1.jpg" /><span class="reg-title">创建通行证</span><strong><font color="#FF0000">带*均为必填项，请认真填写！我们承诺保障您的信息安全，不会透露给第三方。</font></strong></td>
			</tr>
			<tr>
			<td width="19%" height="45" align="right" class="font_14"><font color="red">*</font> 用户帐号：</td>
			<td width="33%"><input name="username" type="text" class="text" id="username" style="width:230px" maxlength="16" /></td>
			<td width="48%"><span id="check_username_info">3到20个英文字符、数字或下划线</span></td>
			</tr>
			<tr>
			<td height="45" align="right" class="font_14"><font color="red">*</font> 设置密码：</td>
			<td><input name="password" type="password" class="text" id="password" style="width:230px" maxlength="16" /></td>
			<td><span id="check_pass_info">密码长度为6~16位字符</span></td>
			</tr>
			<tr>
			<td height="45" align="right" class="font_14"><font color="red">*</font> 确认密码：</td>
			<td><input name="password_confirm" type="password" class="text" id="password_confirm" style="width:230px" maxlength="16" /></td>
			<td><span id="check_pass2_info"></span></td>
			</tr>
			<tr>
			<td height="45" align="right" class="font_14"><font color="red">*</font> 电子邮箱：</td>
			<td><input name="email" type="text" class="text" id="email" style="width:230px" maxlength="30" /></td>
			<td><span id="check_email_info">请输入您的邮箱。这是找回密码的唯一方式，请认真填写</span></td>
			</tr>
			<tr>
			<td height="20" colspan="3"></td>
			</tr>
			<tr>
			<td height="60" colspan="3"><img src="/Public/Home/Images/reg-2.jpg" /><span class="reg-title">未成年人防沉迷认证</span>根据2010年8月1日实施的《网络游戏管理暂行办法》，网络游戏用户需使用有效身份证件进行实名注册。</td>
			</tr>
			<tr>
			<td height="45" align="right" class="font_14"><font color="red">*</font> 真实姓名：</td>
			<td><input name="name" type="text" class="text" id="name" style="width:230px" maxlength="6" /></td>
			<td><span id="check_name_info">请输入您的真实姓名，必须为汉字</span></td>
			</tr>
			<tr>
			<td height="45" align="right" class="font_14"><font color="red">*</font> 身份证号：</td>
			<td><input name="card_num" type="text" class="text" id="card_num" style="width:230px" maxlength="18" /></td>
			<td><span id="check_card_info">请输入您的18位有效身份证号码</span></td>
			</tr>
			<tr>
			<td height="20" colspan="3"></td>
			</tr>
			<tr>
			<td height="60" colspan="3"><img src="/Public/Home/Images/reg-3.jpg" /><span class="reg-title">联系信息</span></td>
			</tr>
			<tr>
			<td height="45" align="right" class="font_14">QQ号码：</td>
			<td><input name="qq" type="text" class="text" id="qq" style="width:230px" maxlength="18" /></td>
			<td><span id="check_qq_info"></span></td>
			</tr>
			<tr>
			<td height="45" align="right" class="font_14">手机号码：</td>
			<td><input name="mobile" type="text" class="text" id="mobile" style="width:230px" maxlength="18" /></td>
			<td><span id="check_mobile_info"></span></td>
			</tr>
			<tr>
			<td height="60"></td>
			<td colspan="2" class="font_14"><input name="checkbox" type="checkbox" value="checkbox" checked="checked" /> 我已阅读并同意《<a href="/service/agreement/" target="_blank">用户注册服务协议</a>》</td>
			</tr>
			<tr>
			<td height="60"></td>
			<td colspan="2">
			<input type="submit" name="Submit" value="提交注册" class="btn-login" />
			<input type="hidden" name="action" value="reg" />
            <input type="hidden" name="xcode" value="" />
            </td>
			</tr>
			</table>
			<input type="hidden" name="__hash__" value="f5ec823d781ac41e4de16387b96f7af6" /></form>

		</div>
		</div>


</div>
<!-- Main End -->

<script type="text/javascript">
// 表单检证

function checkDo2(){
	/* 验证昵称 */
	var username=$.trim($("#username").val());
	if(username=='' || username.length<3 || username.length>20 ){
		alert('请输入用户名且是3-20个字符.');
		$("#username").focus();
		return false;
	}



	var filter = /^[a-zA-Z0-9_]*$/;
	if(!filter.test( username )){
		alert('用户名含有非法字符，请修改！');
		$("#username").focus();
		return false;
	}

	/* 检测密码 */
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

	/* 判断邮箱格式 */
	var email=$.trim($("#email").val());
	if(email==''){
		alert('请填写邮箱地址！');
		$("#email").focus();
		return false;
	}

	var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	if(!filter.test( email )){
		alert('邮箱格式不正确,例:"abc@gmail.com",请检查！');
		$("#email").focus();
		return false;
	}


	/* 验证姓名 */
	var name=$.trim($("#name").val());
	if(name=='' || name.length<2 || name.length>4 ){
		alert('请输入您的真实姓名,2-4个汉字.');
		$("#name").focus();
		return false;
	}

	filter = /^[\u4e00-\u9fa5]+$/i;
	if(!filter.test( name )){
		alert('请输入您的真实姓名，必须为汉字.');
		$("#name").focus();
		return false;
	}

	/* 验证身份证号 */
	var card_num=$.trim($("#card_num").val().toUpperCase());
	if(card_num==''){
		alert('请输入您的真实身份证号码.');
		$("#card_num").focus();
		return false;
	}

	filter = /^\d{17}(\d|x|X)$/;
	if(!filter.test( card_num )){
		alert('请输入18位有效身份证号码.');
		$("#card_num").focus();
		return false;
	}


	/* 验证qq */
	var qq=$.trim($("#qq").val());
	if(qq!=''){
		var filter = /^[0-9]{4,}$/;
		if(!filter.test( qq )){
			alert("输入的QQ号码不合法");
			$("#qq").focus();
			return false;
		}
	}

	/* 验证手机*/
	var mobile=$.trim($("#mobile").val());
	if(mobile!=''){
		var filter = /^(13|15|18)[0-9]{9}$/;
		if(!filter.test( mobile )){
			alert("请输入正确11位有效的手机号码");
			$("#mobile").focus();
			return false;
		}
	}

	var username = $('#check_username_info').attr('class');
	var pass1 = $("#check_pass_info").attr('class');
	var pass2 = $('#check_pass2_info').attr('class');
	var email = $('#check_email_info').attr('class');
	var name  = $('#check_name_info').attr('class');
	var card  = $('#check_card_info').attr('class');
	//var mobile = $('#check_mobile_info').attr('class');

	if( username == 'tip_ok' && pass1 == 'tip_ok' && pass2 == 'tip_ok' && email == 'tip_ok' && name == 'tip_ok' && card== 'tip_ok' )
	{
		return true;
	}
	else{
		alert('请确认注册信息已经填写正确');
		return false;
	}
}


$('#username').blur(check_ajax_username);
$('#password').blur(checkpass);
$('#password_confirm').blur(checkpass_2);
$('#email').blur(check_ajax_email);
$('#name').blur(checkname);
$('#card_num').blur(check_ajax_card2);
$('#qq').blur(checkqq);
$('#mobile').blur(checkmobile2);

/* 服务器验证用户名 */

function check_ajax_username(){
	var username=$.trim($("#username").val());
	if(username=='' || username.length<3 || username.length>20 ){
		$("#check_username_info").html("请输入昵称且是3-20个字符.");
		$("#check_username_info").attr("class","tip_error");
		return false;
	}

	var filter = /^[a-zA-Z0-9_]*$/;
	if(!filter.test( username )){
		$("#check_username_info").html("昵称含有非法字符，请修改.");
		$("#check_username_info").attr("class","tip_error");
		return false;
	}

	$.post("/users/ajax/checkusername",{"username":username},function(result){
		if( $.browser.msie )
		{
			result = eval('('+result+')');
		}
		else{
			result = JSON.parse(result);
		}

		var message = result.message ;
		var mark    = result.mark ;
		if( mark == 1 )
		{
			$("#check_username_info").html("昵称正确");
			$("#check_username_info").attr("class","tip_ok");
		}
		else{
			$("#check_username_info").html("该用户名已经存在,请重新输入");
			$("#check_username_info").attr("class","tip_error");
			return false;
		}

	});
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

/* 服务器验证电子邮箱 */

function check_ajax_email(){
	/* 判断邮箱格式 */
	var email=$.trim($("#email").val());
	if(email==''){
		$("#check_email_info").html("请填写邮箱地址");
		$("#check_email_info").attr("class","tip_error");
		return false;
	}

	var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	if(!filter.test( email )){
		$("#check_email_info").html("邮箱格式不正确,如：abc@gmail.com");
		$("#check_email_info").attr("class","tip_error");
		return false;
	}

	$.post('/users/ajax/checkemail',{"email":email},function(result){
		if( $.browser.msie )
		{
			result = eval('('+result+')');
		}
		else{
			result = JSON.parse(result);
		}

		var mark = result.mark ;
		if( mark == 1 )
		{
			$("#check_email_info").html("恭喜你，该邮箱可以注册");
			$("#check_email_info").attr("class","tip_ok");
		}
		else{
			$("#check_email_info").html("邮箱已被注册，请更换邮箱");
			$("#check_email_info").attr("class","tip_error");
		}
	});
}


/* 验证姓名 */
function checkname(){
	var name=$.trim($("#name").val());
	if(name=='' || name.length<2 || name.length>4 ){
		$("#check_name_info").html("请输入您的真实姓名,2-4个汉字.");
		$("#check_name_info").attr("class","tip_error");
		return false;
	}

	filter = /^[\u4e00-\u9fa5]+$/i;
	if(!filter.test( name )){
		$("#check_name_info").html("请输入您的真实姓名，必须为汉字.");
		$("#check_name_info").attr("class","tip_error");
		return false;
	}else{
		$("#check_name_info").html("姓名合法.");
		$("#check_name_info").attr("class","tip_ok");
	}

}

/* 服务器验证身份证 */

function check_ajax_card2(){
	var card_num=$.trim($("#card_num").val().toUpperCase());
	$.post("/users/ajax/checkcardnum",{"card_num":card_num},function(result){
		if( $.browser.msie )
		{
			result = eval('('+result+')');
		}
		else{
			result = JSON.parse(result);
		}

		var mark = result.mark ;
		if( mark == 1 )
		{
			$("#check_card_info").html("验证合法");
			$("#check_card_info").attr("class","tip_ok");
			/* 验证姓名 */
			checkname();
		}else if( mark == 0){
			$("#check_card_info").html("该身份证已经被注册,请重新输入");
			$("#check_card_info").attr("class","tip_error");
			return false;
		}else{
			$("#check_card_info").html("请输入您的18位有效身份证号码");
			$("#check_card_info").attr("class","tip_error");
			return false;
		}
	});
}


/* 验证qq */
function checkqq(){
	$("#check_qq_info").html("");
	$("#check_qq_info").attr("class","");
	var qq=$.trim($("#qq").val());
	if(qq!=''){
		var filter = /^[0-9]{4,}$/;
		if(!filter.test( qq )){
			$("#check_qq_info").html("输入的QQ号码不合法");
			$("#check_qq_info").attr("class","tip_error");
			return false;
		}
	}
}

/* 验证手机*/

function checkmobile2(){
	$("#check_mobile_info").html("");
	$("#check_mobile_info").attr("class","");
	var mobile=$.trim($("#mobile").val());
	if(mobile!=''){
		var filter = /^(13|15|18)[0-9]{9}$/;
		if(!filter.test( mobile )){
			$("#check_mobile_info").html("请输入正确11位有效的手机号码");
			$("#check_mobile_info").attr("class","tip_error");
			return false;
		}
	}

	$.post("/users/ajax/checkmobile",{"mobile":mobile},function(result){
		if( $.browser.msie )
		{
			result = eval('('+')');
		}
		else{
			result = JSON.parse(result);
		}

		var mark = result.mark ;
		if( mark == 1)
		{
			$("#check_mobile_info").html("可用");
			$("#check_mobile_info").attr("class","tip_ok");	
		}
		else{
			$("#check_mobile_info").html("该手机号码已被注册，请更换号码");
			$("#check_mobile_info").attr("class","tip_error");
			return false;
		}

	});
}
</script>



<?php 
	include_once(dirname(dirname(__FILE__))."/common/footer.php");
?>

</div>
</div>
<!-- TIP START -->

<!-- TIP END -->

<!--float right-->
<div id="pop_float_right" style="z-index:9;right:0px;bottom:0; width:120px; height:280px; overflow:hidden;POSITION:fixed;_position:absolute; _margin-top: expression(document.documentElement.clientHeight-this.style.pixelHeight+document.documentElement.scrollTop);display:none;">
<div style="background-color: #AB0000;font: bold 12px/20px 'arial'; height: 20px;opacity: 0.7;overflow: hidden;position: absolute;right: 0;text-align: center;top: 0; width: 40px;"><a target="_self" href="javascript:void(0);" onclick="javascript:remove('pop_float_right');" style="color:#FFF;">关闭</a></div>

<a class="tg_link" href="http://www.77313.com/article/view-439.html" target="_blank"></a>
<img src="/Upload/pop/dwj.jpg" />
</div>
<!--end float right-->

</body>
</html>
<?php
//include_once("../ajax/conn.php");
$current_user = isset($_COOKIE['name'])?$_COOKIE['name']:'';
if( $current_user != '')
{
	/*$sql = "select username,real_name,card_num from users where username = '".$current_user."' limit 1";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);*/

	$model = Users::model();
	$row = $model->find('username=:username',array(":username"=>$current_user));

}
else{
	header('Location: /users/default/index');
}
?>
<!DOCTYPE html Public/Home "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>防沉迷认证 - 网页游戏平台</title>
<meta name="keywords" content="网页游戏,网页游戏平台,最新网页游戏,好玩的网页游戏,页游平台" />
<meta name="description" content="最新好玩的网页游戏，最热最火最人气的网络页游，玩机之家网页游戏平台致力于为广大中小R及非人民币玩家打造一个口碑最好的游戏空间；精品网页游戏运营策略，年度最牛的网页游戏一个不漏，玩给力页游就上玩机之家平台；不用公会，绿色没有托，玩机之家页游平台目标是成为最受玩家欢迎的一流国际化品牌网页游戏运营商。" />
<link rel="shortcut icon" type="image/ico" href="http://www.wanjizhijia.com/favicon.ico" />
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
	<li class="icon_7"><a href="/users/user/password" >修改密码</a></li>
	<li class="icon_3"><a href="/users/user/fcm" class="chosen">防沉迷认证</a></li>
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

	<div class="sub-menu">帐号信息<span>&gt;</span>防沉迷认证（身份证绑定）</div>

	<div class="sub-content">


			<table width="670" border="0" align="center" cellpadding="5" cellspacing="0">
			<tr>
			<td></td>
			<td height="50"><span class="tip_ok">您的身份证已绑定成功！</span></td>
			</tr>
			<tr>
			<td width="95" align="right">真实姓名：</td>
			<td><?php echo $row['real_name']; ?></td>
			</tr>
			<tr>
			<td align="right">身份证号码：</td>
			<td><?php echo substr($row['card_num'],0,4);echo "**********";echo substr($row['card_num'],14,4); ?></td>
			</tr>

			</table>	</div>




	<div class="sub-mb">
		<div class="sub-menu"><strong>温馨提示：</strong></div>
		<div class="sub-content">
			<p>1. 身份证信息一旦绑定将无法修改。</p>
			<p>2. 身份证号码可以提高您帐号的安全性。</p>
			<p>3. 身份证号码是作为防沉迷系统判定的唯一标准。 </p>
			<p>4. 保护未成年人身心健康，未满18岁的用户将受到防沉迷系统的限制。 </p>
			<p>5. 在进行游戏的过程中，系统会提示您的累计在线时间: </p>
			<p>&nbsp;&nbsp;&nbsp;&nbsp;累计游戏时间超过 3 小时，游戏收益(经验，金钱)减半。</p>
			<p>&nbsp;&nbsp;&nbsp;&nbsp;累计游戏时间超过 5 小时，游戏收益(经验，金钱)为零。</p>
		</div>
	</div>

</td>
</tr>
</table>


	</div>

</div>
<!-- Main End -->

<script type="text/javascript">
// 表单检证
function checkDo(){
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
}

$('#name').blur(checkname);
$('#card_num').blur(check_ajax_card);

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
function check_ajax_card(){
	var card_num=$.trim($("#card_num").val().toUpperCase());
	$.ajax({
		type: "GET",
		url: "/index.php?m=Index&a=check_card_num&card_num="+card_num,
		success: function(msg) {
			if (msg != 'yes'){
				$("#check_card_info").html("请输入您的18位有效身份证号码");
				$("#check_card_info").attr("class","tip_error");
				return false;
			}else{
				$("#check_card_info").html("验证合法.");
				$("#check_card_info").attr("class","tip_ok");
				/* 验证姓名 */
				checkname();
			}
		}
	});
}
</script>



<?php
    include_once(dirname(dirname(__FILE__))."/common/footer.php")
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
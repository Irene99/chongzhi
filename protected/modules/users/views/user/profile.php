<?php
$current_user = isset($_COOKIE['name'])?$_COOKIE['name']:'' ;
if( $current_user != '' )
{
	//include_once("../ajax/conn.php");
	/*$sql = "select * from users where username = '".$current_user."' limit 1";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);*/

	$model = Users::model();
	$row = $model->find(array(
		'select'=>'*',
		'condition'=>'username=:username',
		'params'=>array(':username'=>$current_user),
	));

	//$location = $row['location'] ;
	$location = $row->location;
	if( $location != '')
	{
		$arr = explode(',',$location);
		$province = $arr[0]; 
		$city = $arr[1] ;
	}
	/*$birth_year  = $row['birth_year'] ;
	$birth_month = $row['birth_month'] ;
	$birth_day   = $row['birth_day'] ;*/
	$birth_year = $row->birth_year;
	$birth_month = $row->birth_month;
	$birth_day = $row->birth_day;
}

?>
<!DOCTYPE html Public/Home "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>修改资料 - 网页游戏平台</title>
<meta name="keywords" content="网页游戏,网页游戏平台,最新网页游戏,好玩的网页游戏,页游平台" />
<meta name="description" content="最新好玩的网页游戏，最热最火最人气的网络页游，玩机之家网页游戏平台致力于为广大中小R及非人民币玩家打造一个口碑最好的游戏空间；精品网页游戏运营策略，年度最牛的网页游戏一个不漏，玩给力页游就上玩机之家平台；不用公会，绿色没有托，玩机之家页游平台目标是成为最受玩家欢迎的一流国际化品牌网页游戏运营商。" />
<link href="/css/Public/Home/Images/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/css/Public/Home/Js/jquery-1.6.2.min.js"></script>
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
	<li class="icon_2"><a href="/users/user/profile" class="chosen">修改资料</a></li>
	<li class="icon_28"><a href="/users/user/face" >修改头像</a></li>
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

	<div class="sub-menu">帐号信息<span>&gt;</span>修改资料</div>

	<div class="sub-content">

			<form id="form1" name="form1" method="post" action="/module/user/profiledo.php" onsubmit="return checkDo()">
			<table width="670" border="0" align="center" cellpadding="5" cellspacing="0">
			<tr>
			<td width="95" align="right">用户名：</td>
			<td width="260"><?php echo $current_user; ?></td>
			<td width="315"></td>
			</tr>
			<tr>
			<td height="30" align="right"><font color="red">*</font> 所在地：</td>
			<td>
				<select name="province" id="province"></select>
				<select name="city" id="city"></select>			
			</td>
			<td><span id="check_city_info"></span></td>
			</tr>
			<tr>
			<td align="right">性别：</td>
			<td>
			<input type="radio" name="sex" value="1" <?php if( $row->sex == 1 ) echo "checked='checked'";?> />男
			<input type="radio" name="sex" value="2" <?php if( $row->sex == 2 ) echo "checked='checked'";?> />女
			<input type="radio" name="sex" value="0" <?php if( $row->sex == '') echo 'checked="checked"';?> />保密
			</td>
			<td>&nbsp;</td>
			</tr>
<tr>
			<td align="right"><font color="red">*</font> 邮箱：</td>
			<td><?php echo $row['email']; ?><input type="hidden" name="email" id="email" class="text" maxlength="100" value="" /></td>
			<td>*.邮箱不能更改，如需更改请联系客服<span id="check_email_info"></span></td>
			</tr>
			<tr>
			<td align="right">手机：</td>
			<td><input type="text" name="mobile" id="mobile" class="text" style="width:240px" value="<?php echo $row->phone; ?>" maxlength="50"/></td>
			<td><span id="check_mobile_info"></span></td>
			</tr>
			<tr>
			<td align="right">QQ号码：</td>
			<td><input type="text" name="qq" id="qq" class="text" style="width:240px" value="<?php echo $row->qq ; ?>" maxlength="50"/></td>
			<td>&nbsp;</td>
			</tr>
			<tr>
			<td height="30" align="right">生日：</td>
			<td>
			<select id="birth_year" name="birth_year"></select>
			<select id="birth_month" name="birth_month"></select>
			<select id="birth_day" name="birth_day"></select>
			</td>
			<td>&nbsp;</td>
			</tr>
			<tr>
			<td align="right">自我介绍：</td>
			<td colspan="2"><textarea name="content" cols="40" rows="6" class="text" id="content"><?php echo $row->content; ?></textarea></td>
			</tr>
			<tr>
			<td>&nbsp;</td>
			<td height="80"><input type="submit" name="Submit" value="提交修改" class="btn-login" /></td>
			<td>&nbsp;</td>
			</tr>
			</table>
			<input type="hidden" name="__hash__" value="165abc60d8bb3d4bf4e6c4ea2906e384" /></form>

	</div>




</td>
</tr>
</table>


	</div>

</div>
<!-- Main End -->

<script type="text/javascript" src="/css/Public/Home/Js/area.js"></script>
<script type="text/javascript">
$(function(){
    city_initialize(
        document.getElementsByName('province')[0],
        document.getElementsByName('city')[0],
        "<?php if(isset($city)) echo $city; ?>"
    );
});

</script>

<script type="text/javascript" src="/css/Public/Home/Js/date-selector.js"></script>
<script type="text/javascript">
var selYear = window.document.getElementById("birth_year");
var selMonth = window.document.getElementById("birth_month");
var selDay = window.document.getElementById("birth_day");

// 新建一个DateSelector类的实例，将三个select对象传进去
new DateSelector(selYear, selMonth ,selDay, "<?php if(isset($birth_year)) echo $birth_year; ?>", "<?php if(isset($birth_month)) echo $birth_month; ?>", "<?php if(isset($birth_day)) echo $birth_day; ?>");
</script>

<script type="text/javascript">
function checkDo(){

	/* 验证所在地 */
	var province=$.trim($("#province").val());
	if(province=='' || province=='请选择'){
		alert('请选择所在省市.');
		$("#province").focus();
		return false;
	}

	var city=$.trim($("#city").val());
	if(city=='' || city=='请选择'){
		alert('请选择所在市/县.');
		$("#city").focus();
		return false;
	}

}
</script>

<script type="text/javascript">
$('#city').blur(check_area);
$('#province').blur(check_area);
$('#email').blur(check_ajax_email);
$('#mobile').blur(checkmobile);

/* 验证省市地区 */
function check_area() {
	if ($('#province').val() == '请选择'){
		$("#check_city_info").html("请选择省份");
		$("#check_city_info").attr("class","tip_error");
	}else if ($('#city').val() == '请选择'){
		$("#check_city_info").html("请选择城市");
		$("#check_city_info").attr("class","tip_error");
	}else{
		$("#check_city_info").html("");
		$("#check_city_info").attr("class","");
	}
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
		$("#check_email_info").html("邮箱格式不正确,请检查.");
		$("#check_email_info").attr("class","tip_error");
		return false;
	}

	$.ajax({
		type: "GET",
		url: "/index.php?m=Index&a=check_email&verify=1&email="+email,
		success: function(msg) {
			if (msg == 'yes'){
				$("#check_email_info").html("邮箱已存在，请更换邮箱");
				$("#check_email_info").attr("class","tip_error");
			}else{
				$("#check_email_info").html("恭喜你，该邮箱可以使用");
				$("#check_email_info").attr("class","tip_ok");
			}
		}
	});

}

/* 验证手机*/
function checkmobile(){
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


	$.ajax({
		type: "GET",
		url: "/index.php?m=Index&a=check_mobile&verify=1&num="+mobile,
		success: function(msg) {
			if (msg == 'yes'){
				$("#check_mobile_info").html("该手机号码已被使用，请更换号码");
				$("#check_mobile_info").attr("class","tip_error");
				return false;
			}else{
				$("#check_mobile_info").html("");
				$("#check_mobile_info").attr("class","");
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

<!--开服提醒-->


</body>
</html>
<?php
$current_user = isset($_COOKIE['name'])?$_COOKIE['name']:'' ;
if( $current_user != '')
{
	$model = Users::model();

	$row = $model->find('username=:username',array(':username'=>$current_user));

	//$location = $row['location'] ;
	$location = $row->location;

	if( $location != '')
	{
		$arr = explode(',',$location);
		$province = $arr[0];
		$city = $arr[1];
	}
}
else{
	//说明没登录
	header("Location: /users/default/index");
	die();
}
?>
<!DOCTYPE html Public/Home "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>会员中心 - 网页游戏平台</title>
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
	<li class="icon_1"><a href="/users/user/index" class="chosen">我的资料</a></li>
	<li class="icon_2"><a href="/users/user/profile" >修改资料</a></li>
	<li class="icon_28"><a href="/users/user/face" >修改头像</a></li>
	<li class="icon_7"><a href="/users/user/password" >修改密码</a></li>
	<li class="icon_3"><a href="/users/user/fcm">防沉迷认证</a></li>
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

	<div class="sub-menu">帐号信息<span>&gt;</span>我的资料</div>

	<div class="sub-content">
	<img src="/Upload/face/<?php if( $row->web_headpic != '') echo $row['web_headpic'];else{ echo 'default';} ?>.jpg" width="70" height="70" class="uhead" />
	<div class="info">
	<h2><?php echo $row['username'] ; ?>，欢迎您!</h2>
	<p><span>上次签到时间：</span><?php echo $row['last_check']; ?></p>
	<p>当前米币余额：<strong><font class="red font_15">0</font></strong> 米币&nbsp;&nbsp;&nbsp;&nbsp;<a href="/pay/" class="red">我要充值&gt;&gt;</a></p>
	<p><span>最近玩过的游戏：</span>您还没有玩过游戏哦！^_^
					</p>
	</div>
	<div class="clear"></div>
	</div>

	<div class="sub-content">
		<div class="sub-title">基本资料</div>

		<div class="sub-main">
		<p align="right"><a href="/user/profile.php" class="red">编辑 &gt;&gt;</a></p>
		<ul>
		<li><label>性别：</label><?php if($row->sex == 1) echo '男';else if($row['sex'] == 2) echo '女';else{ echo '保密';} ?></li>
		<li><label>生日：</label><?php echo $row['birth_year'] ; ?>年<?php echo $row['birth_month']; ?>月<?php echo $row['birth_day']; ?>日</li>
		<li><label>所在地：</label><?php if(isset($province)) echo $province; ?> - <?php if(isset($city)) echo $city; ?></li>
		<li><label>QQ：</label><?php if(isset($row['qq'])) echo $row['qq'] ; ?></li>
		</ul>
				</div>

	</div>

	<div class="sub-content">
		<div class="sub-title">防沉迷认证</div>

		<div class="sub-main">
		<p align="right">&nbsp;</p>
		<ul>
		<li><label>真实姓名：</label><?php echo $row['username'] ;  ?></li>
		<li><label>身份证：</label><?php echo substr($row['card_num'],0,4);echo "*********";echo substr($row['card_num'],14,4);  ?></li>
		</ul>
		</div>

	</div>

	<div class="sub-content">

</td>
</tr>
</table>


	</div>

</div>
<!-- Main End -->


<?php
   include_once(dirname(dirname(__FILE__))."/common/footer.php");
?>

</div>
</div>
<!-- TIP START -->

<!-- TIP END -->


<div style="display:none">
<script language="javascript" type="text/javascript" src="http://js.users.51.la/16723167.js"></script>
<noscript><a href="http://www.51.la/?16723167" target="_blank"><img alt="&#x6211;&#x8981;&#x5566;&#x514D;&#x8D39;&#x7EDF;&#x8BA1;" src="http://img.users.51.la/16723167.asp" style="border:none" /></a></noscript>
</div>
<!--<script type="text/javascript" src="/Public/Home/Js/weixin.js?t=0623"></script>
<script language="javascript" src="http://bbs.wanjizhijia.com/actimgs/tingfengzhe.js?t=0623"></script>-->
<!--float right-->
<div id="pop_float_right" style="z-index:9;right:0px;bottom:0; width:120px; height:280px; overflow:hidden;POSITION:fixed;_position:absolute; _margin-top: expression(document.documentElement.clientHeight-this.style.pixelHeight+document.documentElement.scrollTop);display:none;">
<div style="background-color: #AB0000;font: bold 12px/20px 'arial'; height: 20px;opacity: 0.7;overflow: hidden;position: absolute;right: 0;text-align: center;top: 0; width: 40px;"><a target="_self" href="javascript:void(0);" onclick="javascript:remove('pop_float_right');" style="color:#FFF;">关闭</a></div>

<a class="tg_link" href="http://www.wanjizhijia.com/article/view-439.html" target="_blank"></a>
<img src="/Upload/pop/dwj.jpg" />
</div>
<!--end float right-->


</body>
</html>
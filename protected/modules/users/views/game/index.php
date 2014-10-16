<!DOCTYPE html Public/Home "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>游戏大厅 - 玩机之家网页游戏平台</title>
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
<div id="header">
<div class="logo"><a href="/"><img src="/css/Public/Home/Images/logo.png" class="pngfix" /></a></div>
<div class="right">

<div style="width:625px;height:95px;">
<!--<script src="/Public/Top/top.js"></script>-->
                            
	<a href="javascript:void();" target="_blank">
		<img src="/css/Public/Top/images/1411833721.jpg" width="625" height="90" border="0">
	</a>
</div>

</div>
<div class="clear"></div>
</div>
<!-- Header End -->

<!-- Menu Start -->
<div id="nav">
	<div class="menu">
	<ul>
	<li  class=""><a href="/users/default/index">网站首页</a></li>
	<li  class="cur"><a href="/users/game/index">游戏大厅</a></li>
	<li class=""><a href="/users/user/index">用户中心</a></li>
	<li class=""><a href="/users/pay/index">充值中心</a></li>
    <!--<li class=""><a href="/gift/">礼包卡</a></li>-->
	<li class=""><a href="/service/">客服中心</a></li>
	<!--<li  class=""><a href="/article/">新闻资讯</a></li>-->
	<li><a href="#" target="_blank" class="pngfix bbs">玩家论坛</a></li>
	</ul>
	</div>
</div>
<!-- Menu End -->


<!-- Main Start -->
<div id="main">
<!-- Main-left Start -->
<div class="main-left">
		<!-- 会员登录 -->
		<div class="box box-top home-top-hidden">
			<form id="form1" name="form1" method="post" action="/users/default/login" onsubmit="return checkDo()">
			<div class="content home-login" id="login_div">
				<?php
                                    	if( !isset($_COOKIE['name']) )
                                    	{
                                    ?>
                                    <ul>
                                        <li>
                                            <input type="text" name="username" id="username" class="text" maxlength="30" value="用户名" />
                                        </li>
                                        <li>
                                            <input type="text" name="txtpwd" id="txtpwd" class="text" maxlength="20"
                                            value="密码" />
                                            <input type="password" name="password" id="password" class="text" maxlength="20"
                                            style="display:none;" />
                                        </li>
                                        <li>
                                            <input type="checkbox" id="remember" name="remember" value="1" />
                                            记住用户名
                                            <span>
                                                |
                                            </span>
                                            <a href="/module/user/register.php" class="btn-register">
                                                立即注册
                                            </a>
                                        </li>
                                        <li class="btn-list">
                                            <input type="submit" value=" " class="btn-login" />
                                        </li>
                                    </ul>
                                    <?php
										}
										else{
											//include_once("../ajax/conn.php");
                                            if( $_COOKIE['name'] != '')
                                            {
/*                                              $sql = "select web_headpic from users where username = '".$_COOKIE['name']."' limit 1";
                                                $result = mysql_query($sql);
                                                $row = mysql_fetch_array($result);*/

                                                $model = Users::model();
                                                $row = $model->find(array(
                                                	'select'=>'web_headpic',
                                                	'condition'=>'username=:username',
                                                	'params'=>array(':username'=>$_COOKIE['name']),
                                                ));


                                                //$web_headpic = $row['web_headpic'] ;
                                                $web_headpic = $row->web_headpic ;
                                                if( $web_headpic == '')
                                                {
                                                	$web_headpic = "default";
                                                }
                                            }
                                            else{
                                                $web_headpic = "default";
                                            }
									?>
											<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
												<tbody><tr>
												<td width="35%" valign="top"><img src="/Upload/face/<?php echo $web_headpic; ?>.jpg" width="60" height="60" class="uhead"></td>
												<td width="65%" valign="top">
												<strong class="font_14"><?php if(isset($_COOKIE['name'])) echo $_COOKIE['name']; ?></strong>
																<div class="mtop"><a href="/user/" class="btn">个人中心</a> <a href="/pay/" class="btn">充值</a> <a href="/users/user/logout" class="btn">退出</a> </div>                
								                 <div style="clear:both;"><strong style="font-family:Arial, Helvetica, sans-serif;font-size:25px;color:#069">30</strong>&nbsp;&nbsp;积分</div>
								                </td>
												</tr>
												<tr>
												  <td height="40" colspan="2" valign="middle"><table width="100%" border="0" cellspacing="5" cellpadding="0">
								                    <tbody><tr>
								                      <td width="50%" height="30" align="center" bgcolor="#008A9F"><a href="/user/ipoint" class="yahei">我的积分</a></td>
								                      <td width="50%" height="30" align="center" bgcolor="#DA532C"><a href="/user/point_lucky" class="yahei">积分抽奖</a></td>
								                    </tr>
								                    <tr>
								                      <td width="50%" height="30" align="center" bgcolor="#E19E19"><a href="/user/point_draw" class="yahei">积分翻牌</a></td>
								                      <td width="50%" height="30" align="center" bgcolor="#58B30E"><a href="/user/point_trade" class="yahei">积分贸易</a></td>
								                    </tr>
								                  </tbody></table></td>
												  </tr>
												</tbody></table>
									<?php
										}
                                    ?>
			</div>
			<input type="hidden" name="__hash__" value="401d2e08b17222c81fb0669d22e83f4b" /></form>
			<!--<div class="quick-link">
				<ul>
				<li><a href="/index/forgot" class="quick-found">找回密码</a></li>
				<li><a href="/user/" class="quick-safe">帐号安全</a></li>
				<li><a href="/service/" class="quick-service">客服中心</a></li>
				<li><a href="/pay/" class="quick-pay">充值中心</a></li>
				</ul>
				<div class="clear"></div>
			</div>
			-->
		</div>

		<!-- 最新开服 -->
		<div class="box mtop">
			<div class="switch"><span onmouseover="javascript:showhide(1,2,'new');" class="first on" id="new-1">游戏列表</span><span onmouseover="javascript:showhide(2,2,'new');" id="new-2">最新开服</span></div>
			<div class="new-play-1" id="new-content-1">

				<dl>
				<dd class="first" onclick="window.location.href='#';">
					<ul>
					<li class="one"><img src="/Upload/favicon/2014092518002758374.jpg" width="22" height="22" /></li>
					<li class="two"><a href="#">神将屠龙</a></li>
					<li class="three"></li>
					<li class="four">角色扮演</li>
					</ul>
					<div class="clear"></div>
				</dd><dd class="n" onclick="window.location.href='#';">
					<ul>
					<li class="one"><img src="/Upload/favicon/2014092010493868697.jpg" width="22" height="22" /></li>
					<li class="two"><a href="#">魅影传说</a></li>
					<li class="three"></li>
					<li class="four">角色扮演</li>
					</ul>
					<div class="clear"></div>
				</dd><dd  onclick="window.location.href='#';">
					<ul>
					<li class="one"><img src="/Upload/favicon/2014090718062993471.jpg" width="22" height="22" /></li>
					<li class="two"><a href="#">黑暗之光</a></li>
					<li class="three"></li>
					<li class="four">角色扮演</li>
					</ul>
					<div class="clear"></div>
				</dd><dd class="n" onclick="window.location.href='#';">
					<ul>
					<li class="one"><img src="/Upload/favicon/2014080614271810461.jpg" width="22" height="22" /></li>
					<li class="two"><a href="#">辉煌足球</a></li>
					<li class="three"></li>
					<li class="four">角色扮演</li>
					</ul>
					<div class="clear"></div>
				</dd><dd  onclick="window.location.href='#';">
					<ul>
					<li class="one"><img src="/Upload/favicon/2014081115280163134.jpg" width="22" height="22" /></li>
					<li class="two"><a href="#">太古遮天2</a></li>
					<li class="three"></li>
					<li class="four">角色扮演</li>
					</ul>
					<div class="clear"></div>
				</dd><dd class="n" onclick="window.location.href='#';">
					<ul>
					<li class="one"><img src="/Upload/favicon/2014071917302911614.jpg" width="22" height="22" /></li>
					<li class="two"><a href="#">风云无双</a></li>
					<li class="three"></li>
					<li class="four">角色扮演</li>
					</ul>
					<div class="clear"></div>
				</dd><dd  onclick="window.location.href='#';">
					<ul>
					<li class="one"><img src="/Upload/favicon/2014071518181755663.jpg" width="22" height="22" /></li>
					<li class="two"><a href="#">笑傲九天</a></li>
					<li class="three"></li>
					<li class="four">角色扮演</li>
					</ul>
					<div class="clear"></div>
				</dd><dd class="n" onclick="window.location.href='#';">
					<ul>
					<li class="one"><img src="/Upload/favicon/2014061810055051565.jpg" width="22" height="22" /></li>
					<li class="two"><a href="#">乱舞江山</a></li>
					<li class="three"></li>
					<li class="four">角色扮演</li>
					</ul>
					<div class="clear"></div>
				</dd><dd  onclick="window.location.href='#';">
					<ul>
					<li class="one"><img src="/Upload/favicon/2014051711362266324.jpg" width="22" height="22" /></li>
					<li class="two"><a href="#">暗黑世界</a></li>
					<li class="three"></li>
					<li class="four">角色扮演</li>
					</ul>
					<div class="clear"></div>
				</dd><dd class="n" onclick="window.location.href='#';">
					<ul>
					<li class="one"><img src="/Upload/favicon/2014040515005943570.jpg" width="22" height="22" /></li>
					<li class="two"><a href="#">暗黑修仙</a></li>
					<li class="three"></li>
					<li class="four">角色扮演</li>
					</ul>
					<div class="clear"></div>
				</dd><dd  onclick="window.location.href='#';">
					<ul>
					<li class="one"><img src="/Upload/favicon/2014032718002438684.jpg" width="22" height="22" /></li>
					<li class="two"><a href="#">七杀</a></li>
					<li class="three"></li>
					<li class="four">角色扮演</li>
					</ul>
					<div class="clear"></div>
				</dd><dd class="n" onclick="window.location.href='#';">
					<ul>
					<li class="one"><img src="/Upload/favicon/2014031911533886631.jpg" width="22" height="22" /></li>
					<li class="two"><a href="#">三国魂</a></li>
					<li class="three"></li>
					<li class="four">战争策略</li>
					</ul>
					<div class="clear"></div>
				</dd><dd  onclick="window.location.href='#';">
					<ul>
					<li class="one"><img src="/Upload/favicon/2014030514545744591.jpg" width="22" height="22" /></li>
					<li class="two"><a href="#">死神狂潮</a></li>
					<li class="three"></li>
					<li class="four">角色扮演</li>
					</ul>
					<div class="clear"></div>
				</dd><dd class="n" onclick="window.location.href='#';">
					<ul>
					<li class="one"><img src="/Upload/favicon/2014030515060116927.jpg" width="22" height="22" /></li>
					<li class="two"><a href="#">暗黑屠龙</a></li>
					<li class="three"></li>
					<li class="four">角色扮演</li>
					</ul>
					<div class="clear"></div>
				</dd><dd  onclick="window.location.href='#';">
					<ul>
					<li class="one"><img src="/Upload/favicon/2014022513363041684.png" width="22" height="22" /></li>
					<li class="two"><a href="#">御天</a></li>
					<li class="three"></li>
					<li class="four">角色扮演</li>
					</ul>
					<div class="clear"></div>
				</dd><dd class="n" onclick="window.location.href='#';">
					<ul>
					<li class="one"><img src="/Upload/favicon/2014011816464487099.jpg" width="22" height="22" /></li>
					<li class="two"><a href="#">神创天下</a></li>
					<li class="three"></li>
					<li class="four">角色扮演</li>
					</ul>
					<div class="clear"></div>
				</dd><dd  onclick="window.location.href='#';">
					<ul>
					<li class="one"><img src="/Upload/favicon/2014010712475584774.png" width="22" height="22" /></li>
					<li class="two"><a href="#">动漫英雄传</a></li>
					<li class="three"></li>
					<li class="four">角色扮演</li>
					</ul>
					<div class="clear"></div>
				</dd><dd class="n" onclick="window.location.href='#';">
					<ul>
					<li class="one"><img src="/Upload/favicon/2013122314291459586.jpg" width="22" height="22" /></li>
					<li class="two"><a href="#">大将军</a></li>
					<li class="three"></li>
					<li class="four">战争策略</li>
					</ul>
					<div class="clear"></div>
				</dd><dd  onclick="window.location.href='#';">
					<ul>
					<li class="one"><img src="/Upload/favicon/2013120317533819443.gif" width="22" height="22" /></li>
					<li class="two"><a href="#">新乱世隋唐</a></li>
					<li class="three"></li>
					<li class="four">战争策略</li>
					</ul>
					<div class="clear"></div>
				</dd><dd class="n" onclick="window.location.href='#';">
					<ul>
					<li class="one"><img src="/Upload/favicon/2013112815194330035.gif" width="22" height="22" /></li>
					<li class="two"><a href="#">热血战纪</a></li>
					<li class="three"></li>
					<li class="four">角色扮演</li>
					</ul>
					<div class="clear"></div>
				</dd><dd  onclick="window.location.href='#';">
					<ul>
					<li class="one"><img src="/Upload/favicon/2013110514163555993.jpg" width="22" height="22" /></li>
					<li class="two"><a href="#">女神联盟</a></li>
					<li class="three"></li>
					<li class="four">角色扮演</li>
					</ul>
					<div class="clear"></div>
				</dd><dd class="n" onclick="window.location.href='#';">
					<ul>
					<li class="one"><img src="/Upload/favicon/2013101118520886274.jpg" width="22" height="22" /></li>
					<li class="two"><a href="#">武易</a></li>
					<li class="three"></li>
					<li class="four">角色扮演</li>
					</ul>
					<div class="clear"></div>
				</dd><dd  onclick="window.location.href='#';">
					<ul>
					<li class="one"><img src="/Upload/favicon/201309141710332251.jpg" width="22" height="22" /></li>
					<li class="two"><a href="#">枪魂</a></li>
					<li class="three"></li>
					<li class="four">角色扮演</li>
					</ul>
					<div class="clear"></div>
				</dd><dd class="n" onclick="window.location.href='#';">
					<ul>
					<li class="one"><img src="/Upload/favicon/2013080418014868843.jpg" width="22" height="22" /></li>
					<li class="two"><a href="#">火影疾风坛</a></li>
					<li class="three"></li>
					<li class="four">角色扮演</li>
					</ul>
					<div class="clear"></div>
				</dd><dd  onclick="window.location.href='#';">
					<ul>
					<li class="one"><img src="/Upload/favicon/2013072317233464815.jpg" width="22" height="22" /></li>
					<li class="two"><a href="#">攻城掠地</a></li>
					<li class="three"></li>
					<li class="four">战争策略</li>
					</ul>
					<div class="clear"></div>
				</dd><dd class="n" onclick="window.location.href='#';">
					<ul>
					<li class="one"><img src="/Upload/favicon/2013071617584094622.jpg" width="22" height="22" /></li>
					<li class="two"><a href="#">龙纹战域</a></li>
					<li class="three"></li>
					<li class="four">角色扮演</li>
					</ul>
					<div class="clear"></div>
				</dd><dd  onclick="window.location.href='#';">
					<ul>
					<li class="one"><img src="/Upload/favicon/2013071017460816142.jpg" width="22" height="22" /></li>
					<li class="two"><a href="#">武尊</a></li>
					<li class="three"></li>
					<li class="four">角色扮演</li>
					</ul>
					<div class="clear"></div>
				</dd><dd class="n" onclick="window.location.href='#';">
					<ul>
					<li class="one"><img src="/Upload/favicon/2013060320383320487.jpg" width="22" height="22" /></li>
					<li class="two"><a href="#">屠龙传说</a></li>
					<li class="three"></li>
					<li class="four">角色扮演</li>
					</ul>
					<div class="clear"></div>
				</dd><dd  onclick="window.location.href='#';">
					<ul>
					<li class="one"><img src="/Upload/favicon/2013052414084011130.jpg" width="22" height="22" /></li>
					<li class="two"><a href="#">斗破乾坤</a></li>
					<li class="three"></li>
					<li class="four">角色扮演</li>
					</ul>
					<div class="clear"></div>
				</dd><dd class="n" onclick="window.location.href='#';">
					<ul>
					<li class="one"><img src="/Upload/favicon/2013041621353395172.jpg" width="22" height="22" /></li>
					<li class="two"><a href="#">街机三国</a></li>
					<li class="three"></li>
					<li class="four">角色扮演</li>
					</ul>
					<div class="clear"></div>
				</dd><dd  onclick="window.location.href='#';">
					<ul>
					<li class="one"><img src="/Upload/favicon/2013041421091619909.jpg" width="22" height="22" /></li>
					<li class="two"><a href="#">热血海贼王</a></li>
					<li class="three"></li>
					<li class="four">角色扮演</li>
					</ul>
					<div class="clear"></div>
				</dd><dd class="n" onclick="window.location.href='#';">
					<ul>
					<li class="one"><img src="/Upload/favicon/2013032015000824541.jpg" width="22" height="22" /></li>
					<li class="two"><a href="#">烈火战神</a></li>
					<li class="three"></li>
					<li class="four">角色扮演</li>
					</ul>
					<div class="clear"></div>
				</dd><dd  onclick="window.location.href='#';">
					<ul>
					<li class="one"><img src="/Upload/favicon/2013012110144017364.jpg" width="22" height="22" /></li>
					<li class="two"><a href="#">热血三国2</a></li>
					<li class="three"></li>
					<li class="four">战争策略</li>
					</ul>
					<div class="clear"></div>
				</dd><dd class="n" onclick="window.location.href='#';">
					<ul>
					<li class="one"><img src="/Upload/favicon/2012120616202656690.jpg" width="22" height="22" /></li>
					<li class="two"><a href="#">乱世隋唐</a></li>
					<li class="three"></li>
					<li class="four">战争策略</li>
					</ul>
					<div class="clear"></div>
				</dd>				</dl>
			</div>
			<div class="new-play" id="new-content-2" style="display:none">
				<dl>
				<dt>
					<ul>
					<li class="one">日期</li>
					<li class="two">时间</li>
					<li class="three">游戏名称</li>
					<li class="four">服务器</li>
					</ul>
					<div class="clear"></div>
				</dt>
				<dd >
					<ul>
					<li class="one">09-28</li>
					<li class="two">16:00</li>
					<li class="three"><a href="#" target="_blank">热血海贼王</a></li>
					<li class="four"><a href="#play.php?domain=s63" target="_blank">63服</a></li>
					</ul>
					<div class="clear"></div>
				</dd><dd class="n">
					<ul>
					<li class="one">09-28</li>
					<li class="two">15:00</li>
					<li class="three"><a href="#" target="_blank">火影疾风坛</a></li>
					<li class="four"><a href="#play.php?domain=s76" target="_blank">76服</a></li>
					</ul>
					<div class="clear"></div>
				</dd><dd >
					<ul>
					<li class="one">09-28</li>
					<li class="two">10:00</li>
					<li class="three"><a href="#" target="_blank">三国魂</a></li>
					<li class="four"><a href="#play.php?domain=s54" target="_blank">54服</a></li>
					</ul>
					<div class="clear"></div>
				</dd><dd class="n">
					<ul>
					<li class="one">09-27</li>
					<li class="two">23:00</li>
					<li class="three"><a href="#" target="_blank">七杀</a></li>
					<li class="four"><a href="#play.php?domain=s163" target="_blank">163服</a></li>
					</ul>
					<div class="clear"></div>
				</dd><dd >
					<ul>
					<li class="one">09-27</li>
					<li class="two">22:00</li>
					<li class="three"><a href="#" target="_blank">武易</a></li>
					<li class="four"><a href="#play.php?domain=s303" target="_blank">303服</a></li>
					</ul>
					<div class="clear"></div>
				</dd><dd class="n">
					<ul>
					<li class="one">09-27</li>
					<li class="two">21:00</li>
					<li class="three"><a href="#" target="_blank">烈火战神</a></li>
					<li class="four"><a href="#play.php?domain=s322" target="_blank">322服</a></li>
					</ul>
					<div class="clear"></div>
				</dd><dd >
					<ul>
					<li class="one">09-27</li>
					<li class="two">21:00</li>
					<li class="three"><a href="#" target="_blank">风云无双</a></li>
					<li class="four"><a href="#play.php?domain=s64" target="_blank">64服</a></li>
					</ul>
					<div class="clear"></div>
				</dd><dd class="n">
					<ul>
					<li class="one">09-27</li>
					<li class="two">20:00</li>
					<li class="three"><a href="#" target="_blank">黑暗之光</a></li>
					<li class="four"><a href="#play.php?domain=s11" target="_blank">11服</a></li>
					</ul>
					<div class="clear"></div>
				</dd><dd >
					<ul>
					<li class="one">09-27</li>
					<li class="two">15:00</li>
					<li class="three"><a href="#" target="_blank">辉煌足球</a></li>
					<li class="four"><a href="#play.php?domain=s8" target="_blank">8服</a></li>
					</ul>
					<div class="clear"></div>
				</dd><dd class="n">
					<ul>
					<li class="one">09-27</li>
					<li class="two">11:00</li>
					<li class="three"><a href="#" target="_blank">龙纹战域</a></li>
					<li class="four"><a href="#play.php?domain=s124" target="_blank">124服</a></li>
					</ul>
					<div class="clear"></div>
				</dd>				</dl>
			</div>
		</div>
	<!-- End 最新开服 -->
</div>
<!-- Main-left End -->

<!-- Main-right Start -->
<div class="main-right">
<!-- 精品推荐 start -->
<div class="box-2" style="margin-top:0px">
<div class="bar-1" style="margin-top:0px;display:none;"><a href="#"></a></div>
<div class="box">
  <div>


	<div class="game-home hot">
	<div class="game-img"><a href="#"><img src="/Upload/game/game_mycs.jpg" alt="魅影传说"/></a></div>
	<div class="game-info"><h3><a href="#" target="_blank">魅影传说</a></h3>类型：<span>角色扮演</span><br />游戏介绍：<span>三国混战，体验你的魅影就是传说</span><a href="#" class="game-info-in" target="_blank">进入游戏</a></div>
	</div>

	<div class="game-home right hot">
	<div class="game-img"><a href="#"><img src="/Upload/game/game_hazg.jpg" alt="黑暗之光"/></a></div>
	<div class="game-info"><h3><a href="#" target="_blank">黑暗之光</a></h3>类型：<span>角色扮演</span><br />游戏介绍：<span>3D硬派格杀双端网游，玩法多元</span><a href="#" class="game-info-in" target="_blank">进入游戏</a></div>
	</div>


	<div class="game-home hot">
	<div class="game-img"><a href="#"><img src="/Upload/game/game_tgzt.jpg" alt="辉煌足球"/></a></div>
	<div class="game-info"><h3><a href="#" target="_blank">太古遮天2</a></h3>类型：<span>角色扮演</span><br />游戏介绍：<span>神兵法宝、倾世红颜、荣耀称王</span><a href="#" class="game-info-in" target="_blank">进入游戏</a></div>
	</div>

	<div class="game-home right hot">
	<div class="game-img"><a href="#"><img src="/Upload/game/game_hhzq.jpg" alt="辉煌足球"/></a></div>
	<div class="game-info"><h3><a href="#" target="_blank">辉煌足球</a></h3>类型：<span>角色扮演</span><br />游戏介绍：<span>体验传球、射门、铲断、扑救的激情</span><a href="#" class="game-info-in" target="_blank">进入游戏</a></div>
	</div>

	<div class="game-home hot">
	<div class="game-img"><a href="#"><img src="/Upload/game/game_fy.jpg" alt="风云无双"/></a></div>
	<div class="game-info"><h3><a href="#" target="_blank">风云无双</a></h3>类型：<span>角色扮演</span><br />游戏介绍：<span>霸尽天下、成也风云、败也风云</span><a href="http://fy.wanjizhijia.com/server_list.php" class="game-info-in" target="_blank">进入游戏</a></div>
	</div>


	<div class="game-home right hot">
	<div class="game-img"><a href="#"><img src="/Upload/game/game_xajt.jpg" alt="笑傲九天"/></a></div>
	<div class="game-info"><h3><a href="#" target="_blank">笑傲九天</a></h3>类型：<span>角色扮演</span><br />游戏介绍：<span>东方玄幻题材写实版、2.5D美术制作</span><a href="http://xajt.wanjizhijia.com/server_list.php" class="game-info-in" target="_blank">进入游戏</a></div>
	</div>


	<div class="game-home hot">
	<div class="game-img"><a href="#"><img src="/Upload/game/game_lwjs.jpg" alt="乱舞江山"/></a></div>
	<div class="game-info"><h3><a href="#" target="_blank">乱舞江山</a></h3>类型：<span>角色扮演</span><br />游戏介绍：<span>Q版萌动体验三国争霸的跌宕</span><a href="http://lwjs.wanjizhijia.com/server_list.php" class="game-info-in">进入游戏</a></div>
	</div>


	<div class="game-home right hot">
	<div class="game-img"><a href="#"><img src="/Upload/game/game_ahsj.jpg" alt="暗黑世界"/></a></div>
	<div class="game-info"><h3><a href="#" target="_blank">暗黑世界</a></h3>类型：<span>角色扮演</span><br />游戏介绍：<span>暗黑风格RPG2D网游,经典与创新激情碰撞</span><a href="http://ahsj.wanjizhijia.com/server_list.php" class="game-info-in">进入游戏</a></div>
	</div>

	<div class="game-home hot">
	<div class="game-img"><a href="#"><img src="/Upload/game/game_ahxx.jpg" alt="暗黑修仙"/></a></div>
	<div class="game-info"><h3><a href="#" target="_blank">暗黑修仙</a></h3>类型：<span>角色扮演</span><br />游戏介绍：<span>暗黑仙侠题材的ARPG网页游戏巨作</span><a href="#" class="game-info-in" target="_blank">进入游戏</a></div>
	</div>



	<div class="game-home right hot">
	<div class="game-img"><a href="#"><img src="/Upload/game/game_qs.jpg" alt="七杀"/></a></div>
	<div class="game-info"><h3><a href="#" target="_blank">七杀</a></h3>类型：<span>角色扮演</span><br />游戏介绍：<span>激烈又刺激的对抗，回味精彩的传奇世界</span><a href="#" class="game-info-in">进入游戏</a></div>
	</div>


	<div class="game-home hot">
	<div class="game-img"><a href="#"><img src="/Upload/game/game_sgh.jpg" alt="三国魂"/></a></div>
	<div class="game-info"><h3><a href="#" target="_blank">三国魂</a></h3>类型：<span>战争策略</span><br />游戏介绍：<span>三国演义题材的武将龙争虎斗战争策略游戏</span><a href="http://sgh.wanjizhijia.com/server_list.php" class="game-info-in">进入游戏</a></div>
	</div>

	<div class="game-home right hot">
	<div class="game-img"><a href="#"><img src="/Upload/game/game_ahtl.jpg" alt="暗黑屠龙"/></a></div>
	<div class="game-info"><h3><a href="#" target="_blank">暗黑屠龙</a></h3>类型：<span>角色扮演</span><br />游戏介绍：<span>一款暗黑魔幻风格的大型多人在线对战ARPG</span><a href="http://ahtl.wanjizhijia.com/server_list.php" class="game-info-in">进入游戏</a></div>
	</div>

	<div class="game-home hot">
	<div class="game-img"><a href="#"><img src="/Upload/game/game_sskc.jpg" alt="死神狂潮"/></a></div>
	<div class="game-info"><h3><a href="#" target="_blank">死神狂潮</a></h3>类型：<span>角色扮演</span><br />游戏介绍：<span>动漫“死神”剧情制作而成的回合制页游</span><a href="#" class="game-info-in">进入游戏</a></div>
	</div>

	<div class="game-home right hot">
	<div class="game-img"><a href="#"><img src="/Upload/game/game_qjll.jpg" alt="奇迹来了"/></a></div>
	<div class="game-info"><h3><a href="#" target="_blank">奇迹来了</a></h3>类型：<span>角色扮演</span><br />游戏介绍：<span>全新3D无插件角色扮演类网页游戏巨作</span><a href="#" class="game-info-in">进入游戏</a></div>
	</div>
	
	<div class="game-home hot">
	<div class="game-img"><a href="#"><img src="/Upload/game/game_sctx.jpg" alt="神创天下"/></a></div>
	<div class="game-info"><h3><a href="#" target="_blank">神创天下</a></h3>类型：<span>角色扮演</span><br />游戏介绍：<span>超炫封神页游!</span><a href="#" class="game-info-in">进入游戏</a></div>
	</div>

	
    <div class="game-home right hot">
	<div class="game-img"><a href="#"><img src="/Upload/game/game_djj.jpg" alt="大将军"/></a></div>
	<div class="game-info"><h3><a href="#" target="_blank">大将军</a></h3>类型：<span>角色扮演</span><br />游戏介绍：<span>即时国战,完全自由,带你重回策略巅峰!</span><a href="#" class="game-info-in">进入游戏</a></div>
	</div>
    
    <div class="game-home hot">
	<div class="game-img"><a href="#"><img src="/Upload/game/game_rxzj.jpg" alt="热血战记"/></a></div>
	<div class="game-info"><h3><a href="#" target="_blank">热血战记</a></h3>类型：<span>角色扮演</span><br />游戏介绍：<span>真实刺激的PK体验，畅快淋漓的战斗节奏</span><a href="#" class="game-info-in">进入游戏</a></div>
	</div>

	<!--loop start-->
	<div class="game-home right hot">
	<div class="game-img"><a href="#"><img src="/Upload/game/game_ns.jpg" alt="女神联盟"/></a></div>
	<div class="game-info"><h3><a href="#" target="_blank">女神联盟</a></h3>类型：<span>角色扮演</span><br />游戏介绍：<span>西方神话题材、画面精致、全景动态技术</span><a href="#" class="game-info-in">进入游戏</a></div>
	</div>
	<!--loop end-->

	<!--loop start-->
	<div class="game-home hot">
	<div class="game-img"><a href="#"><img src="/Upload/game/game_wy.jpg" alt="武易"/></a></div>
	<div class="game-info"><h3><a href="#" target="_blank">武易</a></h3>类型：<span>角色扮演</span><br />游戏介绍：<span>传奇以怀旧为主题，原滋原味地呈现经典PK</span><a href="#" class="game-info-in">进入游戏</a></div>
	</div>
	<!--loop end-->

	<!--loop start-->
	<div class="game-home right hot">
	<div class="game-img"><a href="#"><img src="/Upload/game/game_qh.jpg" alt="枪魂"/></a></div>
	<div class="game-info"><h3><a href="#" target="_blank">枪魂</a></h3>类型：<span>角色扮演</span><br />游戏介绍：<span>首款生化危机题材2D竞技游戏</span><a href="#" class="game-info-in">进入游戏</a></div>
	</div>
	<!--loop end-->

	<!--loop start-->
	<div class="game-home hot">
	<div class="game-img"><a href="#"><img src="/Upload/game/lhzs.jpg" alt="烈火战神"/></a></div>
	<div class="game-info">
	<h3><a href="#" target="_blank">烈火战神</a></h3>
	类型：<span>角色扮演</span><br />
	游戏介绍：<span>超炫翅膀、独特玩法、丰富副本等您来体验</span><a href="#" class="game-info-in">进入游戏</a></div>
	</div>
	<!--loop end-->
	
	<!--loop start-->
	<div class="game-home right hot">
	<div class="game-img"><a href="#"><img src="/Upload/game/game_hy.jpg" alt="火影疾风坛"/></a></div>
	<div class="game-info"><h3><a href="#" target="_blank">火影疾风坛</a></h3>类型：<span>角色扮演</span><br />游戏介绍：<span>原味动漫剧情，100%动漫技能还原呈现</span><a href="#" class="game-info-in">进入游戏</a></div>
	</div>
	<!--loop end-->

	<div class="game-home hot">
	<div class="game-img"><a href="#"><img src="/Upload/game/game_dmyx.jpg" alt="动漫英雄传"/></a></div>
	<div class="game-info"><h3><a href="#" target="_blank">动漫英雄传</a></h3>类型：<span>角色扮演</span><br />游戏介绍：<span>海贼、死神两大阵营点燃史上巅峰之战!</span><a href="#" class="game-info-in">进入游戏</a></div>
	</div>
    
	<div class="game-home right hot">
	<div class="game-img"><a href="#"><img src="/Upload/game/game_gcld.jpg" alt="攻城掠地"/></a></div>
	<div class="game-info">
	<h3><a href="#" target="_blank">攻城掠地</a></h3>
	类型：<span>战争策略</span><br />
	游戏介绍：<span>《傲视天地》之后只玩《攻城掠地》</span><a href="#" class="game-info-in">进入游戏</a></div>
	</div>
	<!--loop end-->

	<!--loop start-->
	<div class="game-home hot">
	<div class="game-img"><a href="#"><img src="/Upload/game/game_mxqy.jpg" alt="冒险契约"/></a></div>
	<div class="game-info"><h3><a href="#" target="_blank">冒险契约</a></h3>类型：<span>角色扮演</span><br />游戏介绍：<span>萌宠坐骑,百变时装、无锁定格斗的冒险体验</span><a href="#" class="game-info-in">进入游戏</a></div>
	</div>
	<!--loop end-->

	<!--loop start-->
	<div class="game-home right hot">
	<div class="game-img"><a href="#"><img src="/Upload/game/game_ly.jpg" alt="烈焰"/></a></div>
	<div class="game-info">
	<h3><a href="#" target="_blank">烈焰</a></h3>
	类型：<span>角色扮演</span><br />
	游戏介绍：<span>延续经典，融合最新技术，演绎魔幻世界</span><a href="#" class="game-info-in">进入游戏</a></div>
	</div>
	<!--loop end-->

	<!--loop start-->
	<div class="game-home hot">
	<div class="game-img"><a href="#"><img src="/Upload/game/game_dpqk.jpg" alt="斗破乾坤"/></a></div>
	<div class="game-info">
	<h3><a href="#" target="_blank">斗破乾坤</a></h3>
	类型：<span>角色扮演</span><br />
	游戏介绍：<span>融侠情、武功、文艺和趣味于一体</span><a href="#server_list.php" class="game-info-in">进入游戏</a></div>
	</div>
    
	<div class="game-home right hot">
	<div class="game-img"><a href="#"><img src="/Upload/game/game_tlcs.jpg" alt="屠龙传说"/></a></div>
	<div class="game-info">
	<h3><a href="#" target="_blank">屠龙传说</a></h3>
	类型：<span>角色扮演</span><br />
	游戏介绍：<span>D3D硬件加速引擎，让PK更加爽快</span><a href="#" class="game-info-in">进入游戏</a></div>
	</div>
	<!--loop end-->

	<!--loop start-->
	<div class="game-home hot">
	<div class="game-img"><a href="#"><img src="/Upload/game/game_wz.jpg" alt="武尊"/></a></div>
	<div class="game-info">
	<h3><a href="#" target="_blank">武尊</a></h3>
	类型：<span>角色扮演</span><br />
	游戏介绍：<span>有朝一日厚积薄发，一鸣惊人</span><a href="#" class="game-info-in">进入游戏</a></div>
	</div>
	<!--loop end-->

	<!--loop start-->
	<div class="game-home right hot">
	<div class="game-img"><a href="#"><img src="/Upload/game/jj.jpg" alt="街机三国"/></a></div>
	<div class="game-info">
	<h3><a href="#" target="_blank">街机三国</a></h3>
	类型：<span>角色扮演</span><br />
	游戏介绍：<span>无限爽快、无限欢乐，横版动作游戏</span><a href="#" class="game-info-in">进入游戏</a></div>
	</div>
	<!--loop end-->

	<!--loop start-->
	<div class="game-home hot">
	<div class="game-img"><a href="#"><img src="/Upload/game/sg2.jpg" alt="热血三国2"/></a></div>
	<div class="game-info">
	<h3><a href="#" target="_blank">热血三国2</a></h3>
	类型：<span>战争策略</span><br />
	游戏介绍：<span>经典玩法，全面升级的华丽画面与极速性能</span><a href="#" class="game-info-in">进入游戏</a></div>
	</div>
	<!--loop end-->
    
	<div class="game-home right recommend">
	<div class="game-img"><a href="#"><img src="/Upload/game/game_by.jpg" alt="霸域"/></a></div>
	<div class="game-info">
	<h3><a href="#" target="_blank">霸域</a></h3>
	类型：<span>战争策略</span><br />
	游戏介绍：<span>《霸域》是2013年魔幻页游史诗巨作</span><a href="#" class="game-info-in">进入游戏</a></div>
	</div>
    
	<div class="game-home recommend">
	<div class="game-img"><a href="#"><img src="/Upload/game/game_mhzc.jpg" alt="新梦幻之城"/></a></div>
	<div class="game-info">
	<h3><a href="#" target="_blank">新梦幻之城</a></h3>
	类型：<span>角色扮演</span><br />
	游戏介绍：<span>Q版风情、超萌酷炫的宠物伙伴、自由多变</span><a href="#" class="game-info-in">进入游戏</a></div>
	</div>
    
	<div class="game-home right recommend">
	<div class="game-img"><a href="#"><img src="/Upload/game/xlfc.jpg" alt="仙落凡尘"/></a></div>
	<div class="game-info">
	<h3><a href="#" target="_blank">仙落凡尘</a></h3>
	类型：<span>角色扮演</span><br />
	游戏介绍：<span>绚丽多彩的技能画面，强大的装备系统..</span><a href="#" class="game-info-in">进入游戏</a></div>
	</div>
    
	<!--loop start-->
	<div class="game-home recommend">
	<div class="game-img"><a href="#"><img src="/Upload/game/game_yjxy.jpg" alt="一剑轩辕"/></a></div>
	<div class="#" target="_blank">一剑轩辕</a></h3>类型：<span>角色扮演</span><br />游戏介绍：<span>皇族后人肩负复国使命，开始闯荡江湖</span><a href="#" class="game-info-in">进入游戏</a></div>
	</div>
	<!--loop end-->
    
	<div class="game-home right recommend">
	<div class="game-img"><a href="#"><img src="/Upload/game/rxhzw.jpg" alt="热血海贼王"/></a></div>
	<div class="game-info">
	<h3><a href="#" target="_blank">热血海贼王</a></h3>
	类型：<span>角色扮演</span><br />
	游戏介绍：<span>超人气动漫页游《热血海贼王》</span><a href="#" class="game-info-in">进入游戏</a></div>
	</div>
    
	<div class="game-home recommend">
	<div class="game-img"><a href="#"><img src="/Upload/game/lsst.jpg" alt="乱世隋唐"/></a></div>
	<div class="game-info">
	<h3><a href="#" target="_blank">乱世隋唐</a></h3>
	类型：<span>战争策略</span><br />
	游戏介绍：<span>以武将为主角以战争为主题的战棋游戏</span><a href="#" class="game-info-in">进入游戏</a></div>
	</div>
    
	<!--loop start-->
	<div class="game-home right recommend">
	<div class="game-img"><a href="#"><img src="/Upload/game/game_hjcs.jpg" alt="悍将传世"/></a></div>
	<div class="game-info"><h3><a href="#" target="_blank">悍将传世</a></h3>类型：<span>角色扮演</span><br />游戏介绍：<span>传承《传奇世界》的经典玩法</span><a href="#" class="game-info-in">进入游戏</a></div>
	</div>
	<!--loop end-->
    
	<!--loop start-->
	<div class="game-home recommend">
	<div class="game-img"><a href="#"><img src="/Upload/game/game_lwzy.jpg" alt="龙纹战域"/></a></div>
	<div class="game-info">
	<h3><a href="#" target="_blank">龙纹战域</a></h3>
	类型：<span>角色扮演</span><br />
	游戏介绍：<span>以人物成长、地图探索为主要游戏玩法</span><a href="#" class="game-info-in">进入游戏</a></div>
	</div>
	
  </div>
</div>
</div>
<!-- 精品推荐 end  -->
</div>
<!-- Main-right End -->
<div class="clear"></div>

</div>
<!-- Main End -->

<script type="text/javascript">
var username = document.getElementById("username");
username.onfocus = function(){
	if (this.value == '邮箱/用户名/手机'){this.value ='';this.style.color ='#000000';}
}
username.onblur = function() {
	if (this.value == ''){ this.value='邮箱/用户名/手机';this.style.color ='#999999'; }
}


var txtpwd = document.getElementById("txtpwd"), pwd = document.getElementById("password");
txtpwd.onfocus = function(){
	if(this.value != "密码") return;
	this.style.display = "none";
	pwd.style.display = "";
	pwd.value = "";
	pwd.focus();
	pwd.style.color ='#000000';
}
pwd.onblur = function() {
	if(this.value != "") return;
	this.style.display = "none";
	txtpwd.style.display = "";
	txtpwd.value = "密码";
	pwd.style.color ='#999999';
}
</script>

<script type="text/javascript">
function checkDo(){
	/* 判断用户名 */
	var username=$.trim($("#username").val());
	if(username=='' || username=='邮箱/用户名/手机'){
		alert('请输入账户名称');
		$("#username").focus();
		return false;
	}


	/* 检测密码 */
	var password=$.trim($("#password").val());
	if(password==''){
		alert('请输入密码.');
		$("#txtpwd").focus();
		return false;
	}
	if(password.length<6 || password.length>16){
		alert('密码长度需要6-16个字符内');
		$("#txtpwd").focus();
		return false;
	}
}
</script>

<script type="text/javascript">

/* 获取游戏数据 */
function ajax_get_game(id,cur){
	$(".game-menu a").each(function(){
		$(this).attr('class', '');
		//$(this).attr('className', '');
	});
	cur.className = 'on';

	$.ajax({
		type: "POST",
		url: "/index.php?m=Game&a=get_games&category_id="+id,
		success: function(data) {
			$("#game-content").html(data);
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

</body>
</html>
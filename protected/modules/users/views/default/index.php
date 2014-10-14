<!DOCTYPE html Public/Home "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>玩机之家</title>
        <meta name="keywords" content="网页游戏,网页游戏平台,最新网页游戏,好玩的网页游戏,页游平台" />
        <meta name="description" content="最新好玩的网页游戏，最热最火最人气的网络页游，玩机之家网页游戏平台致力于为广大中小R及非人民币玩家打造一个口碑最好的游戏空间；精品网页游戏运营策略，年度最牛的网页游戏一个不漏，玩给力页游就上玩机之家平台；不用公会，绿色没有托，玩机之家页游平台目标是成为最受玩家欢迎的一流国际化品牌网页游戏运营商。"
        />
        <link href="/css/Public/Home/Images/style.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="/css/Public/Home/Js/jquery-1.6.2.min.js"></script>
        <script type="text/javascript" src="/css/Public/Home/Js/common.js"></script>
        <!--[if IE 6]>
            <script type="text/javascript" src="/Public/Home/Js/DD_belatedPNG_0.0.8a-min.js">
            </script>
            <script>
                DD_belatedPNG.fix('.pngfix');
                try {
                    document.execCommand("BackgroundImageCache", false, true);
                } catch(err) {};
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
                    include_once(dirname(dirname(__FILE__))."/common/head_nav.php");
                ?>
                <!-- Menu End -->
                <script type="text/javascript" src="/css/Public/Home/Js/myFocus/js/myfocus-2.0.1.min.js"></script>
                <script type="text/javascript" src="/css/Public/Home/Js/myFocus/js/mf-pattern/mF_YSlider.js">
                </script>
                <link href="/css/Public/Home/Js/myFocus/js/mf-pattern/mF_YSlider.css" rel="stylesheet" type="text/css" />
                <script type="text/javascript">
                    //设置
                    myFocus.set({
                        id: 'myFocus',
                        //ID
                        pattern: 'mF_YSlider',
                        //风格
                        txtHeight: '0'
                    });
                </script>
                <!-- Main Start -->
                <div id="main">
                    <!-- Main-left Start -->
                    <div class="main-left">
                        <!-- 会员登录 -->
                        <div class="box box-top home-top-hidden">
                            <form id="form1" name="form1" method="post" action="/users/default/login">
                                <div class="content home-login" id='login_div'>
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
                                            //include_once("./ajax/conn.php");
                                            if( $_COOKIE['name'] != '')
                                            {
                                                /*$sql = "select web_headpic from users where username = '".$_COOKIE['name']."' limit 1";
                                                $result = mysql_query($sql);
                                                $row = mysql_fetch_array($result);*/

                                                $model = Users::model();
                                                //$sql = "select web_headpic from users where username=:username";
                                                //$row = $model->findBySql($sql,array(':username'=>$_COOKIE['name']));
                                                $row = $model->find(array(
                                                    'select'=>'web_headpic',
                                                    'condition'=>'username=:username',
                                                    'params'=>array(':username'=>$_COOKIE['name']),
                                                ));

                                                $web_headpic = $row->web_headpic;
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
																<div class="mtop"><a href="/user/" class="btn">个人中心</a> <a href="/pay/" class="btn">充值</a> <a href="/module/user/logoutdo.php" class="btn">退出</a> </div>                
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
                                <input type="hidden" name="__hash__" value="79b0da765a7430d6114e9e3e352c5810"
                                />
                            </form>
                            <div class="quick-link">
                                <ul>
                                    <?php
                                        if( !isset($_COOKIE['name']) )
                                        {
                                    ?>
                                    <li>
                                        <a href="/user/forgot.php" class="quick-found">
                                            找回密码
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/pay/" class="quick-pay">
                                            充值中心
                                        </a>
                                    </li>
                                    <?php 
                                        } 
                                    ?>
                                </ul>
                                <div class="clear">
                                </div>
                            </div>
                        </div>
                        <!-- 最新开服 -->
                        <!--
                        <div class="box mtop">
                            <div class="switch">
                                <span onmouseover="javascript:showhide(1,2,'new');" class="first on" id="new-1">
                                    最新开服
                                </span>
                                <span onmouseover="javascript:showhide(2,2,'new');" id="new-2">
                                    新服推荐
                                </span>
                            </div>
                            <div class="new-play" id="new-content-1">
                                <div class="today">
                                    今天是：2014年9月28日 星期日
                                </div>
                                <dl>
                                    <dt>
                                        <ul>
                                            <li class="one">
                                                日期
                                            </li>
                                            <li class="two">
                                                时间
                                            </li>
                                            <li class="three">
                                                游戏名称
                                            </li>
                                            <li class="four">
                                                服数
                                            </li>
                                        </ul>
                                        <div class="clear">
                                        </div>
                                    </dt>
                                    <dd style="background:#FFFF99">
                                        <ul>
                                            <li class="one" style="color:red;font-weight:bold;">
                                                09-28
                                            </li>
                                            <li class="two" style="color:red;font-weight:bold;">
                                                23:00
                                            </li>
                                            <li class="three">
                                                <a href="#" target="_blank" style="color:red;font-weight:bold;">
                                                    七杀
                                                </a>
                                                <img src="Public/Home/Images/today.gif" />
                                            </li>
                                            <li class="four">
                                                <a href="javascript:alert('双线164服 09月28日 23:00 即将开启！');" style="color:red;font-weight:bold;">
                                                    164服
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="clear">
                                        </div>
                                    </dd>
                                    <dd class="n" style="background:#FFFF99">
                                        <ul>
                                            <li class="one" style="color:red;font-weight:bold;">
                                                09-28
                                            </li>
                                            <li class="two" style="color:red;font-weight:bold;">
                                                22:00
                                            </li>
                                            <li class="three">
                                                <a href="#" target="_blank" style="color:red;font-weight:bold;">
                                                    武易
                                                </a>
                                                <img src="Public/Home/Images/today.gif" />
                                            </li>
                                            <li class="four">
                                                <a href="javascript:alert('双线304服 09月28日 22:00 即将开启！');" style="color:red;font-weight:bold;">
                                                    304服
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="clear">
                                        </div>
                                    </dd>
                                    <dd style="background:#FFFF99">
                                        <ul>
                                            <li class="one" style="color:red;font-weight:bold;">
                                                09-28
                                            </li>
                                            <li class="two" style="color:red;font-weight:bold;">
                                                21:00
                                            </li>
                                            <li class="three">
                                                <a href="#" target="_blank" style="color:red;font-weight:bold;">
                                                    烈火战神
                                                </a>
                                                <img src="Public/Home/Images/today.gif" />
                                            </li>
                                            <li class="four">
                                                <a href="javascript:alert('双线323服 09月28日 21:00 即将开启！');" style="color:red;font-weight:bold;">
                                                    323服
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="clear">
                                        </div>
                                    </dd>
                                    <dd class="n" style="background:#FFFF99">
                                        <ul>
                                            <li class="one" style="color:red;font-weight:bold;">
                                                09-28
                                            </li>
                                            <li class="two" style="color:red;font-weight:bold;">
                                                21:00
                                            </li>
                                            <li class="three">
                                                <a href="#" target="_blank" style="color:red;font-weight:bold;">
                                                    魅影传说
                                                </a>
                                                <img src="Public/Home/Images/today.gif" />
                                            </li>
                                            <li class="four">
                                                <a href="javascript:alert('双线3服 09月28日 21:00 即将开启！');" style="color:red;font-weight:bold;">
                                                    3服
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="clear">
                                        </div>
                                    </dd>
                                    <dd style="background:#FFFF99">
                                        <ul>
                                            <li class="one" style="color:red;font-weight:bold;">
                                                09-28
                                            </li>
                                            <li class="two" style="color:red;font-weight:bold;">
                                                20:00
                                            </li>
                                            <li class="three">
                                                <a href="#" target="_blank" style="color:red;font-weight:bold;">
                                                    黑暗之光
                                                </a>
                                                <img src="Public/Home/Images/today.gif" />
                                            </li>
                                            <li class="four">
                                                <a href="javascript:alert('双线12服 09月28日 20:00 即将开启！');" style="color:red;font-weight:bold;">
                                                    12服
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="clear">
                                        </div>
                                    </dd>
                                    <dd class="n" style="background:#FFFF99">
                                        <ul>
                                            <li class="one" style="color:red;font-weight:bold;">
                                                09-28
                                            </li>
                                            <li class="two" style="color:red;font-weight:bold;">
                                                20:00
                                            </li>
                                            <li class="three">
                                                <a href="#" target="_blank" style="color:red;font-weight:bold;">
                                                    热血三国2
                                                </a>
                                                <img src="Public/Home/Images/today.gif" />
                                            </li>
                                            <li class="four">
                                                <a href="javascript:alert('双线151服 收复失地 09月28日 20:00 即将开启！');" style="color:red;font-weight:bold;">
                                                    151服
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="clear">
                                        </div>
                                    </dd>
                                    <dd style="background:#FFFF99">
                                        <ul>
                                            <li class="one">
                                                09-28
                                            </li>
                                            <li class="two">
                                                16:00
                                            </li>
                                            <li class="three">
                                                <a href="#" target="_blank">
                                                    热血海贼王
                                                </a>
                                                <img src="Public/Home/Images/today.gif" />
                                            </li>
                                            <li class="four">
                                                <a href="#" target="_blank">
                                                    63服
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="clear">
                                        </div>
                                    </dd>
                                    <dd class="n" style="background:#FFFF99">
                                        <ul>
                                            <li class="one">
                                                09-28
                                            </li>
                                            <li class="two">
                                                15:00
                                            </li>
                                            <li class="three">
                                                <a href="#" target="_blank">
                                                    火影疾风坛
                                                </a>
                                                <img src="Public/Home/Images/today.gif" />
                                            </li>
                                            <li class="four">
                                                <a href="#" target="_blank">
                                                    76服
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="clear">
                                        </div>
                                    </dd>
                                    <dd style="background:#FFFF99">
                                        <ul>
                                            <li class="one">
                                                09-28
                                            </li>
                                            <li class="two">
                                                10:00
                                            </li>
                                            <li class="three">
                                                <a href="#" target="_blank">
                                                    三国魂
                                                </a>
                                                <img src="Public/Home/Images/today.gif" />
                                            </li>
                                            <li class="four">
                                                <a href="#" target="_blank">
                                                    54服
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="clear">
                                        </div>
                                    </dd>
                                    <dd class="n">
                                        <ul>
                                            <li class="one">
                                                09-27
                                            </li>
                                            <li class="two">
                                                23:00
                                            </li>
                                            <li class="three">
                                                <a href="#" target="_blank">
                                                    七杀
                                                </a>
                                            </li>
                                            <li class="four">
                                                <a href="#" target="_blank">
                                                    163服
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="clear">
                                        </div>
                                    </dd>
                                </dl>
                            </div>
                            <div class="content game-right-hot" id="new-content-2" style="display:none">
                                <dl class="first">
                                    <dt>
                                        <a href="#">
                                            <img src="/Upload/game/sjtl.jpg" alt="神将屠龙" width="110" height="68" />
                                        </a>
                                    </dt>
                                    <dt>
                                        <ul>
                                            <li class="one">
                                                <a href="#">
                                                    神将屠龙
                                                </a>
                                            </li>
                                            <li>
                                            </li>
                                            <li>
                                                <a href="" target="_blank" class="game-in">
                                                    进入游戏
                                                </a>
                                            </li>
                                        </ul>
                                    </dt>
                                </dl>
                                <div class="clear">
                                </div>
                                <dl>
                                    <dt>
                                        <a href="#">
                                            <img src="/Upload/game/mycs.jpg" alt="魅影传说" width="110" height="68" />
                                        </a>
                                    </dt>
                                    <dt>
                                        <ul>
                                            <li class="one">
                                                <a href="#">
                                                    魅影传说
                                                </a>
                                            </li>
                                            <li>
                                                双线2服
                                            </li>
                                            <li>
                                                <a href="#" target="_blank" class="game-in">
                                                    进入游戏
                                                </a>
                                            </li>
                                        </ul>
                                    </dt>
                                </dl>
                                <div class="clear">
                                </div>
                                <dl>
                                    <dt>
                                        <a href="#">
                                            <img src="/Upload/game/hazg.jpg" alt="黑暗之光" width="110" height="68" />
                                        </a>
                                    </dt>
                                    <dt>
                                        <ul>
                                            <li class="one">
                                                <a href="#">
                                                    黑暗之光
                                                </a>
                                            </li>
                                            <li>
                                                双线11服
                                            </li>
                                            <li>
                                                <a href="#" target="_blank" class="game-in">
                                                    进入游戏
                                                </a>
                                            </li>
                                        </ul>
                                    </dt>
                                </dl>
                                <div class="clear">
                                </div>
                                <dl>
                                    <dt>
                                        <a href="#">
                                            <img src="/Upload/game/hhzq.jpg" alt="辉煌足球" width="110" height="68" />
                                        </a>
                                    </dt>
                                    <dt>
                                        <ul>
                                            <li class="one">
                                                <a href="#">
                                                    辉煌足球
                                                </a>
                                            </li>
                                            <li>
                                                双线8服
                                            </li>
                                            <li>
                                                <a href="#" target="_blank" class="game-in">
                                                    进入游戏
                                                </a>
                                            </li>
                                        </ul>
                                    </dt>
                                </dl>
                                <div class="clear">
                                </div>
                                <dl>
                                    <dt>
                                        <a href="#">
                                            <img src="/Upload/game/tgzt.jpg" alt="太古遮天2" width="110" height="68" />
                                        </a>
                                    </dt>
                                    <dt>
                                        <ul>
                                            <li class="one">
                                                <a href="#/">
                                                    太古遮天2
                                                </a>
                                            </li>
                                            <li>
                                                双线14服
                                            </li>
                                            <li>
                                                <a href="#" target="_blank" class="game-in">
                                                    进入游戏
                                                </a>
                                            </li>
                                        </ul>
                                    </dt>
                                </dl>
                                <div class="clear">
                                </div>
                            </div>
                        </div>
                        -->
                        <div class="service box box-top mtop">
                            <img src="/css/Public/Home/Images/service.jpg" />
                            <div class="content">
                                <p>
                                    客服邮箱：sognatore#qq.com
                                </p>
                                <p>
                                    公司电话：0592-5567170
                                </p>
                                <!--
                                <p>
                                    投诉邮箱：ts@xmaotian.com
                                </p>
                                <p>
                                    商务合作：phoenix@xmaotian.com
                                </p>
                                <p>
                                    企业 QQ：
                                    <!-- WPA Button Begin -->
                                    <!--
                                    <script type="text/javascript" src="http://static.b.qq.com/account/bizqq/js/wpa.js?wty=1&type=1&kfuin=4008770707&ws=www.77313.com&btn1=%E4%BC%81%E4%B8%9AQQ%E4%BA%A4%E8%B0%88&aty=0&a=&key=%09%60%076%027%058%047S2P%60T%3AT4Qb%0E7%5E0Ra%06h%5D%3B%04%60_6%026%074%040">
                                    </script>
                                    -->
                                    <!-- WPA Button END -->
                                <!--</p>-->
                                <!--
                                <p>
                                    游戏客服：
                                    <script language="javascript" src="/Public/Home/Js/qq.js">
                                    </script>
                                </p>
                                <p>
                                    游戏合作：
                                    <script language="javascript" src="/Public/Home/Js/bizqq.js">
                                    </script>
                                </p>
                                -->
                            </div>
                        </div>
                    </div>
                    <!-- Main-left End -->
                    <!-- Main-right Start -->
                    <div class="main-right">
                        <!-- 广告与新闻 -->
                        <div class="home-box">
                            <div class="home-box-left">
                                <!--焦点图盒子-->
                                <div id="myFocus">
                                    <div class="loading">
                                        <img src="/css/Public/Home/Js/myFocus/img/loading.gif" alt="请稍候..." />
                                    </div>
                                    <!--载入画面(可删除)-->
                                    <div class="pic">
                                        <!--图片列表-->
                                        <ul>
                                            <li>
                                                <a href="#" target="_blank">
                                                    <img src="/Upload/images/mycs.jpg" thumb="" alt="魅影传说" text="" width="395"
                                                    height="288" />
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank">
                                                    <img src="/Upload/images/hazg.jpg" thumb="" alt="黑暗之光" text="" width="395"
                                                    height="288" />
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank">
                                                    <img src="/Upload/images/tgzt.jpg" thumb="" alt="太古遮天2" text="" width="395"
                                                    height="288" />
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank">
                                                    <img src="/Upload/images/fy.jpg" thumb="" alt="风云无双" text="" width="395"
                                                    height="288" />
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank">
                                                    <img src="/Upload/images/ahsj.jpg" thumb="" alt="暗黑世界" text="" width="395"
                                                    height="288" />
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank">
                                                    <img src="/Upload/images/ahxx.jpg" thumb="" alt="暗黑修仙" text="" width="395"
                                                    height="288" />
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank">
                                                    <img src="/Upload/images/qs.jpg" thumb="" alt="七杀" text="" width="395"
                                                    height="288" />
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank">
                                                    <img src="/Upload/images/sgh.jpg" thumb="" alt="三国魂" text="" width="395"
                                                    height="288" />
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank">
                                                    <img src="/Upload/images/wy.jpg" thumb="" alt="武易" text="" width="395"
                                                    height="288" />
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank">
                                                    <img src="/Upload/images/lhzs.jpg" thumb="" alt="烈火战神" text="" width="395"
                                                    height="288" />
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank">
                                                    <img src="/Upload/images/jjsg.jpg" thumb="" alt="街机三国" text="" width="395"
                                                    height="288" />
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank">
                                                    <img src="/Upload/images/hyjft.jpg" thumb="" alt="火影疾风坛" text="" width="395"
                                                    height="288" />
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="home-box-right">
                                <!-- 活动公告 -->
                                <div class="box home-top-hidden">
                                    <div class="switch">
                                        <span onmouseover="javascript:showhide(1,2,'tab');" class="first on" id="tab-1">
                                            活动公告
                                        </span>
                                        <span onmouseover="javascript:showhide(2,2,'tab');" id="tab-2">
                                            新闻资讯
                                        </span>
                                    </div>
                                    <div class="content">
                                        <div class="home-box-news" id="tab-content-1">
                                            <ul>
                                                <li class="first">
                                                    <span>
                                                        <a href="" target="_blank" class="bgnone">
                                                            新闻活动
                                                        </a>
                                                    </span>
                                                    <a href="#" title="免费首冲福利上线，登陆玩机之家账号立即领取" style="color:red">
                                                        免费首冲福利上线，登陆玩机之家账号立即领取
                                                    </a>
                                                </li>
                                                <li>
                                                    <span>
                                                        <a href="fy" target="_blank" class="bgnone">
                                                            风云无双
                                                        </a>
                                                    </span>
                                                    <a href="#" title="《风云无双》9月27日闪断更新公告">
                                                        《风云无双》9月27日闪断更新公告
                                                    </a>
                                                </li>
                                                <li>
                                                    <span>
                                                        <a href="fy" target="_blank" class="bgnone">
                                                            风云无双
                                                        </a>
                                                    </span>
                                                    <a href="#" title="玩机之家《风云无双》9月27日全服补偿公告">
                                                        玩机之家《风云无双》9月27日全服补偿公告
                                                    </a>
                                                </li>
                                                <li>
                                                    <span>
                                                        <a href="fy" target="_blank" class="bgnone">
                                                            风云无双
                                                        </a>
                                                    </span>
                                                    <a href="#" title="9月25日-9月29日风云无双争夺至尊神兵">
                                                        9月25日-9月29日风云无双争夺至尊神兵
                                                    </a>
                                                </li>
                                                <li>
                                                    <span>
                                                        <a href="fy" target="_blank" class="bgnone">
                                                            风云无双
                                                        </a>
                                                    </span>
                                                    <a href="#" title="9月27日【风云无双】轮循活动之千秋剑&白露&天劫&赤火神功大放送">
                                                        9月27日【风云无双】轮循活动之千秋剑&白露&天劫&赤火神功大放送
                                                    </a>
                                                </li>
                                                <li>
                                                    <span>
                                                        <a href="qs" target="_blank" class="bgnone">
                                                            七杀
                                                        </a>
                                                    </span>
                                                    <a href="#" title="《七杀》9月30日合服公告">
                                                        《七杀》9月30日合服公告
                                                    </a>
                                                </li>
                                                <li>
                                                    <span>
                                                        <a href="wy" target="_blank" class="bgnone">
                                                            武易
                                                        </a>
                                                    </span>
                                                    <a href="#" title="《武易》9月29日服务器重组公告">
                                                       《武易》9月29日服务器重组公告
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="home-box-news" id="tab-content-2" style="display:none;">
                                            <ul>
                                                <li class="first">
                                                    <span>
                                                        综合新闻
                                                    </span>
                                                    <a href="#" title="游戏网平台积分系统规则">
                                                        游戏网平台积分系统规则
                                                    </a>
                                                </li>
                                                <li>
                                                    <span>
                                                        七杀
                                                    </span>
                                                    <a href="#" title="《七杀》双线164服于2014-09-28 23:00开启">
                                                        《七杀》双线164服于2014-09-28 23:00开启
                                                    </a>
                                                </li>
                                                <li>
                                                    <span>
                                                        武易
                                                    </span>
                                                    <a href="#" title="《武易》双线304服于2014-09-28 22:00开启">
                                                        《武易》双线304服于2014-09-28 22:00开启
                                                    </a>
                                                </li>
                                                <li>
                                                    <span>
                                                        烈火战神
                                                    </span>
                                                    <a href="#" title="《烈火战神》双线323服于2014-09-28 21:00开启">
                                                        《烈火战神》双线323服于2014-09-28 21:00开启
                                                    </a>
                                                </li>
                                                <li>
                                                    <span>
                                                        魅影传说
                                                    </span>
                                                    <a href="#" title="《魅影传说》双线3服于2014-09-28 21:00开启">
                                                        《魅影传说》双线3服于2014-09-28 21:00开启
                                                    </a>
                                                </li>
                                                <li>
                                                    <span>
                                                        黑暗之光
                                                    </span>
                                                    <a href="#" title="《黑暗之光》双线12服于2014-09-28 20:00开启">
                                                        《黑暗之光》双线12服于2014-09-28 20:00开启
                                                    </a>
                                                </li>
                                                <li>
                                                    <span>
                                                        热血三国2
                                                    </span>
                                                    <a href="#" title="《热血三国2》双线151服 收复失地于2014-09-28 20:00开启">
                                                        《热血三国2》双线151服 收复失地于2014-09-28 20:00开启
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clear">
                            </div>
                        </div>
                        <div class="box-2" style="margin-top:5px;">
                            <div class="bar-2">
                                <a href="/game/" class="ico">
                                </a>
                                <span>
                                    <a href="/game/">
                                        更多...
                                    </a>
                                </span>
                                <a href="/game/" class="jingpin">
                                    精品推荐
                                </a>
                            </div>
                            <div class="box">
                                <div class="sliders-box">
                                    <div class="indent-col-main">
                                        <div class="block-slider">
                                            <div class="anythingslider">
                                                <ul id="slider_list" class="products-grid">
                                                    <li>
                                                        <div class="game-box">
                                                            <dl>
                                                                <dt>
                                                                    <a href="#">
                                                                        <img src="/Upload/game/mycs.jpg" alt="魅影传说" width="195" height="120" />
                                                                    </a>
                                                                </dt>
                                                                <dt class="one">
                                                                    <a href="#" class="game_name">
                                                                        魅影传说
                                                                    </a>
                                                                    <a href="#" target="_blank">
                                                                        官网
                                                                    </a>
                                                                    <span class="split_line">
                                                                        |
                                                                    </span>
                                                                    <a href="#" target="_blank">
                                                                        进入游戏
                                                                    </a>
                                                                </dt>
                                                            </dl>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="game-box">
                                                            <dl>
                                                                <dt>
                                                                    <a href="#">
                                                                        <img src="/Upload/game/201303201449296514.jpg" alt="烈火战神" width="195"
                                                                        height="120" />
                                                                    </a>
                                                                </dt>
                                                                <dt class="one">
                                                                    <a href="#" class="game_name">
                                                                        烈火战神
                                                                    </a>
                                                                    <a href="#" target="_blank">
                                                                        官网
                                                                    </a>
                                                                    <span class="split_line">
                                                                        |
                                                                    </span>
                                                                    <a href="#" target="_blank">
                                                                        进入游戏
                                                                    </a>
                                                                </dt>
                                                            </dl>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="game-box  game-box-right">
                                                            <dl>
                                                                <dt>
                                                                    <a href="#">
                                                                        <img src="/Upload/game/wy.jpg" alt="武易" width="195" height="120" />
                                                                    </a>
                                                                </dt>
                                                                <dt class="one">
                                                                    <a href="#" class="game_name">
                                                                        武易
                                                                    </a>
                                                                    <a href="#" target="_blank">
                                                                        官网
                                                                    </a>
                                                                    <span class="split_line">
                                                                        |
                                                                    </span>
                                                                    <a href="#" target="_blank">
                                                                        进入游戏
                                                                    </a>
                                                                </dt>
                                                            </dl>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bar-2">
                                <a href="/game/" class="ico">
                                </a>
                                <span>
                                    <a href="/game/">
                                        更多...
                                    </a>
                                </span>
                                <a href="/game/">
                                    热门游戏
                                </a>
                            </div>
                            <div class="hot_game_list">
                                <!--loop start-->
                                <div class="game-home hot">
                                    <div class="game-img">
                                        <a href="#">
                                            <img src="Upload/game/game_mycs.jpg" alt="魅影传说" />
                                        </a>
                                    </div>
                                    <div class="game-info">
                                        <h3>
                                            <a href="#" target="_blank">
                                                魅影传说
                                            </a>
                                        </h3>
                                        类型：
                                        <span>
                                            角色扮演
                                        </span>
                                        <br />
                                        游戏介绍：
                                        <span>
                                            三国混战，体验你的魅影就是传说
                                        </span>
                                        <a href="#" class="game-info-in" target="_blank">
                                            进入游戏
                                        </a>
                                    </div>
                                </div>
                                <!--loop end-->
                                <!--loop start-->
                                <div class="game-home right hot">
                                    <div class="game-img">
                                        <a href="#">
                                            <img src="Upload/game/game_hazg.jpg" alt="黑暗之光" />
                                        </a>
                                    </div>
                                    <div class="game-info">
                                        <h3>
                                            <a href="#" target="_blank">
                                                黑暗之光
                                            </a>
                                        </h3>
                                        类型：
                                        <span>
                                            角色扮演
                                        </span>
                                        <br />
                                        游戏介绍：
                                        <span>
                                            3D硬派格杀双端网游，玩法多元
                                        </span>
                                        <a href="#" class="game-info-in" target="_blank">
                                            进入游戏
                                        </a>
                                    </div>
                                </div>
                                <!--loop end-->
                                <!--loop start-->
                                <div class="game-home hot">
                                    <div class="game-img">
                                        <a href="#">
                                            <img src="Upload/game/game_fy.jpg" alt="风云无双" />
                                        </a>
                                    </div>
                                    <div class="game-info">
                                        <h3>
                                            <a href="#" target="_blank">
                                                风云无双
                                            </a>
                                        </h3>
                                        类型：
                                        <span>
                                            角色扮演
                                        </span>
                                        <br />
                                        游戏介绍：
                                        <span>
                                            体验传球、射门、铲断、扑救的激情
                                        </span>
                                        <a href="#" class="game-info-in">
                                            进入游戏
                                        </a>
                                    </div>
                                </div>
                                <!--loop end-->
                                <!--loop start-->
                                <div class="game-home right hot">
                                    <div class="game-img">
                                        <a href="#">
                                            <img src="/Upload/game/game_qs.jpg" alt="七杀" />
                                        </a>
                                    </div>
                                    <div class="game-info">
                                        <h3>
                                            <a href="#" target="_blank">
                                                七杀
                                            </a>
                                        </h3>
                                        类型：
                                        <span>
                                            角色扮演
                                        </span>
                                        <br />
                                        游戏介绍：
                                        <span>
                                            激烈又刺激的对抗，回味精彩的传奇世界
                                        </span>
                                        <a href="#" class="game-info-in">
                                            进入游戏
                                        </a>
                                    </div>
                                </div>
                                <!--loop end-->
                                <!--loop start-->
                                <div class="game-home hot">
                                    <div class="game-img">
                                        <a href="#">
                                            <img src="Upload/game/game_wy.jpg" alt="武易" />
                                        </a>
                                    </div>
                                    <div class="game-info">
                                        <h3>
                                            <a href="#" target="_blank">
                                                武易
                                            </a>
                                        </h3>
                                        类型：
                                        <span>
                                            角色扮演
                                        </span>
                                        <br />
                                        游戏介绍：
                                        <span>
                                            传奇以怀旧为主题，原滋原味地呈现经典PK
                                        </span>
                                        <a href="#" class="game-info-in">
                                            进入游戏
                                        </a>
                                    </div>
                                </div>
                                <!--loop end-->
                                <!--loop start-->
                                <div class="game-home right hot">
                                    <div class="game-img">
                                        <a href="#">
                                            <img src="Upload/game/lhzs.jpg" alt="烈火战神" />
                                        </a>
                                    </div>
                                    <div class="game-info">
                                        <h3>
                                            <a href="#" target="_blank">
                                                烈火战神
                                            </a>
                                        </h3>
                                        类型：
                                        <span>
                                            角色扮演
                                        </span>
                                        <br />
                                        游戏介绍：
                                        <span>
                                            超炫翅膀、独特玩法、丰富副本等您来体验
                                        </span>
                                        <a href="#" class="game-info-in">
                                            进入游戏
                                        </a>
                                    </div>
                                </div>
                                <!--loop end-->
                                <!--loop start-->
                                <div class="game-home hot">
                                    <div class="game-img">
                                        <a href="#">
                                            <img src="Upload/game/game_ahtl.jpg" alt="暗黑屠龙" />
                                        </a>
                                    </div>
                                    <div class="game-info">
                                        <h3>
                                            <a href="#" target="_blank">
                                                暗黑屠龙
                                            </a>
                                        </h3>
                                        类型：
                                        <span>
                                            角色扮演
                                        </span>
                                        <br />
                                        游戏介绍：
                                        <span>
                                            一款暗黑魔幻风格的大型多人在线对战ARPG
                                        </span>
                                        <a href="#" class="game-info-in">
                                            进入游戏
                                        </a>
                                    </div>
                                </div>
                                <!--loop end-->
                                <!--loop start-->
                                <div class="game-home right hot">
                                    <div class="game-img">
                                        <a href="#">
                                            <img src="/Upload/game/game_ahsj.jpg" alt="暗黑世界" />
                                        </a>
                                    </div>
                                    <div class="game-info">
                                        <h3>
                                            <a href="#" target="_blank">
                                                暗黑世界
                                            </a>
                                        </h3>
                                        类型：
                                        <span>
                                            角色扮演
                                        </span>
                                        <br />
                                        游戏介绍：
                                        <span>
                                            暗黑风格RPG2D网游,经典与创新激情碰撞
                                        </span>
                                        <a href="#" class="game-info-in">
                                            进入游戏
                                        </a>
                                    </div>
                                </div>
                                <!--loop end-->
                                <!--loop start-->
                                <div class="game-home hot">
                                    <div class="game-img">
                                        <a href="#">
                                            <img src="Upload/game/jj.jpg" alt="街机三国" />
                                        </a>
                                    </div>
                                    <div class="game-info">
                                        <h3>
                                            <a href="#" target="_blank">
                                                街机三国
                                            </a>
                                        </h3>
                                        类型：
                                        <span>
                                            角色扮演
                                        </span>
                                        <br />
                                        游戏介绍：
                                        <span>
                                            无限爽快、无限欢乐，横版动作游戏
                                        </span>
                                        <a href="#" class="game-info-in">
                                            进入游戏
                                        </a>
                                    </div>
                                </div>
                                <!--loop end-->
                                <!--loop start-->
                                <div class="game-home right hot">
                                    <div class="game-img">
                                        <a href="#">
                                            <img src="Upload/game/sg2.jpg" alt="热血三国2" />
                                        </a>
                                    </div>
                                    <div class="game-info">
                                        <h3>
                                            <a href="#" target="_blank">
                                                热血三国2
                                            </a>
                                        </h3>
                                        类型：
                                        <span>
                                            战争策略
                                        </span>
                                        <br />
                                        游戏介绍：
                                        <span>
                                            经典玩法，全面升级的华丽画面与极速性能
                                        </span>
                                        <a href="#" class="game-info-in">
                                            进入游戏
                                        </a>
                                    </div>
                                </div>
                                <!--loop end-->
                            </div>
                        </div>
                    </div>
                    <!-- Main-right End -->
                    <div class="clear">
                    </div>
                </div>
                <!-- Main End -->
                <!-- Link Start -->
                <div class="box links">
                    <div class="link_title">
                        <strong id="link_tab1" class="link_box cur" onmouseover="link_switch(1)">
                            友情链接
                        </strong>
                        <strong id="link_tab2" class="link_box" onmouseover="link_switch(2)">
                            页游开服表
                        </strong>
                        <strong id="link_tab3" class="link_box" onmouseover="link_switch(3)">
                            媒体合作
                        </strong>
                    </div>
                    <div class="content" id="link1">
                        <a href="#" target="_blank">
                            77313街机三国
                        </a>
                        <a href="#" target="_blank">
                            77313烈火战神
                        </a>
                        <a href="#" target="_blank">
                            77313热血三国2
                        </a>
                        <a href="#" target="_blank">
                            77313武易传奇
                        </a>
                        <a href="#" target="_blank">
                            网页游戏
                        </a>
                        <a href="#" target="_blank">
                            网页游戏
                        </a>
                        <a href="#" target="_blank">
                            最新网页游戏
                        </a>
                        <a href="#" target="_blank">
                            好玩的网页游戏
                        </a>
                        <a href="www.yaoxinfu.com" target="_blank">
                            要新服开服表
                        </a>
                        <a href="http://www.1y2y.com" target="_blank">
                            网页游戏排行榜
                        </a>
                        <a href="http://dtns.15153.com/" target="_blank">
                            刀塔女神官网
                        </a>
                        <a href="http://chuanqi.jschina.com.cn/" target="_blank">
                            网页传奇
                        </a>
                        <a href="http://youxi.longhoo.net/" target="_blank">
                            最新网页游戏
                        </a>
                        <a href="http://kf.91.com" target="_blank">
                            91开服表
                        </a>
                        <a href="http://www.87pk.com/" target="_blank">
                            网页游戏开服表
                        </a>
                        <a href="http://kf.456wy.com/" target="_blank">
                            网页游戏开服表
                        </a>
                        <a href="http://kf.456wy.com/" target="_blank">
                            网页游戏开服表
                        </a>
                        <a href="http://www.shouyousd.com/" target="_blank">
                            手游时代
                        </a>
                        <a href="http://www.52372.com/" target="_blank">
                            52372游戏网
                        </a>
                        <a href="http://www.8477.com/" target="_blank">
                            8477
                        </a>
                        <a href="http://www.988yx.com/" target="_blank">
                            最新网页游戏
                        </a>
                        <a href="http://www.ek6.com/" target="_blank">
                            ek6网页游戏
                        </a>
                        <a href="http://www.kfyouxi.com/" target="_blank">
                            kf游戏网
                        </a>
                        <a href="http://www.114la.com" target="_blank">
                            114啦网址导航
                        </a>
                        <a href="http://kf.264g.com/" target="_blank">
                            264G开服表
                        </a>
                        <a href="http://www.2160.com" target="_blank">
                            网页游戏排行榜
                        </a>
                        <a href="http://www.haowm.com" target="_blank">
                            网页游戏门户网
                        </a>
                        <a href="http://www.juxia.com/" target="_blank">
                            聚侠网页游戏
                        </a>
                        <a href="http://kf.yeyou.com/" target="_blank">
                            页游网
                        </a>
                        <a href="http://www.tuiapp.com" target="_blank">
                            手机应用下载
                        </a>
                        <a href="http://www.7233.com" target="_blank">
                            手机游戏下载
                        </a>
                        <a href="http://www.bloomgamer.com/" target="_blank">
                            游戏日报
                        </a>
                        <a href="http://www.qy400.cn" target="_blank">
                            400电话办理
                        </a>
                        <a href="http://kf.bamuyu.com" target="_blank">
                            网页游戏开服表
                        </a>
                        <a href="http://www.shuiguo.com " target="_blank">
                            水果手游
                        </a>
                        <a href="http://www.119youxi.com" target="_blank">
                            119单机游戏网
                        </a>
                        <a href="http://www.xjwa.net/" target="_blank">
                            新疆娃游戏
                        </a>
                        <a href="http://www.400org.com" target="_blank">
                            400电话
                        </a>
                    </div>
                    <div class="content" id="link2">
                    </div>
                    <div class="content" id="link3">
                    </div>
                </div>
                <!-- Link End -->
                <script type="text/javascript">
                    var username = document.getElementById("username");
                    username.onfocus = function() {
                        if (this.value == '邮箱/用户名') {
                            this.value = '';
                            this.style.color = '#000000';
                        }
                    }
                    username.onblur = function() {
                        if (this.value == '') {
                            this.value = '邮箱/用户名';
                            this.style.color = '#999999';
                        }
                    }

                    var txtpwd = document.getElementById("txtpwd"),
                    pwd = document.getElementById("password");
                    txtpwd.onfocus = function() {
                        if (this.value != "密码") return;
                        this.style.display = "none";
                        pwd.style.display = "";
                        pwd.value = "";
                        pwd.focus();
                        pwd.style.color = '#000000';
                    }
                    pwd.onblur = function() {
                        if (this.value != "") return;
                        this.style.display = "none";
                        txtpwd.style.display = "";
                        txtpwd.value = "密码";
                        pwd.style.color = '#999999';
                    }
                </script>
                <script type="text/javascript">
                    function checkDo() {
                        /* 判断用户名 */
                        var username = $.trim($("#username").val());
                        if (username == '' || username == '邮箱/用户名') {
                            alert('请输入账户名称');
                            $("#username").focus();
                            return false;
                        }

                        /* 检测密码 */
                        var password = $.trim($("#password").val());
                        if (password == '') {
                            alert('请输入密码.');
                            $("#txtpwd").focus();
                            return false;
                        }
                        if (password.length < 6 || password.length > 16) {
                            alert('密码长度需要6-16个字符内');
                            $("#txtpwd").focus();
                            return false;
                        }
                    }
                </script>
                <script type="text/javascript">
                    $(document).ready(function() {
                        $('li.button a').click(function(e) {
                            var dropDown = $(this).parent().next();
                            $('.dropdown').not(dropDown).slideUp('slow');
                            dropDown.slideToggle('slow');
                            e.preventDefault();
                        })
                    });

                    function link_switch(flag) {
                        for (var f = 1; f <= 3; f++) {
                            $("#link" + f).hide();
                            $("#link_tab" + f).removeClass('cur');
                        }
                        $("#link" + flag).show();
                        $("#link_tab" + flag).addClass('cur');

                        if (flag == 2 || flag == 3) {
                            $.get("/index.php/Index/get_link?tid=" + flag,
                            function(data) {
                                var data = eval('(' + data + ')');
                                if (data.status == 1) {
                                    $("#link" + flag).html(data.data);
                                }
                            });
                        }

                    }
                </script>
                <?php
                    include_once(dirname(dirname(__FILE__))."/common/footer.php")
                ?>
            </div>
        </div>
        <!-- TIP START -->
        <!-- TIP END -->
        <!-- 2014.10.08 注释
        <div style="display:none">
            <script language="javascript" type="text/javascript" src="http://js.users.51.la/16723167.js">
            </script>
            <noscript>
                <a href="http://www.51.la/?16723167" target="_blank">
                    <img alt="&#x6211;&#x8981;&#x5566;&#x514D;&#x8D39;&#x7EDF;&#x8BA1;" src="http://img.users.51.la/16723167.asp"
                    style="border:none" />
                </a>
            </noscript>
        </div>
        <script type="text/javascript" src="/Public/Home/Js/weixin.js?t=0623">
        </script>
        <script language="javascript" src="http://bbs.77313.com/actimgs/tingfengzhe.js?t=0623">
        </script>
        -->
        <!--float right-->
        <div id="pop_float_right" style="z-index:9;right:0px;bottom:0; width:120px; height:280px; overflow:hidden;POSITION:fixed;_position:absolute; _margin-top: expression(document.documentElement.clientHeight-this.style.pixelHeight+document.documentElement.scrollTop);display:none;">
            <div style="background-color: #AB0000;font: bold 12px/20px 'arial'; height: 20px;opacity: 0.7;overflow: hidden;position: absolute;right: 0;text-align: center;top: 0; width: 40px;">
                <a target="_self" href="javascript:void(0);" onclick="javascript:remove('pop_float_right');"
                style="color:#FFF;">
                    关闭
                </a>
            </div>
            <a class="tg_link" href="http://www.77313.com/article/view-439.html" target="_blank">
            </a>
            <img src="/Upload/pop/dwj.jpg" />
        </div>
        <!--end float right-->
       
    </body>

</html>
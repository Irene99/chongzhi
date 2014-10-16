<?php
    if( !isset($_COOKIE['name']) )
    {
        header("Location: /users/user/index");
    }
?>
<!DOCTYPE html Public/Home "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>
            充值中心 - 网页游戏平台
        </title>
        <meta name="keywords" content="网页游戏,网页游戏平台,最新网页游戏,好玩的网页游戏,页游平台" />
        <meta name="description" content="最新好玩的网页游戏，最热最火最人气的网络页游，玩机之家网页游戏平台致力于为广大中小R及非人民币玩家打造一个口碑最好的游戏空间；精品网页游戏运营策略，年度最牛的网页游戏一个不漏，玩给力页游就上玩机之家平台；不用公会，绿色没有托，玩机之家页游平台目标是成为最受玩家欢迎的一流国际化品牌网页游戏运营商。"/>
        <link href="/css/Public/Home/Images/style.css?t=0623" rel="stylesheet" type="text/css"
        />
        <script type="text/javascript" src="/css/Public/Home/Js/jquery-1.6.2.min.js?t=0623">
        </script>
        <script type="text/javascript" src="/css/Public/Home/Js/common.js?t=0623">
        </script>
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
            include_once(dirname(dirname(__FILE__)).'/common/topbar.php');
        ?>
        <!-- Topbar End -->
        <div id="Container">
            <div id="warp">
                <!-- Header Start -->
                <div id="header">
                    <div class="logo">
                        <a href="/">
                            <img src="/css/Public/Home/Images/logo.png?v=919" class="pngfix" />
                        </a>
                    </div>
                    <div class="right">
                        <div style="width:625px;height:95px;">
                            <a href="javascript:void();" target="_blank">
                                <img src="/css/Public/Top/images/1411833721.jpg" width="625" height="90" border="0">
                            </a>
                        </div>
                    </div>
                    <div class="clear">
                    </div>
                </div>
                <!-- Header End -->
                <!-- Menu Start -->
                <div id="nav">
                    <div class="menu">
                        <ul>
                            <li class="">
                                <a href="/users/user/index">
                                    网站首页
                                </a>
                            </li>
                            <li class="">
                                <a href="/users/game/index">
                                    游戏大厅
                                </a>
                            </li>
                            <li class="">
                                <a href="/users/user/profile">
                                    用户中心
                                </a>
                            </li>
                            <li class="cur">
                                <a href="/users/pay/index">
                                    充值中心
                                </a>
                            </li>
                            <!--
                            <li class="">
                                <a href="/gift/">
                                    礼包卡
                                </a>
                            </li>
                            -->
                            <li class="">
                                <a href="/service/">
                                    客服中心
                                </a>
                            </li>
                            <!--
                            <li class="">
                                <a href="/article/">
                                    新闻资讯
                                </a>
                            </li>
                            -->
                            <li>
                                <a href="http://bbs.wanjizhijia.com/" target="_blank" class="pngfix bbs">
                                    玩家论坛
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Menu End -->
                <!-- Main Start -->
                <div id="main">
                    <!-- 充值中心 -->
                    <div class="box user">
                        <div class="title">
                            充值中心
                        </div>
                        <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                            <tr>
                                <td class="sidebar">
                                    <!-- <ul>
                                    <li>帐号安全</li>
                                    <li class="icon_4"><a href="/user/security" >安全信息</a></li>
                                    <li class="icon_5"><a href="/user/mobile_verify" >手机绑定</a></li>
                                    <li class="icon_6"><a href="/user/email_verify" >邮箱绑定</a></li>
                                    <li class="icon_7"><a href="/user/password" >修改密码</a></li>
                                    </ul>
                                    -->
                                    <ul>
                                        <li style="font-weight:bold;">
                                            充值中心
                                        </li>
                                        <li class="icon_8">
                                            <a href="/pay" class="chosen">
                                                我要充值
                                            </a>
                                        </li>
                                        <li class="icon_9">
                                            <a href="/pay/aoblog.php">
                                                米币交易明细
                                            </a>
                                        </li>
                                        <li class="icon_10">
                                            <a href="/pay/gamelog.php">
                                                游戏充值记录
                                            </a>
                                        </li>
                                        <li class="icon_11">
                                            <a href="/pay/convert.php">
                                                米币兑换
                                            </a>
                                        </li>
                                    </ul>
                                    <div style="height:100px;">
                                    </div>
                                </td>
                                <td class="body">
                                    <div class="sub-menu">
                                        充值中心
                                        <span>
                                            &gt;
                                        </span>
                                        我要充值
                                    </div>
                                    <!--活动-->
                                    <div class="sub-content">
                                        <form id="form1" name="form1" method="post" action="">
                                            <table width="670" border="0" align="center" cellpadding="5" cellspacing="0">
                                                <tr>
                                                    <td class="font_13 gray_3">
                                                        <img src="/css/Public/Home/Images/ico_ab.jpg" width="14" height="16" />
                                                        您的帐户余额：
                                                        <span class="red">
                                                            <strong>
                                                                0
                                                            </strong>
                                                        </span>
                                                        米币
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td height="50">
                                                        <img src="/css/Public/Home/Images/pay1.gif" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="charge">
                                                        <ul class="content-bg">
                                                            <li style="background:url(/Upload/game/pic.jpg);">
                                                                <a href="/pay/payinfo/gameid/0/modeid/1">
                                                                    <div class="save">
                                                                        傲币 - 进入充值
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <!--
                                                            <li style="background:url(/Upload/game/sjtl.jpg);">
                                                                <a href="/pay/payinfo/gameid/44/modeid/1">
                                                                    <div class="save">
                                                                        神将屠龙 - 进入充值
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li style="background:url(/Upload/game/mycs.jpg);" class="last">
                                                                <a href="/pay/payinfo/gameid/43/modeid/1">
                                                                    <div class="save">
                                                                        魅影传说 - 进入充值
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li style="background:url(/Upload/game/hazg.jpg);">
                                                                <a href="/pay/payinfo/gameid/42/modeid/1">
                                                                    <div class="save">
                                                                        黑暗之光 - 进入充值
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li style="background:url(/Upload/game/hhzq.jpg);">
                                                                <a href="/pay/payinfo/gameid/41/modeid/1">
                                                                    <div class="save">
                                                                        辉煌足球 - 进入充值
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li style="background:url(/Upload/game/tgzt.jpg);" class="last">
                                                                <a href="/pay/payinfo/gameid/40/modeid/1">
                                                                    <div class="save">
                                                                        太古遮天2 - 进入充值
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li style="background:url(/Upload/game/fy.jpg);">
                                                                <a href="/pay/payinfo/gameid/39/modeid/1">
                                                                    <div class="save">
                                                                        风云无双 - 进入充值
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li style="background:url(/Upload/game/xajt.jpg);">
                                                                <a href="/pay/payinfo/gameid/38/modeid/1">
                                                                    <div class="save">
                                                                        笑傲九天 - 进入充值
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li style="background:url(/Upload/game/lwjs.jpg);" class="last">
                                                                <a href="/pay/payinfo/gameid/37/modeid/1">
                                                                    <div class="save">
                                                                        乱舞江山 - 进入充值
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li style="background:url(/Upload/game/ahsj.jpg);">
                                                                <a href="/pay/payinfo/gameid/36/modeid/1">
                                                                    <div class="save">
                                                                        暗黑世界 - 进入充值
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li style="background:url(/Upload/game/ahxx.jpg);">
                                                                <a href="/pay/payinfo/gameid/35/modeid/1">
                                                                    <div class="save">
                                                                        暗黑修仙 - 进入充值
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li style="background:url(/Upload/game/qs.jpg);" class="last">
                                                                <a href="/pay/payinfo/gameid/34/modeid/1">
                                                                    <div class="save">
                                                                        七杀 - 进入充值
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li style="background:url(/Upload/game/sgh.jpg);">
                                                                <a href="/pay/payinfo/gameid/33/modeid/1">
                                                                    <div class="save">
                                                                        三国魂 - 进入充值
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li style="background:url(/Upload/game/sskc.jpg);">
                                                                <a href="/pay/payinfo/gameid/32/modeid/1">
                                                                    <div class="save">
                                                                        死神狂潮 - 进入充值
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li style="background:url(/Upload/game/ahtl.jpg);" class="last">
                                                                <a href="/pay/payinfo/gameid/31/modeid/1">
                                                                    <div class="save">
                                                                        暗黑屠龙 - 进入充值
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li style="background:url(/Upload/game/2014022513363093983.png);">
                                                                <a href="/pay/payinfo/gameid/29/modeid/1">
                                                                    <div class="save">
                                                                        御天 - 进入充值
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li style="background:url(/Upload/game/2014011816464453938.jpg);">
                                                                <a href="/pay/payinfo/gameid/28/modeid/1">
                                                                    <div class="save">
                                                                        神创天下 - 进入充值
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li style="background:url(/Upload/game/2014010712475554443.png);" class="last">
                                                                <a href="/pay/payinfo/gameid/27/modeid/1">
                                                                    <div class="save">
                                                                        动漫英雄传 - 进入充值
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li style="background:url(/Upload/game/2013122314291495221.jpg);">
                                                                <a href="/pay/payinfo/gameid/26/modeid/1">
                                                                    <div class="save">
                                                                        大将军 - 进入充值
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li style="background:url(/Upload/game/2013120615354387141.jpg);">
                                                                <a href="/pay/payinfo/gameid/25/modeid/1">
                                                                    <div class="save">
                                                                        新乱世隋唐 - 进入充值
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li style="background:url(/Upload/game/2013112815194373606.jpg);" class="last">
                                                                <a href="/pay/payinfo/gameid/24/modeid/1">
                                                                    <div class="save">
                                                                        热血战纪 - 进入充值
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li style="background:url(/Upload/game/ns.jpg);">
                                                                <a href="/pay/payinfo/gameid/23/modeid/1">
                                                                    <div class="save">
                                                                        女神联盟 - 进入充值
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li style="background:url(/Upload/game/wy.jpg);">
                                                                <a href="/pay/payinfo/gameid/22/modeid/1">
                                                                    <div class="save">
                                                                        武易 - 进入充值
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li style="background:url(/Upload/game/qh.jpg);" class="last">
                                                                <a href="/pay/payinfo/gameid/20/modeid/1">
                                                                    <div class="save">
                                                                        枪魂 - 进入充值
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li style="background:url(/Upload/game/hyjft.jpg);">
                                                                <a href="/pay/payinfo/gameid/16/modeid/1">
                                                                    <div class="save">
                                                                        火影疾风坛 - 进入充值
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li style="background:url(/Upload/game/gcld.jpg);">
                                                                <a href="/pay/payinfo/gameid/15/modeid/1">
                                                                    <div class="save">
                                                                        攻城掠地 - 进入充值
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li style="background:url(/Upload/game/lwzy.jpg);" class="last">
                                                                <a href="/pay/payinfo/gameid/14/modeid/1">
                                                                    <div class="save">
                                                                        龙纹战域 - 进入充值
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li style="background:url(/Upload/game/wz.jpg);">
                                                                <a href="/pay/payinfo/gameid/13/modeid/1">
                                                                    <div class="save">
                                                                        武尊 - 进入充值
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li style="background:url(/Upload/game/tlcs.jpg);">
                                                                <a href="/pay/payinfo/gameid/10/modeid/1">
                                                                    <div class="save">
                                                                        屠龙传说 - 进入充值
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li style="background:url(/Upload/game/dpqk.jpg);" class="last">
                                                                <a href="/pay/payinfo/gameid/9/modeid/1">
                                                                    <div class="save">
                                                                        斗破乾坤 - 进入充值
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li style="background:url(/Upload/game/jjsg.jpg);">
                                                                <a href="/pay/payinfo/gameid/7/modeid/1">
                                                                    <div class="save">
                                                                        街机三国 - 进入充值
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li style="background:url(/Upload/game/hzw.jpg);">
                                                                <a href="/pay/payinfo/gameid/6/modeid/1">
                                                                    <div class="save">
                                                                        热血海贼王 - 进入充值
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li style="background:url(/Upload/game/2013032014492920002.jpg);" class="last">
                                                                <a href="/pay/payinfo/gameid/5/modeid/1">
                                                                    <div class="save">
                                                                        烈火战神 - 进入充值
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li style="background:url(/Upload/game/2013012110144049485.jpg);">
                                                                <a href="/pay/payinfo/gameid/4/modeid/1">
                                                                    <div class="save">
                                                                        热血三国2 - 进入充值
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li style="background:url(/Upload/game/2012122210513535037.jpg);">
                                                                <a href="/pay/payinfo/gameid/1/modeid/1">
                                                                    <div class="save">
                                                                        乱世隋唐 - 进入充值
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            -->
                                                        </ul>
                                                    </td>
                                                </tr>
                                            </table>
                                            <input type="hidden" name="__hash__" value="113c65da9a717653436571597b7f5031"
                                            />
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <!-- Main End -->
                <script type="text/javascript">
                    // bg+gif
                    $(document).ready(function() {
                        $('.content-bg li').hover(function() {
                            $(".save", this).stop().animate({
                                top: '90px'
                            },
                            {
                                queue: false,
                                duration: 90
                            });
                        },
                        function() {
                            $(".save", this).stop().animate({
                                top: '125px'
                            },
                            {
                                queue: false,
                                duration: 90
                            });
                        });
                    });
                </script>
                <?php
                    include_once(dirname(dirname(__FILE__))."/common/footer.php")
                ?>
            </div>
        </div>
        <!-- TIP START -->
        <!-- TIP END -->
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
        <!--<script type="text/javascript" src="/Public/Home/Js/weixin.js?t=0623"></script>
        <script language="javascript" src="http://bbs.77313.com/actimgs/tingfengzhe.js?t=0623"></script>-->
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
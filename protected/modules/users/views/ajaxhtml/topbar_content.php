<div class="content">
                <div class="notice">
                    <div class="left">
                        <img src="/Public/Home/Images/notice.gif" style="margin-top:5px;" />
                    </div>
                    <ul id="box" class="left">
                        <li>
                            <a href="#" target="_blank" title="《热血三国2》气爽秋高强化忙 悠然十一乐福利">
                                《热血三国2》气爽秋高强化忙 悠然十一乐福利
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" title="玩机之家游戏网平台积分系统上线">
                                玩机之家游戏网平台积分系统上线
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" title="【玩机之家游戏网】论坛发帖有奖活动，兑换游戏币">
                                【玩机之家游戏网】论坛发帖有奖活动，兑换游戏币
                            </a>
                        </li>
                    </ul>
                    <div class="clear">
                    </div>
                </div>
                <div class="right">
                    <ul class="top_ul">
                        <!--
						<li id="all_game_box">
                            <a href="/user/first_pay" class="gbox" title="免费首冲" style="font-weight:bold;color:#F00">
                                <img src="/Public/Home/Images/hot.gif" border="0" />
                                &nbsp;免费首冲
                            </a>
                        </li>
						-->
                        <?php
                        if(!isset($_COOKIE['name']))
                        {
                        ?>
                        <li class="nologin_op">
                            <a href="/" class="toplogin pngfix">
                                登录
                            </a>
                            <span class="splice">
                                |
                            </span>
                            <a href="/module/user/register.php" class="topreg">
                                注册
                            </a>
                        </li>
                        <?php
                        }
                        else{
                        ?>
                            <li style="width:150px;"><a href="/user/" style="font-weight:bold;font-size:14px;"><?php echo $_COOKIE['name']; ?></a>&nbsp;<span>|</span>&nbsp;<a href="/module/user/logoutdo.php">退出</a></li>
                        <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>
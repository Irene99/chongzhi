<?php
setcookie("login",'',time()-3600,"/");
setcookie("name",'',time()-3600,"/");
setcookie("password",'',time()-3600,"/");
setcookie('headpic','',time()-3600,"/");
if( isset($_COOKIE['auto']) ) setcookie("auto",'',time()-3600,'/');
$message = "退出成功";
?>
<!DOCTYPE html Public/Home "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>系统提示_玩机之家网页游戏平台</title>
<link href="/css/Public/Home/Images/pop.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
function jump(){
	top.location.assign('/users/default/index');
}
</script>
</head>
<body>


<div class="message">
<div class="top"><span>系统提示</span><a href="javascript:void(0);" onclick="javascript:jump();" id="close"></a></div>
	<div class="center">
		<div class="main">
			<div class="main-content">
				<div class="left"><a href="/" title="玩机之家网页游戏平台"></a></div>
				<div class="right">
				<h3><?php if( isset($message) ) echo $message ;if(isset($_COOKIE['name'])) echo $_COOKIE['name'];
				 ?></h3>
				<p>
				系统将在 <label>1</label> 秒后自动跳转<br />
				如果您的浏览器没有自动跳转，<a href="javascript:void(0);" onclick="jump();return false;"  title="请点击这里">请点这里</a>
				</p>
				</div>
				<div class="clear"></div>
			</div>
			<div class="pop-game">
			<a href="javascript:void();"><img src="/Upload/images/pop_1.jpg" /></a>
			<a href="javascript:void();"><img src="/Upload/images/pop_2.jpg" /></a>
			</div>

		</div>
	</div>
<div class="bottom"></div>
</div>

<script type="text/javascript">setTimeout(jump,1*1000);</script>
</body>
</html>
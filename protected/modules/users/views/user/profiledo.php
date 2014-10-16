<?php

$current_user = isset($_COOKIE['name'])?$_COOKIE['name']:'';

$province = trim($_POST['province']) ;
$city     = trim($_POST['city']) ;
$sex      = trim($_POST['sex']) ;
$mobile   = trim($_POST['mobile']) ;
$qq       = trim($_POST['qq']) ;
$birth_year = trim($_POST['birth_year']) ;
$birth_month = trim($_POST['birth_month']) ;
$birth_day = trim($_POST['birth_day']) ;
$content = trim($_POST['content']) ; //自我介绍

$location = $province.",".$city ;

//include_once("../../ajax/conn.php");

/*$sql = "update users set location = '".$location."',sex = '".$sex."',phone = '".$mobile."',qq = '".$qq."',birth_year= '".$birth_year."',birth_month = '".$birth_month."',birth_day = '".$birth_day."',content= '".$content."' where username = '".$current_user."' ";
$result = mysql_query($sql);*/

$model = Users::model();
$row = $model->find('username=:username',array(':username'=>$current_user));
$row->location = $location ;
$row->sex      = $sex ;
$row->phone    = $mobile ;
$row->qq       = $qq ;
$row->birth_year = $birth_year ;
$row->birth_month = $birth_month ;
$row->birth_day = $birth_day ;
$row->content = $content ;

$result = $row->save();

if( $result )
{
	$message = "更新成功";
}
else{
	$message = "更新失败";
}
?>
<!DOCTYPE html Public/Home "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>系统提示_玩机之家网页游戏平台</title>
<link href="/css/Public/Home/Images/pop.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
function jump(){
	top.location.assign('/users/user/profile');
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
				<h3><?php if( isset($message) ) echo $message ; ?></h3>
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
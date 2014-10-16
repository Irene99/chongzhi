<?php

$current_user = isset($_COOKIE['name'])?$_COOKIE['name']:"" ;
if( $current_user != '')
{

	$prepassword      = trim($_POST['prepassword']) ;
	$prepassword      = md5($prepassword);
	$password         = trim($_POST['password']) ;
	$password         = md5($password);
	$password_confirm = trim($_POST['password_confirm']) ;

	//include_once("../../ajax/conn.php");

	/*$sql = "select password from users where username = '".$current_user."' limit 1";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
	$old_password = $row['password'] ;*/

	$model = Users::model();
	$row = $model->find('username=:username',array(':username'=>$current_user));
	$old_password = $row->password;

	if( $old_password != $prepassword )
	{
		$message = "更新密码失败,原始密码有误";
	}
	else{
/*		$sql2 = "update users set password = '".$password."' where username = '".$current_user."' ";
		$result2 = mysql_query($sql2);*/

		$row2 = $model->find('username=:username',array(':username'=>$current_user));
		$row2->password = $password;
		$result2 = $row2->save();

		if( $result2 )
		{
			$message = "密码更新成功";
		}
		else{
			$message = "密码更新失败";
		}
	}
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
	top.location.assign('/users/user/password');
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
				<h3><?php if( isset($message) ) echo $message ;?></h3>
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
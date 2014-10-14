<?php

if(isset($_POST['username']) && isset($_POST['password']))
{
	$username = $_POST['username'] ;
	$password = $_POST['password'] ;
	$password = md5($password);
	
	$_POST['remember'] = 0 ;
	$_POST['auto'] = 0;

	//include_once("../../ajax/conn.php");
	$table = "users";

	/*$sql = "select count(id) as count from ".$table." where username = '".$username."' and password = '".$password."' limit 1";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
	$count = $row['count'] ;*/

	$model = Users::model();

	//$row = $model->findByAttributes(array('username'=>$username,'password'=>$password));

	$count = $model->countByAttributes(array('username'=>$username,'password'=>$password));

	if( $count == 1 )
	{

		//$sql = "select headpic from users where username = '".$username."' limit 1";
		/*$result = mysql_query($sql);
		$row = mysql_fetch_array($result);*/
		$sql = "select headpic from users where username=:username";
		$row = $model->findBySql($sql,array(':username'=>$username));

		$headpic = $row->headpic ; //用户头像

		$arr = array('message'=>'登录成功,'.$username.'欢迎你回来!','mark'=>1,'headpic'=>$headpic);
		$message = "登录成功";
		//登录成功，设置cookie

		if( $_POST['auto'] == 1 ) //自动登录勾上，则默认记住密码!
		{
			$_POST['remember'] = 1 ;
			
			setcookie("name",$username,time()+3600*24*7,'/');
			setcookie("password",$password,time()+3600*24*7,'/');
			setcookie("auto",1,time()+3600*24*7,'/');
			setcookie("login",1,time()+3600*24*7,'/');
			setcookie("remember",1,time()+3600*24*7,'/');
			setcookie('headpic',$headpic,time()+3600*24*7,'/');
		}
		else{  //没有自动登录
			if( $_POST['remember'] == 1 ) //记住密码
			{
				setcookie("name",$username,time()+3600*24*7,'/');
				setcookie("password",$password,time()+3600*24*7,'/');
				setcookie("remember",1,time()+3600*24*7,'/');
				setcookie("login",1,0,'/');
				setcookie("auto",'',0,'/');
				setcookie('headpic',$headpic,time()+3600*24*7,'/');
			}
			else{  //没有记住密码,不加过期时间，则为浏览器打开期间生效
				setcookie("name",$username,0,'/');
				setcookie("password",$password,0,'/');
				setcookie("login",1,0,'/');
				setcookie("auto",'',0,'/');
				setcookie('remember','',0,'/'); //再次登录顶掉之前的 记住密码状态
				setcookie('headpic',$headpic,0,'/');
			}
		}


	}
	else{
		$arr = array('message'=>"登录失败,请确认用户名和密码",'mark'=>2);
		$message = "登录失败,请检查用户名和密码";
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
	top.location.assign('/users/default/index');
	//window.location.href("http://www.cz.com/");
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
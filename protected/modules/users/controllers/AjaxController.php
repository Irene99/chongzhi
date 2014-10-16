<?php
class AjaxController extends Controller
{
	//public $layouts = null ;
	public function actionProfiledo()
	{

	}

	public function actionFacedo()
	{
		$current_user = isset($_COOKIE['name'])?$_COOKIE['name']:'';

		if( $current_user != '')
		{
			//include_once("../../ajax/conn.php");
			$img_num = $_POST['num'];
			/*$sql = "update users set web_headpic = '".$img_num."' where username = '".$current_user."'";
			$result = mysql_query($sql);*/

			$model = Users::model();
			$row = $model->find('username=:username',array(':username'=>$current_user));
			$row->web_headpic = $img_num;
			$result = $row->save();

			if( $result )
			{
				$message = "更新用户头像成功";
				$mark = 1;
				$arr = array('message'=>$message,'mark'=>$mark);
			}
			else{
				$message = "更新用户头像失败";
				$mark = 0;
				$arr = array('message'=>$message,'mark'=>$mark);
			}

			echo json_encode($arr);
		}
	}

	public function actionCheckUsername(){

		if( isset($_POST['username']) )
		{
			if($_POST['username'] != '')
			{
				$username = $_POST['username'] ;
				//include_once("../../ajax/conn.php");
/*
				$sql = "select count(id) as count from users where username = '".$username."' limit 1";
				$result = mysql_query($sql);
				$row = mysql_fetch_array($result);
				$count = $row['count'] ;*/

				$model = Users::model();

				$count = $model->count('username=:username',array(':username'=>$username));

				if( $count >= 1)
				{
					$message = "该用户名已经存在,请重新输入";
					$arr = array('message'=>$message,'mark'=>0);
				}
				else{
					$message = "昵称正确";
					$arr = array('message'=>$message,'mark'=>1);
				}
				//mysql_close();
			}

			echo json_encode($arr);
		}

	}

	public function actionCheckEmail(){
		if( isset($_POST['email']) )
		{
			if($_POST['email'] != '')
			{
				$email = $_POST['email'] ;
				//include_once("../../ajax/conn.php");

				/*$sql = "select count(id) as count from users where email = '".$email."'";
				$result = mysql_query($sql);
				$row = mysql_fetch_array($result);
				$count = $row['count'];*/

				$model = Users::model();

				$count = $model->count('email=:email',array(':email'=>$email));

				if( $count >= 1 )
				{
					$message = "该邮箱已经被注册,请重新输入";
					$arr = array('message'=>$message,'mark'=>0);
				}
				else{
					$message = '恭喜你,该邮箱可以注册';
					$arr = array('message'=>$message,'mark'=>1);
				}
				//mysql_close();
			}
			
			echo json_encode($arr);
		}
	}

	public function actionCheckmobile()
	{
		if(isset($_POST['mobile']))
		{
			if($_POST['mobile'] != '')
			{
				$mobile = $_POST['mobile'] ;
				//include_once("../../ajax/conn.php");

				/*$sql = "select count(id) as count from users where phone = '".$mobile."'";
				$result = mysql_query($sql);
				$row = mysql_fetch_array($result);
				$count = $row['count'] ;*/

				$model = Users::model();
				$count = $model->count('phone=:phone',array(':phone'=>$mobile));

				if( $count >= 1)
				{
					$arr = array('mark'=>0);
				}
				else{
					$arr = array('mark'=>1);
				}
			}
			else{
				$arr = array('mark'=>0);
			}
			
			echo json_encode($arr);
		}
	}

	public function actionCheckcardnum(){
		if( isset($_POST['card_num']) )
		{
			if($_POST['card_num'] != '')
			{
				$card_num = trim($_POST['card_num']) ;
				//$flag = isCreditNo($card_num);
				$check = new checkcardnum ;
				$flag = $check->check($card_num);
				if( $flag ) //有效格式的身份证
				{
					//include_once('../../ajax/conn.php');

					/*$sql = "select count(id) as count from users where card_num = '".$card_num."'";
					$result = mysql_query($sql);
					$row = mysql_fetch_array($result);
					$count = $row['count'] ;*/

					$model = Users::model();
					$count = $model->count('card_num=:card_num',array(':card_num'=>$card_num));

					if( $count >= 1 )
					{
						$arr = array('mark'=>0); //已经存在
					}
					else{
						$arr = array('mark'=>1); //合法
					}
					//mysql_close();
				}
				else{
					$arr = array('mark'=>2); //格式不合法
				}
			}
			
			echo json_encode($arr);
		}
	}

	public function actionLogindo()
	{
		$_POST['log_user'] = 'joffrey';
		$_POST['log_pass'] = 'joffrey';

		if( isset($_POST['log_user']) && isset($_POST['log_pass']) )
		{
			$username = $_POST['log_user'] ;
			$password = $_POST['log_pass'] ;
			$password = md5($password);
			
			$_POST['auto'] = 0;

			//include_once("../conn.php");

			$table = "users";

			/*$sql = "select count(id) as count from ".$table." where username = '".$username."' and password = '".$password."' limit 1";
			$result = mysql_query($sql);
			$row = mysql_fetch_array($result);
			$count = $row['count'] ;*/

			$model = Users::model();
			$count = $model->count('username=:username AND password=:password',array(':username'=>$username,':password'=>$password));


			if( $count == 1 )
			{

				/*$sql = "select headpic from users where username = '".$username."' limit 1";
				$result = mysql_query($sql);
				$row = mysql_fetch_array($result);
				$headpic = $row['headpic'] ; //用户头像*/

				$row = $model->find('username=:username',array(':username'=>$username));
				$headpic = $row->headpic;

				$arr = array('message'=>'登录成功,'.$username.'欢迎你回来!','mark'=>1,'headpic'=>$headpic);
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
					setcookie('saved_name',$username,time()+3600*24*7,'/');
				}
				else{  //没有自动登录
					if( $_POST['remember'] == 1 ) //记住密码
					{
						setcookie("name",$username,time()+3600*24*7,'/');
						setcookie("password",$password,time()+3600*24*7,'/');
						setcookie("remember",1,time()+3600*24*7,'/');
						setcookie("login",1,0,'/');
						setcookie("auto",'',time()-3600,'/');
						setcookie('headpic',$headpic,time()+3600*24*7,'/');
						setcookie('saved_name',$username,time()+3600*24*7,'/');
					}
					else{  //没有记住密码,不加过期时间，则为浏览器打开期间生效
						setcookie("name",$username,0,'/');
						setcookie("password",$password,0,'/');
						setcookie("login",1,0,'/');
						setcookie("auto",'',time()-3600,'/');
						setcookie('remember','',time()-3600,'/'); //再次登录顶掉之前的 记住密码状态
						setcookie('headpic',$headpic,0,'/');
						setcookie('saved_name','',0,'/');
					}
				}


			}
			else{
				$arr = array('message'=>"登录失败,请确认用户名和密码",'mark'=>2);
			}

			echo json_encode($arr);

		}
	}

	public function actionLogoutdo()
	{
		if( isset($_POST['action']) )
		{
			$action = $_POST['action'] ;
			if( $action == 'logout' )
			{
				//include_once("../conn.php");

				setcookie('name','',time()-3600,'/');
				setcookie('password','',time()-3600,'/');
				setcookie('remember','',time()-3600,'/');
				setcookie('auto','',time()-3600,'/');
				setcookie('headpic','',time()-3600,'/');
				//setcookie("saved_name",'',time()-3600,'/');
				$arr = array('mark'=>1);
				echo json_encode($arr);
			}
		}
	}

}

?>
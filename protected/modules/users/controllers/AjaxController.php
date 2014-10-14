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

}

?>
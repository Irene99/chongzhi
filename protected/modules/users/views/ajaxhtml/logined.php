<?php
if(isset($_COOKIE['name']))
{
	//include_once("../conn.php");

	/*$sql = "select web_headpic from users where username = '".$_COOKIE['name']."' limit 1";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
*/

  $model = Users::model();
  $row = $model->find('username=:username',array(':username'=>$_COOKIE['name']));
  $web_headpic = $row->web_headpic ;

}
?>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
<tbody><tr>
<td width="35%" valign="top"><img src="/Upload/face/<?php echo $web_headpic; ?>.jpg" width="60" height="60" class="uhead"></td>
<td width="65%" valign="top">
<strong class="font_14"><?php echo $_COOKIE['name']; ?></strong>
				<div class="mtop"><a href="/user/" class="btn">个人中心</a> <a href="/pay/" class="btn">充值</a> <a href="javascript:void();" class="btn">退出</a> </div>                
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
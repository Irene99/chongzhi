// check cookie
function check_cookie(){
	var cookie_arr = document.cookie.split("; ");
	for( var i=0; i < cookie_arr.length; i++ ){
		var cookie = cookie_arr[i].split('=');
		if( cookie[0] === '77313_com_user_id' ){
			return true;
		}
	}
	return false;
}

document.writeln("<style type=\"text/css\">");
document.writeln("#tc_77313_div{width:230px;height:373px;background:url(http://www.77313.com/Public/Tan/77313tc.gif);position:fixed;right:0px;bottom:0px;font-size:12px;z-index:99999;}");
document.writeln("#tc_77313_div .tc_main{position:relative;width:230px;height:392px;}");
document.writeln("#tc_77313_div .tc_close{left:210px;top:35px;position:absolute;display:block;width:20px;height:20px;cursor:pointer;text-indent:999px;overflow:hidden;}");
document.writeln("#tc_77313_div .tc_jingpin{top:78px;left:20px;position:absolute;}");
document.writeln("#tc_77313_div .tc_jingpin ul{list-style:none;margin-left:0px;padding:0px;}");
document.writeln("#tc_77313_div .tc_jingpin li{clear:both;text-align:center;line-height:18px;}");
document.writeln("#tc_77313_div .tc_jingpin li a{text-decoration:none;color:#333;font-size:12px;}");
document.writeln("#tc_77313_div .tc_tuijian{top:320px;left:20px;position:absolute;}");
document.writeln("#tc_77313_div .tc_tuijian ul{list-style:none;margin-left:0px;padding:0px}");
document.writeln("#tc_77313_div .tc_tuijian li{height:20px;line-height:20px;}");
document.writeln("#tc_77313_div .tc_tuijian li span{float:left;display:block;}");
document.writeln("#tc_77313_div .tc_tuijian li span a{text-decoration:none;font-size:12px;color:#333;}");
document.writeln("#tc_77313_div .tc_tuijian li span.time{width:50px;font-weight:bold;color:red;}");
document.writeln("#tc_77313_div .tc_tuijian li span.tc_server{width:70px;}");
document.writeln("#tc_77313_div .tc_tuijian li span.game{width:60px;}");
document.writeln("</style>");
document.writeln("<div id=\"tc_77313_div\">");
document.writeln("<div class=\"tc_main\">");
document.writeln("<div class=\"tc_close\" onclick=\"document.getElementById(\'tc_77313_div\').style.display=\'none\';\">x</div>");
document.writeln("<div class=\"tc_jingpin\">");
document.writeln("<ul>");

if( check_cookie() ){
		document.writeln("<li><a href=\"http://fy.77313.com/?gameEnter=true\" target=\"_blank\"><img src=\"http://www.77313.com/Public/Tan/jingpin/fy.png\" width=\"186\" height=\"80\" border=\"0\" /></a></li>");
	document.writeln("<li><a href=\"http://ahsj.77313.com/\" target=\"_blank\">攻占无双城尽享PK乐趣</a></li>");
}else{
		document.writeln("<li><a href=\"http://fy.77313.com\" target=\"_blank\"><img src=\"http://www.77313.com/Public/Tan/jingpin/fy.png\" width=\"186\" height=\"80\" border=\"0\" /></a></li>");
	document.writeln("<li><a href=\"http://ahsj.77313.com/\" target=\"_blank\">攻占无双城尽享PK乐趣</a></li>");
}

if( check_cookie() ){
	document.writeln("<li><a href=\"http://hazg.77313.com/?gameEnter=true\" target=\"_blank\"><img src=\"http://www.77313.com/Public/Tan/jingpin/hazg.jpg\" width=\"186\" height=\"80\" border=\"0\" /></a></li>");
	document.writeln("<li><a href=\"http://hazg.77313.com/?gameEnter=true\" target=\"_blank\">最新双线1服，3D硬派格杀双端网游</a></li>");
}else{
	document.writeln("<li><a href=\"http://hazg.77313.com/\" target=\"_blank\"><img src=\"http://www.77313.com/Public/Tan/jingpin/hazg.jpg\" width=\"186\" height=\"80\" border=\"0\" /></a></li>");
	document.writeln("<li><a href=\"http://hazg.77313.com/\" target=\"_blank\">最新双线1服，3D硬派格杀双端网游</a></li>");
}


document.writeln("</ul>");
document.writeln("</div>");
document.writeln("");
document.writeln("<div class=\"tc_tuijian\">");
document.writeln("<ul>");
document.writeln("<li>");
document.writeln("<span class=\"time\">20:00</span>");
document.writeln("<span class=\"tc_server\"><a href=\"http://sg2.77313.com/play.php?domain=s151\" target=\"_blank\">双线151服</a></span>");
document.writeln("<span class=\"game\"><a href=\"http://sg2.77313.com/play.php?domain=s151\" target=\"_blank\">热血三国2</a></span>");
document.writeln("</li>");
document.writeln("<li>");
document.writeln("<span class=\"time\">20:00</span>");
document.writeln("<span class=\"tc_server\"><a href=\"http://hazg.77313.com/play.php?domain=s12\" target=\"_blank\">双线12服</a></span>");
document.writeln("<span class=\"game\"><a href=\"http://hazg.77313.com/play.php?domain=s12\" target=\"_blank\">黑暗之光</a></span>");
document.writeln("</li>");
document.writeln("</ul>");
document.writeln("</div>");
document.writeln("</div>");
document.writeln("</div>");

var pop_float_left = '<div id="pop_float_left" style="z-index:9;left:0px;bottom:0; width:158px; height:211px;background:url(http://www.77313.com/Public/Home/Images/weixin77313.png);_background:url(http://www.77313.com/Public/Home/Images/weixin77313.png);overflow:hidden;POSITION:fixed;_position:absolute; _margin-top: expression(document.documentElement.clientHeight-this.style.pixelHeight+document.documentElement.scrollTop);cursor:pointer;" onclick="window.open(\'http://down.aotian.com/2014/07/DivineComedy_aotian_1.19.1_07081553.apk\')"><a style="height:20px;overflow:hidden;position:absolute;right:10px;top:8px;width:20px;display:block;" href="javascript:void(0);" onclick="javascript:closewx(\'pop_float_left\');"></a></div>'

document.write(pop_float_left);

function closewx(obj){
	document.getElementById(obj).style.display='none';
}


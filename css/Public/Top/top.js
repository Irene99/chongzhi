//check cookie
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

if( check_cookie() ){
	document.writeln("<a href=\"http://lhzs.77313.com/?gameEnter=true\" target=\"_blank\"><img src=\"http://www.77313.com/Public/Top/images/1411833721.jpg\" width=\"625\" height=\"90\" border=\"0\" /></a>");
}else{
	document.writeln("<a href=\"http://lhzs.77313.com/\" target=\"_blank\"><img src=\"http://www.77313.com/Public/Top/images/1411833721.jpg\" width=\"625\" height=\"90\" border=\"0\" /></a>");
}
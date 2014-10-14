window.onload=init;
function init(){
	var o=document.getElementById('box');
	window.setInterval(function(){scrollup(o,16,0);},4000); 
}
//JS单行新闻滚动
function scrollup(o,d,c){
	if(d==c){
		var t=getFirstChild(o.firstChild).cloneNode(true);
		o.removeChild(getFirstChild(o.firstChild));
		o.appendChild(t);
		t.style.marginTop="0px";
	}else{
		c+=2;
		getFirstChild(o.firstChild).style.marginTop=-c+"px";
		window.setTimeout(function(){scrollup(o,d,c)},20);
	}
}
function getFirstChild(node){
  while (node.nodeType!=1)
  {
   	  node=node.nextSibling;
  }
  return node;
}
//end

//加入收藏夹
function AddFavorite(sURL, sTitle){
	try{
		window.external.addFavorite(sURL, sTitle);
	}
	catch (e)
	{
		try
		{
			window.sidebar.addPanel(sTitle, sURL, "");
		}
		catch (e)
		{
			alert("加入收藏失败，请使用Ctrl+D进行添加");
		}
	}
}

//设为首页
function SetHome(obj,vrl){
	try{
			obj.style.behavior='url(#default#homepage)';obj.setHomePage(vrl);
	}
	catch(e){
			if(window.netscape) {
					try {
							netscape.security.PrivilegeManager.enablePrivilege("UniversalXPConnect"); 
					} 
					catch (e) { 
							alert("此操作被浏览器拒绝！\n请在浏览器地址栏输入“about:config”并回车\n然后将[signed.applets.codebase_principal_support]设置为'true'"); 
					}
					var prefs = Components.classes['@mozilla.org/preferences-service;1'].getService(Components.interfaces.nsIPrefBranch);
					prefs.setCharPref('browser.startup.homepage',vrl);
			 }
	}
}


function showhide(a,b,obj){

	for(i=1;i<=b;i++){
		//alert("#"+obj+'-content-'+i);
		$("#"+obj+'-content-'+i).hide();
		$("#"+obj+'-'+i).removeClass('on');
	}

	$("#"+obj+'-content-'+a).show();
	$("#"+obj+'-'+a).addClass('on');

} 
//移除对像
function remove(o){
    $('#'+o).remove();
}
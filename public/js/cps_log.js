// JavaScript Document
var logUa=window.navigator.userAgent.toLowerCase();






//$(function(){
//	cpslog([701]);
//})











function getBrowser(){
	//1是ios  2是android 3其他
	if (/iphone|ipad|ipod/.test(logUa)) {
		return 1;
	} else if (/android|adr/.test(logUa)) {
		return 2;
	}else{
		return 3;
	}
}

function getAmbient(){
	//1微信  2qq  3其他
	if (/micromessenger/.test(logUa)) {
		return 1;
	} else if (/\sqq\//.test(logUa)) {
		return 2;
	}else{
		return 3;
	}
}

function getPageName(){
	//当前页面name  无就返回''   
	var logPathname = window.location.pathname,spname='';
	if(logPathname.length>1){
		spname = logPathname.substring(logPathname.lastIndexOf('/')+1,logPathname.length);
	}
	return spname;
}

//判断网络链接环境
function checkConnection(ua){
	var arra = ['wifi','4g','3g','2g'];
	for(var check in arra){
		if(ua.indexOf(arra[check]) > -1){
			return arra[check];
		}
	}
	return 'other'
}


//cpslog([701]);
//cpslog([702,{map},zone]);
//cpslog([703,{map},event]);

//function cpslog(arr){
//	var logPathname = window.location.pathname.toLowerCase();
//	var logUserId = $.fn.cookie("user_id");
//	var logUaCookie = $.fn.cookie("visitor");
//	var logAdminId = document.domain;
//	var logsearch = window.location.search;
//	var snetwork = checkConnection(logUa);
//	logsearch = logsearch.substring(1,logsearch.length);
//	var logData={
//		tag:arr[0],
//		'theme':theme,
//		"uid":logUserId || '',
//		"openid":$.fn.cookie("openid")||'',
//		"vt":$.fn.cookie("visitor")||'',
//		'os':getBrowser(),
//		'page':logPathname,
//		"ctx":getAmbient(),
//		"host": document.domain,
//		'admin_id':$.fn.cookie('agent_id')?$.fn.cookie('agent_id'):($.fn.cookie('channel_id')||''),
//		'channel_id':$.fn.cookie('channel_id')||'',
//		'agent_id':$.fn.cookie('agent_id')||'',
//		'referral_id':commont.getQueryString('referral_id', logsearch, '&'),
//		"map":{}
//	}
//	if(logData.tag == 701 && logData.page=='/index/book/chapter' && arr.length < 2){
//		return false;
//	}
//	
//	if(logData.tag==702){
//		logData['zone']=arr[2];
//	}
//	
//	if(logData.tag==703){
//		logData['event']=arr[2];
//	}
//	for(var logkey in arr[1]){
//		logData[logkey] = arr[1][logkey];
//	}
//	logData.network = snetwork;
//	var sLogData = JSON.stringify(logData);
//	//var sWifiUrl = 'https://logh5.ishugui.com/logh5pd.php?json=' + encodeURIComponent(sLogData);
//	//alert(window.log_host);
//	$.ajax({
//		url:window.log_host+'/h5cps.php?json=' + encodeURIComponent(sLogData),
//		type:'post',
//		success:function(data){}
//	});
//}

















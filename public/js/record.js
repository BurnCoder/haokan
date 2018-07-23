var nIndex=2,sBookstop=true,sBookstopTime=null,pagesize=20;


$(function(){
	
	$(window).scroll(function(){
		var nWinH =  document.documentElement.clientHeight;
		var nScrollTop = (document.body.scrollTop || document.documentElement.scrollTop) + nWinH;
		var nBodyScrollH = document.body.scrollHeight;
		if(sBookstop && nBodyScrollH - nScrollTop < 240){
			bookstoptime();
			$('.loading_box').html('<span>玩命加载中......</span>').show();
            $.ajax({
                type: 'post',
                url: window.location.pathname,
                timeout: 10000,
                cache: false,
                data: {
					pagesize:pagesize,
					pageNo:nIndex
				},
                success: function (data) {
					clearTimeout(sBookstopTime);
                    if (typeof data == 'string') {
                        data = JSON.parse(data);
                    }
					console.log(data);
					var sLi = '';
					for(var i=0; i<data.length; i++){
						sLi += '<li>\
							<a href="javascript:;">\
								<div class="rrr_li_txt">\
									<div class="rrr_li_txt_tit"><strong>' + data[i]['type_text'] + '</strong><span>' + data[i]['showItem'] + '</span></div>\
									<div class="rrr_li_txt_p"><strong>有效期至：' + data[i]['endDate'] + '</strong></div>\
								</div>\
							</a>\
						</li>'
					}
					$('.rrr_list_ul').append(sLi);
					nIndex ++;
					if(data.length < pagesize){
						$('.loading_box').html('<span>已显示全部</span>').show();
						sBookstop = false;
					}else{
						$('.loading_box').html('<span>下拉加载更多</span>').show();
						sBookstop = true;
					}
					
                },
                error: function (XMLHttpRequest, textStatus, errorThrown) {
                    if (typeof XMLHttpRequest == 'object') {
                        XMLHttpRequest = fRead.jsonstringify(XMLHttpRequest);
                    }
                }
			});
		}
	});
});





//防止重复请求数据
function bookstoptime() {
	clearTimeout(sBookstopTime);
	sBookstop = false;
	sBookstopTime = setTimeout(function () {
		sBookstop = true;
	}, 3000);
}























































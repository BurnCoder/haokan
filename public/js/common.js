var ac_filename = window.location.pathname;
ac_filename = ac_filename.split('/').pop();
ac_filename = ac_filename && ac_filename!='index' ? '_'+ac_filename : '';
var ac_val = parseInt($.fn.cookie('ac_val')) || 0;

$(function () {
    //返回
    $('.head_return_page_but').click(function () {
        window.history.go(-1);
    });

    //菜单
    $('.pop_up_menu_box > i, .head_menu_but').click(function () {
        $('.head_menu_but').toggleClass('head_menu_but_open');
        $('.pop_up_menu_box').toggleClass('pop_up_menu_show');
    });
	
	//关闭弹框
	$('.christmas_close_2,.christmas_main_but').click(function(){
		ac_val += 1;
		$('.christmas_popup_box').remove();
		$.fn.cookie('ac_val',ac_val,{expires: 0.33, path: '/'});
	});
	
	//活动弹框次数
	var ac_type = $('.christmas_popup_box').data('type');
	if(ac_val >= 4 || ac_type != 1){
		$('.christmas_popup_box').remove();
	}else{
		ac_val += 1;
		$('.christmas_popup_box').show();
		$.fn.cookie('ac_val',ac_val,{expires: 0.33, path: '/'});
	}
});

var commont = {
    /**
     * 切割参数
     * @param sname string 要获取的参数
     * @param str string 被切割的字符
     * @param smark string 用于切割字符
     * @returns {string}
     */
    getQueryString: function (sname, str, smark) {
        str = str ? str : window.location.search;
        smark = smark ? smark : '&';
        if (sname) {
            var c_start = str.indexOf(sname + "=");
            if (c_start != -1) {
                c_start = c_start + sname.length + 1;
                var c_end = str.indexOf(smark, c_start);
                if (c_end == -1) c_end = str.length;
                return decodeURIComponent(str.substring(c_start, c_end));
            }
        }
        return "";
    }
};
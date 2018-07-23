// JavaScript Document
var removeBook = true;

$(function(){
	//编辑最近阅读
	$('.r_img_edit_open').click(function(){
		$('.r_img_list_box').addClass('r_img_list_edit');
	});
	
	//取消编辑最近阅读
	$('.r_img_edit_close').click(function(){
		$('.r_img_list_box').removeClass('r_img_list_edit');
	});
	
	//选中要删除的book
	$('.r_img_list_box').on('click','.r_img_list_edit .r_img_ul a',function(e){
		var $this=$(this),booknum=0;
		$this.toggleClass('r_img_remove_select');
		booknum=$('.r_img_remove_select').length;
		$('.r_book_num em').text('已选中'+booknum+'本');
		if(booknum<=0){
			$('.r_img_list_box').removeClass('r_img_list_edit_remove');
		}else{
			$('.r_img_list_box').addClass('r_img_list_edit_remove');
		}
		
		//不要删 阻止点击a标签跳转
		e.stopPropagation();
		return false;
	});
	
	//确认删除最近阅读
	$('.r_img_edit_remove').click(function(){
		var orma = $('.r_img_remove_select');
		var armbid = [];
		var allblen = parseInt($('.r_book_num strong').attr('totalnum'));
		var ntotalnum = allblen - orma.length;
		for(var i=0; i<orma.length; i++){
			armbid.push($('.r_img_remove_select').eq(i).parent().attr('sbid'));
		}
		if(armbid.length <= 0){
			return false;
		}
		armbid=JSON.stringify(armbid);
		if(removeBook){
			removeBook = false;
			$.ajax({
				type: 'post',
				url: '/api/user/delRecently',
				timeout: 10000,
				cache: false,
				data: {
					bookIds:armbid
				},
				success: function (data) {
					removeBook = true;
					if(data.err==0){
						$('.r_img_remove_select').parent().remove();
						//删除完成显示取消按钮
						$('.r_img_list_box').removeClass('r_img_list_edit_remove');

						//选中删除的多少本
						$('.r_book_num em').text('已选中0本');
						//共多少本
						$('.r_book_num strong').text('共' + data.totalNum + '本');
						$('.r_book_num strong').attr('totalnum',data.totalNum);

						//删除成功请求下一页
						if(sBookstop){
							bookstoptime();
							loadingList();
						}
						//小于4本 显示为你推荐
						if(data.totalNum<4){
							$('.r_img_list_other').show();
						}
						if(data.totalNum<=0){
							$('.r_img_list_box').remove();
							$('.content_null_box').show();
						}
						consoleMain('删除成功');

					}else{
						consoleMain('删除失败,请稍后重试');
					}
				},
				error: function (XMLHttpRequest, textStatus, errorThrown) {
					consoleMain('删除失败,请稍后重试');
					removeBook = true;
				}
			});
		}

	});

	scroll(function(direction) {
		if(direction=='down'){
			$('body').removeClass('fixednav');
		}else{
			if(afterScrollTop>100) {
				$('body').addClass('fixednav');
			}else{
				$('body').removeClass('fixednav');
			}
		}
	});
	
})


//滚动滚轮
var afterScrollTop=0;
function scroll( fn ) {
	var beforeScrollTop = $(window).scrollTop(),
		fn = fn || function() {};
	$(window).scroll(function() {
		afterScrollTop = $(window).scrollTop();
		var delta = afterScrollTop - beforeScrollTop;
		if( delta === 0 ) return false;
		fn( delta > 0 ? "down" : "up" );
		beforeScrollTop = afterScrollTop;
	});
}

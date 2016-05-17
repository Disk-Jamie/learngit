
//快速滚动到顶部
function bodyIsScrollTop(isIndex){
	var floatImgs = $('#floatImgs');
	if(floatImgs.length<=0){
		$('body').append('<a class="floatImgs" id="floatImgs" href="javascript:scroll(0,0)"></a>');
		floatImgs = $('#floatImgs');
	}
	
	var WindowWdith = $('body').width();
	WindowWdith = (WindowWdith-850)/2+1000;
	floatImgs.css({'left':WindowWdith,'position':'fixed','bottom':'0px'});
	var footer = $("#Footer"),body = $("body");
	//绑定向下滚动显示快速向上按钮
	$(window).scroll(function () {
		var pos_ts = $(document).scrollTop();
		if( pos_ts >= 30 ) {
			floatImgs.css('display',"block");
		} else {
			floatImgs.css('display',"none");
			return;
		}
		var footerfootertop = footer.offset().top
		var footer_height=footer.height();
		var W_HEIGHT = $(window).height();
		var floatImgs_height=floatImgs.height();

		var document_height = $(document).height();
		
		if( pos_ts + W_HEIGHT > document_height - floatImgs_height - footer_height ){
			var bottom = W_HEIGHT + pos_ts - footerfootertop;
			if(bottom<0) bottom = 0;
			floatImgs.css({position:"fixed",bottom:bottom});
		}else{
			floatImgs.css({position:"fixed",bottom:0});
		}
	});	
}


// 登录弹框的开和关
window.userIsLogin_ajaxlock = false;
window.userIsLogin_ajaxhandle = null;
//调起登陆框
function loginPan(){
	$('.login_op').css('display','block');
	//触发起请求
	window.userIsLogin_ajaxlock = true;
}

$(function(){
	$('.logoBtn a').on('click', function(e) {
		e.preventDefault();
		loginPan();
	});

	// 关闭
	$('.login_win_close_wrap a').click(function(e){
		e.preventDefault();
		$('.login_op').css('display','none');
		window.userIsLogin_ajaxlock = false;
	});
});
  
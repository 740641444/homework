
$(document).ready(function(){
	$(".zmr_navboxright ul li").hover(function(){
		$(this).removeClass().addClass("zmr_navboximg0"+($(this).index()+1))
	},function(){
		$(this).removeClass().addClass("zmr_navboximg1"+($(this).index()+1))
	})
})

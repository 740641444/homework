$(document).ready(function(){
	$(".zmr_bannerbottom ul li").hover(function(){
		$(".zmr_bannerbottom ul li").removeClass()
		$(".zmr_bannerbox ul li").removeClass().eq($(this).index()).addClass("zmr_bannerboxxian")
		$(this).addClass("zmr_bannerbottomxian")
		
	},function(){
		
	})

	$(".zmr_floorbox ul li").hover(function(){
		$(this).removeClass().addClass("zmr_floor1"+($(this).index()+1))
	},function(){
		$(this).removeClass().addClass("zmr_floor0"+($(this).index()+1))
	})


})



$(document).ready(function(){	
	
	
//退出登陆	
$(".zmr_dlsuc_r>span").eq(0).click(function(){
	location.href="index.html"
})	
	
	
var delid=window.location.search
delid=delid.slice(4)

ajax({
	url:"php/editfabu.php",
	datatype:"json",
	data:{id:delid},
	success:function(e){
		$(".zmr_biaoti>span").text(e.title)
		$(".zmr_catbox>p").text(e.text)
	}
})



	
})

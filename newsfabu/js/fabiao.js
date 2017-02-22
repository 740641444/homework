$(document).ready(function(){
//退出
$(".zmr_dlsuc_r>span").eq(0).click(function(){
	location.href="index.html"
})	



//发表文章
$(".btn").eq(0).click(function(){
	var title=$("#title").val();
	var text=$("#text").val();
	var date=new Date()
	var data=date.getMonth()+1+"月"
	data+=date.getDate()+"日  "
	data+=date.getHours()+":"
	data+=date.getMinutes()
	ajax({
		url:"php/fabiao.php",
		data:{title:title,text:text,data:data},
		success:function(e){
			if(e){
				location.href="show.html"
			}
		}
	})
})

//修改部分
var delid=window.location.search
delid=delid.slice(4)
if(delid){
	$(".btn").eq(1).css("display","block");
	ajax({
		url:"php/editfabu.php",
		datatype:"json",
		data:{id:delid},
		success:function(e){
			$("#title").val(e.title)
			$("#text").val(e.text)
		}
	})
}else{
$(".btn").eq(0).css("display","block");
}


//修改文章
$(".btn").eq(1).click(function(){
	
	var title=$("#title").val();
	var text=$("#text").val();
	ajax({
		url:"php/editfabu01.php",
		data:{title:title,text:text,id:delid},
		success:function(e){
			if(e){
				location.href="show.html"
			}
		}
	})
})



})

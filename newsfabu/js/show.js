$(document).ready(function(){
	
	
//文章的获取
ajax({
	url:"php/select.php",
	datatype:"json",
	success:function(e){
		for(var i in e){
			var str="";
			str+="<ul id="+e[i].id+">";
			str+="<li><div class='zmr_del'>删</div><div class='zmr_edit'>改</div>"+e[i].title+"</li>";
			str+="<li>"+e[i].data+"</li>";
			str+="</ul>";
			$(".zmr_catbox").eq(0).append(str);
		}
	}
})	

//单机阅读
$(".zmr_catbox").eq(0).delegate("ul","click",function(){
	var id=$(this).attr("id");
	location.href="yuedu.html?id="+id;
})

	
	
//退出登陆	
$(".zmr_dlsuc_r>span").eq(0).click(function(){
	location.href="index.html"
})	
	
	
//发表点击
$(".zmr_dlsuc_l").eq(0).children().children().eq(0).click(function(){
	location.href="fabiao.html"
})
	
	

//删除点击	
$(".zmr_dlsuc_l").eq(0).children().children().eq(1).click(function(){
	$(".zmr_catbox").eq(0).undelegate("ul","click")
	$(".zmr_edit").css("display","none")
	$(".zmr_del").css("display","block")
	$(this).parent().children().last().css("display","block")
	$(".zmr_del").each(function(index){
		$(this).parent().parent().on("click",function(){
			var delid=$(this).attr("id");
			var that=this
			ajax({
				url:"php/delfabu.php",
				data:{id:delid},
				success:function(e){
					if(e){
						$(that).remove()
					}
				}
			})
		})
    })
})


	
//修改点击	
$(".zmr_dlsuc_l").eq(0).children().children().eq(2).click(function(){
	$(".zmr_catbox").eq(0).undelegate("ul","click")
	$(".zmr_del").css("display","none")
	$(".zmr_edit").css("display","block")
	$(this).parent().children().last().css("display","block")
		$(".zmr_del").each(function(index){
		$(this).parent().parent().on("click",function(){
			var editid=$(this).attr("id");
			console.log(editid)
            location.href="fabiao.html?id="+editid
		})
    })
})	

//退出修改删除点击
$(".zmr_dlsuc_l").eq(0).children().children().eq(3).click(function(){
	$(".zmr_edit").css("display","none")
	$(".zmr_del").css("display","none")
	$(this).css("display","none")
})	
	
//单机阅读
$(".zmr_catbox").eq(0).delegate("ul","click",function(){
	var id=$(this).attr("id");
	location.href="yuedu.html?id="+id;
})


	
})

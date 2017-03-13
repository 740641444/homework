$(function(){
//组织浏览器默认事件
$(".zmr_bgbox").mousedown(function (e) {
    e.preventDefault();
});	
var num=0;
var next=0;
function bgmove(){
	next++;
	if(next>=$(".zmr_bgbox").size()){
		next=0;
	}
	$(".zmr_bgbox").eq(num).animate({opacity:0},1000);
	$(".zmr_bgbox").eq(next).animate({opacity:1},1000);
	num=next;
}

var t1=setInterval(bgmove,4000);


$("input").each(function(){
	$(this).focus(function(){
	    bgmove()
    })
})


//注册检测
var flag=[0,0,0];
var zhanghaojiance=/^[a-z||A-Z]\w{5,9}$/;
var mimajiance=/^[a-z||A-Z]\w{5,9}$/;

$("#name").blur(function(){
	var nameresult=zhanghaojiance.test($("#name").val())
	if(nameresult==false){
		$("span").eq(0).text("请按要求输入").css("color","coral")
		flag[0]=0;
	}else if(nameresult){
		var zhucename=$(this).val()
		var that=this;
		$.ajax({
			url:"index.php?a=nameyz",
			type:"post",
			data:{name:zhucename},
			success:function(e){
				if(e==1){
					$("span").eq(0).text("对不起，该用户名已被注册").css("color","coral")
					flag[0]=0;
				}else{
					$("span").eq(0).text("恭喜您，该用户名可以使用").css("color","springgreen")
					flag[0]=1;
				}
			}
		})
	}
})
$("#name").focus(function(){
	$("span").eq(0).text("请输入以字母开头6到10位账号").css("color","coral")
})

$("#password").blur(function(){
	var mimaresult=mimajiance.test($("#password").val())
	if(mimaresult==false){
		$("span").eq(1).text("请按要求输入").css("color","coral")
		flag[1]=0;
	}else if(mimaresult){
        $("span").eq(1).text("恭喜您，该密码可以使用").css("color","springgreen")
        flag[1]=1;
	}
})
$("#password").focus(function(){
	$("span").eq(1).text("请输入以字母开头6到10位账号").css("color","coral")
})

$("#password2").blur(function(){
	var mimaval=$("#password").val();
	var querenval=$(this).val()
	if(mimaval==querenval){
		if(querenval==""){
			$("span").eq(2).text("密码不能为空").css("color","coral")
			flag[2]=0;
		}else{
			$("span").eq(2).text("恭喜您输入正确").css("color","springgreen")
			flag[2]=1;
		}
	}else{
        $("span").eq(2).text("两次输入不一致，请重新输入").css("color","coral")
        flag[2]=0;
	}
})
$("#password2").focus(function(){
	$("span").eq(2).text("请输入以字母开头6到10位账号").css("color","coral")
})


$("#sub").on("click",function(){
	for(var i in flag){
		if(flag[i]==0){
			alert("请填写正确的注册信息");
			return;
		}
	}
	$(this).prop("type","submit")
})

})

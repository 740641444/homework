$(document).ready(function(){
	

	
var denglu=document.querySelectorAll(".zmr_header>ul>li");

var zhe=document.querySelectorAll(".zmr_zhe")[0];
var dengluka=document.querySelectorAll(".zmr_top");
var denglux=document.querySelectorAll(".zmr_top_e");

var name=document.querySelectorAll(".name");
var mima=document.querySelectorAll(".mima");
var queren=document.querySelectorAll(".queren");
var btn=document.querySelectorAll(".btn");

//登陆出现消失

for(var i=0;i<denglu.length;i++){
	denglu[i].aa=i
	denglux[i].aa=i
	denglu[i].onclick=function(){
		zhe.style.display="block";
		dengluka[this.aa].style.display="block";
//		name[this.aa].focus();
		if(this.aa==0){
			$(".zmr_top_e_r>span").eq(0).text("请输入用户名").css("color","#CCCCCC").prev().val("");
			$(".zmr_top_e_r>span").eq(1).text("请输入密码").css("color","#CCCCCC").prev().val("");
		}else if(this.aa==1){
			$(".zmr_top_e_r>span").eq(2).text("请输入以字母开头6到10位账号").css("color","#CCCCCC").prev().val("");
			$(".zmr_top_e_r>span").eq(3).text("请输入以字母开头6到10位密码").css("color","#CCCCCC").prev().val("");
			$(".zmr_top_e_r>span").eq(4).text("请确认密码").css("color","#CCCCCC").prev().val("");
			$(".zmr_top_e_r>span").eq(5).text("请输入许可口令").css("color","#CCCCCC").prev().val("");
		}
	}	
	denglux[i].onclick=function(){
		zhe.style.display="none";
		dengluka[this.aa].style.display="none";		
	}
}

//注册检测
var flag=[0,0,0,0];
var zhanghaojiance=/^[a-z||A-Z]\w{5,9}$/;
var mimajiance=/^[a-z||A-Z]\w{5,9}$/;

$(".name").eq(1).blur(function(){
	var nameresult=zhanghaojiance.test($(".name").eq(1).val())
	if(nameresult==false){
		$(this).next().text("请按要求输入").css("color","red")
		flag[0]=0;
	}else if(nameresult){
		var zhucename=$(this).val()
		var that=this;
		ajax({
			url:"php/zhucenamejiance.php",
			data:{name:zhucename},
			success:function(e){
				if(e==1){
					$(that).next().text("对不起，该用户名已被注册").css("color","red")
					flag[0]=0;
				}else{
					$(that).next().text("恭喜您，该用户名可以使用").css("color","green")
					flag[0]=1;
				}
			}
		})
	}
})
$(".name").eq(1).focus(function(){
	$(this).next().text("请输入以字母开头6到10位账号").css("color","deepskyblue")
})

$(".mima").eq(1).blur(function(){
	var mimaresult=mimajiance.test($(".mima").eq(1).val())
	if(mimaresult==false){
		$(this).next().text("请按要求输入").css("color","red")
		flag[1]=0;
	}else if(mimaresult){
        $(this).next().text("恭喜您，该密码可以使用").css("color","green")
        flag[1]=1;
	}
})
$(".mima").eq(1).focus(function(){
	$(this).next().text("请输入以字母开头6到10位账号").css("color","deepskyblue")
})

$(".queren").eq(0).blur(function(){
	var mimaval=$(".mima").eq(1).val();
	var querenval=$(this).val()
	if(mimaval==querenval){
		if(querenval==""){
			$(this).next().text("密码不能为空").css("color","red")
			flag[2]=0;
		}else{
			$(this).next().text("恭喜您输入正确").css("color","green")
			flag[2]=1;
		}
	}else{
        $(this).next().text("两次输入不一致，请重新输入").css("color","red")
        flag[2]=0;
	}
})
$(".queren").eq(0).focus(function(){
	$(this).next().text("请输入以字母开头6到10位账号").css("color","deepskyblue")
})

$(".kouling").eq(0).blur(function(){
	var koulingval=$(this).val()
	if(koulingval==110){
		$(this).next().text("恭喜您，口令正确").css("color","green")
		flag[3]=1;
	}else{
        $(this).next().text("请与管理员联系获得口令").css("color","red")
        flag[3]=0;
	}
})
$(".kouling").eq(0).focus(function(){
	$(this).next().text("请您输入许可口令").css("color","deepskyblue")
})

$("#zcbtn").on("click",function(){
	for(var i in flag){
		if(flag[i]==0){
			alert("请填写正确的注册信息")
			return
		}
	}
	var name=zhucename=$(".name").eq(1).val();
	var mima=$(".mima").eq(1).val();
	var kouling=$(".kouling").eq(0).val();
    ajax({
    	url:"php/zhuce.php",
    	data:{name:name,mima:mima,ssh:kouling},
    	success:function(e){
    		if(e){
    			$(".zmr_top_suc>span").eq(0).text("恭喜您！注册成功")
    			$(".zmr_top").css("display","none").eq(2).css("display","block");
    			var num=3;
    			$(".zmr_top_suc>span").eq(3).click(function(){
    				$(".zmr_top").eq(2).css("display","none");
    				$(".zmr_zhe").eq(0).css("display","none");
    			})     			
    			var t1=setInterval(function(){
    				num--
    				$(".zmr_top_suc>span").eq(1).text(num)
    				if(num==0){
    					clearInterval(t1);
    					$(".zmr_top_suc>span").eq(1).text(3)
    					$(".zmr_top").eq(2).css("display","none");
    					$(".zmr_zhe").eq(0).css("display","none");
    				}
    			},1000)
    			
    		}
    	}
    })
})



//登陆
var dlname=0;
var dlmima=0;
$(".name").eq(0).blur(function(){
    dlname=$(this).val()
    $(this).next().text("")
})
$(".name").eq(0).focus(function(){
	$(this).next().text("请输入您的用户名").css("color","deepskyblue")
	$(".zmr_top_e_d").find("li:last-of-type").css("display","none")
})
$(".mima").eq(0).blur(function(){
    dlmima=$(this).val()
    $(this).next().text("")
})
$(".mima").eq(0).focus(function(){
	$(this).next().text("请输入您的密码").css("color","deepskyblue")
	$(".zmr_top_e_d").find("li:last-of-type").css("display","none")
})
$("#dlbtn").click(function(){
	ajax({
		url:"php/denglu.php",
		data:{name:dlname,mima:dlmima},
		success:function(e){
			if(e){
    			$(".zmr_top_suc>span").eq(0).text("恭喜您！登陆成功")
    			$(".zmr_top_suc>span").eq(1).text(3)
    			$(".zmr_top").css("display","none").eq(2).css("display","block");
    			$(".zmr_top_suc>span").eq(3).click(function(){
    				$(".zmr_top").eq(2).css("display","none");
    				$(".zmr_zhe").eq(0).css("display","none");
    				location.href="show.html";
    			})     	
    			var num01=3;
    			var t1=setInterval(function(){
    				num01--
    				$(".zmr_top_suc>span").eq(1).text(num01)
    				if(num01==0){
    					clearInterval(t1);
    					$(".zmr_top").eq(2).css("display","none");
    					$(".zmr_zhe").eq(0).css("display","none");
    					location.href="show.html";
    				}
    			},1000)
    			
			}else{
				$(".zmr_top_e_d").find("li:last-of-type").css("display","block")
			}
		}
	})
})






//文章的获取
ajax({
	url:"php/select.php",
	datatype:"json",
	success:function(e){
		for(var i in e){
			var str="";
			str+="<ul id="+e[i].id+">";
			str+="<li>"+e[i].title+"</li>";
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




	
})

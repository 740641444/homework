<?php
    session_start();
    if(empty($_SESSION["flag"])){
        echo "<script>alert('请登录');location.href='landpage.html';</script>";
        exit;
    }
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Document</title>
	<script src="../js/jquery.min.js"></script>
<style>
	
.zmr_landbox{
	width: 500px;height: 250px;
	padding: 50px 0;
	position: absolute;
	top: 2%;left: 2%;
	margin: auto auto;
	/*border: 1px solid #000;*/
	text-align: center;
	line-height: 30px;
}
form>span{
	color: #CCCCCC;
}	
</style>
<script>

$(function(){
	
function panduan(flag){
	for(var i in flag){
		if(flag[i]==0){
			$("#btn").attr("disabled","true");
			return
		}
	}
	$("#btn").removeAttr("disabled");
}
	var flag=[0,0];
	//用户名检测
	var namejiance=/^[a-z||A-Z]\w{5,9}$/;
	var name="";
	$("#name").focus(function(){
	    $("span").eq(0).css("color","deeppink")
	    var that=this;
    	$(document).keyup(function(){
		    name=$(that).val()
	    	if(namejiance.test(name)){
	    		$("span").eq(0).html("账号可用").css("color","green")
			    $(that).blur(function(){
			    	$.ajax({
			    		url:"selectzc.php",
			    		data:{name:name},
			    		type:"POST",
			    		success:function(e){
			    			if(e){
			    				$("span").eq(0).html("账号已存在").css("color","red")
			    				flag[0]=0
			    			}else{
			    				flag[0]=1
			    				$("span").eq(0).html("账号可用").css("color","green")
			    				panduan(flag)
			    			}
			    		}
			    	})
			    })	    		
	    	}else{
	    		$("span").eq(0).html("账号不可用").css("color","red")
	    		flag[0]=0
	    	}
    	})	
    	
	})	
//	密码检测
	$("#password").focus(function(){
	    $("span").eq(1).css("color","deeppink")
	    var that=this;
    	$(document).keyup(function(){
		    name=$(that).val()
	    	if(namejiance.test(name)){
	    		flag[1]=1
	    		$("span").eq(1).html("密码可用").css("color","green")	
	    		panduan(flag)
	    	}else{
	    		$("span").eq(1).html("密码不可用").css("color","red")
	    		flag[1]=0
	    		panduan(flag)
	    	}
    	})	
	})

        

	
})

	
</script>
	</head>
	<body>

<div class="zmr_landbox">
	<h2>请添加用户</h2>
	<form action="adduserinfo.php" method="post">
		用户账号：<input type="text" id="name" name="name" value="" /><br />
		<span>请输入账号</span><br />
		用户密码：<input type="password" id="password" name="password" value="" /><br />
		<span>请输入密码</span><br />
		<input type="submit" disabled="" id="btn" value="注册" /><br />
	</form>
</div>

	</body>
</html>
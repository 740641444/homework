<?php

    include "session.php";
    include "db.php";
    include "function.php";		


?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Document</title>
	<script src="../js/jquery.min.js"></script>
<style>
	
	#title{
		width: 400px;
	}
	textarea{
		width: 400px;
		height: 300px;
	}
	
.weizhi{
	position: absolute;
	top: 20px;right: 100px;	
}		
.yulan{
	width: 400px;
	height: 400px;
	position: relative;
	border: 1px solid #000;
}
.tiao{
	width: 100%;height: 30px;
	position: absolute;
	bottom: 0;
	left: 0;
}	
.tiaohong{
	background-color: red;
	height: 100%;
	width: 10%;
}		
#tu{
	width: 100%;height: 100%;
}
			
	
	
</style>

</head>
<body>
	
	
	<form action="addshowinfo.php" method="get">
		内容所在目录：<select name="pid" id="">
		<?php
			$aa=new abc();
		
			$aa->tree(0,"-",$db,"category");
            echo $aa->str;
		?>
		</select><br />
		标题：<br />
		<input type="text" id="title" name="title" value="" /><br />
		<div class="weizhi">
			<input type="file" name="file" id="file" value="" />
			<div class="yulan">
				
				<img id="tu" src=""/>
				<div class="tiao">
					<div class="tiaohong"></div>
				</div>
			</div>
		</div>	
		内容：<br />
		<textarea name="text" rows="" cols=""></textarea><br />
		<input type="submit" name="sub" value="发表"/>
		<input type="hidden" name="imgurl" id="imgurl" value="" />
	</form>
</body>
</html>
<script>
	





//url:传输地址
//inputObj:file对象
//progressObj:进度条对象
//imgObj:预览图对象
//this.loadStart()执行之前可以做的事
//callback()执行成功后可以做的事
function  upload(url,inputObj,progressObj,imgObj){
	//初始化file对象
    var inputObj=inputObj||{};
    if(inputObj.nodeName=="INPUT"){
        this.inputObj=inputObj;
    }else if(typeof inputObj=="string"){
        this.inputObj=document.querySelector(inputObj);
    }
    //初始化进度条对象
    var progressObj=progressObj||{};
    if(progressObj.nodeName=="DIV"){
        this.progressObj=progressObj;
    }else if(typeof progressObj=="string"){
        this.progressObj=document.querySelector(progressObj);
    }
    //初始化预览图片对象
    var imgObj=imgObj||{};
    if(imgObj.nodeName=="IMG"){
        this.imgObj=imgObj;
    }else if(typeof imgObj=="string"){
        this.imgObj=document.querySelector(imgObj);
    }
    //判断文件类型、大小
    this.type=["jpeg","jpg","png","gif"];
    this.size=1024*1024*20;
    this.uploadName="file";
    this.url=url;
    this.loadStart=function(){
    	
    }
}
upload.prototype={
	//被调用后开始函数
    up:function(callback){
    	//判断是否传入url
        if(this.url){
            this.callback=callback;
            this.getCon();
        }else{
            alert("请指定路径");
        }
    },
    getCon:function(){
        var that=this;
        //file发生改变后触发的事件
        this.inputObj.onchange=function(){
            that.data=this.files[0];
            //h5新标签,读取文件的对象信息
            var read=new FileReader();
            read.onload=function(e){
            	//当read载入完毕后，把触发这个节点的事件结果，给了预览图的src，可以出现预览图
                that.imgObj.src=e.target.result;
            }
            //将read的信息用URL的方式读取出来
            read.readAsDataURL(that.data);
            //判断文件是否符合要求，符合要求后开始上传file
            if(that.check()){
                that.upfile();
            }
        }
    },
    check:function(){
        var that=this;
        var data=that.data;
        var size=data.size;
        //获取文件类型
        var extname=data.name.substr(data.name.lastIndexOf(".")+1).toLowerCase();
        if(size>that.size){
            alert("文件太大");
            return false;
        }
        var flag=false;
        for(var i=0;i<that.type.length;i++){
            if(that.type[i]==extname){
                flag=true;
                break;
            }
        }
        if(!flag){
            alert("格式不符")
            return false
        }
        //返回true，文件符合传输条件
        return true;
    },
    //符合 传输条件后，开始上传文件
    upfile:function(){
        var that=this;
        var ajax=new XMLHttpRequest();
        //h5,用new创建表单对象
        var form=new FormData();
        form.append(this.uploadName,this.data);
        
        //上传之前执行的函数
        ajax.upload.onloadstart=function(){
        	that.loadStart();
        }
        
        //显示上传进度条
        ajax.upload.onprogress=function(e){
        	//total:文件总大小
        	//loaded:上传部分大小
        	//scale:上传部分所占百分比
            var total=e.total;
            var loaded=e.loaded;
            var scale=loaded/total*100;
            that.progressObj.style.width=scale+"%";
        }
        //当ajax成功后,获取返回值并传给回调函数
        ajax.onload=function(){
        	if(that.callback){
        		that.callback(ajax.response);
        	}else{
        		return;
        	}
        }
        //发送ajax
        ajax.open("post",this.url);
        ajax.send(form);
    }
}

var inputobj=document.querySelector("#file")
var tiaohong=document.querySelector(".tiaohong")
var yulan=document.querySelector("#tu")
var obj=new upload("addshowimg.php",inputobj,tiaohong,yulan)
obj.up(function(e){
	$("#imgurl").val(e);
	console.log($("#imgurl").val())
})


	
</script>
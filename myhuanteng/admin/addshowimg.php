<?php


$fileInfo=$_FILES["file"];
//判断是否是一个上传文件
if(is_uploaded_file($fileInfo["tmp_name"])){
	//判断是否有'upload'文件夹,没有就创建
	if(!file_exists("../images/img")){
		mkdir("../images/img",0777,true);
	}
	//判断是否有'upload'之下的日期文件夹,没有就创建
	$dirname=date("y-m-d");
	if(!file_exists("../images/img/".$dirname)){
		mkdir("../images/img/".$dirname,0777,true);
	}
	//将文件名字加上时间戳
	$fileInfo=time().$fileInfo["name"];
	//存图片的相对地址
	$path="../images/img/".$dirname."/".$fileInfo;
	move_uploaded_file($_FILES["file"]["tmp_name"],$path);
	echo "../myhuanteng/images/img/".$dirname."/".$fileInfo;
}


?>
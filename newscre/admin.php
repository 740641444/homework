<?php
    session_start();
    if(empty($_SESSION["flag"])){
        echo "<script>alert('请登录');location.href='landpage.html';</script>";
        exit;
    }
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<!--<link rel="stylesheet" type="text/css" href="css/public.css"/>-->
		<script src="js/jquery.min.js"></script>
<style>
*{
	box-sizing: border-box;
}
html,body{
	width: 100%;height: 100%;
	padding: 0;margin: 0;
}
.zmr_header{
	border-bottom: 1px solid #000;
	text-align: center;
	height:20%;
	line-height: 100px;
	font-size: 30px;
}

.zmr_main{
	height: 80%;
}
.zmr_left{
	float: left;
	width: 20%;height: 100%;
	border-right: 1px solid #000;	
}
.zmr_right{
	float: left;
	width: 80%;height: 100%;
}
.zmr_right>iframe{
	width: 100%;height: 100%;
}
.zmr_left>ul>li{
	cursor: pointer;
}
</style>
<script>
$(function(){
	
	
$(".zmr_left>ul>li>span").click(function(){
	$(this).next().toggle(100)
})	


})

	
</script>
	</head>
	<body>
<div class="zmr_header">欢迎来到内容管理系统</div>
<div class="zmr_main">
	<div class="zmr_left">
		<ul>
			<li><span>用户管理</span>
				<ul>
					<li><a href="" target="right">添加用户</a></li>
					<li><a href="" target="right">管理用户</a></li>					
				</ul>
			</li>
			<li><span>分类管理</span>
				<ul>
					<li><a href="php/addcategory.php" target="right">添加分类</a></li>
					<li><a href="php/guanlicategory.php" target="right">管理分类</a></li>					
				</ul>
			</li>
			<li><span>内容管理</span>
				<ul>
					<li><a href="php/addshow.php" target="right">添加内容</a></li>
					<li><a href="php/guanlishow.php" target="right">管理内容</a></li>					
				</ul>
			</li>
		</ul>
	</div>
	<div class="zmr_right">
		<iframe src="" frameborder="0" name="right">
			
		</iframe>
	</div>
</div>
	</body>
</html>

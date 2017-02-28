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
		<script src="../js/jquery.min.js"></script>
<style>
*{
	box-sizing: border-box;
}
html,body{
	width: 100%;height: 100%;
	padding: 0;margin: 0;
	overflow-y: hidden;
}
.zmr_header{
	border-bottom: 1px solid #000;
	height:20%;width: 100%;
	background: url(../images/cms/01.png);
	background-size: 100%  100%;
	position: relative;
}
.zmr_header>span{
	width:400px;height: 30px;
	text-align: center;
	font-size: 30px;
	position: absolute;
	top: 0;bottom: 0;left: 0;right: 0;
	margin: auto;
}
.zmr_header>.zmr_exit{
	width: 220px;
	float: right;
	position: absolute;
	bottom: 0;right: 0;
	line-height: 30px;
}

.zmr_main{
	height: 80%;
}
.zmr_left{
	float: left;
	width: 20%;height: 100%;
	border-right: 1px solid #000;	
	background: url(../images/cms/01.png);
	background-size: 100% 100%;
}
.zmr_right{
	float: left;
	width: 80%;height: 100%;
	background: url(../images/cms/01.png);
	background-size: 100% 100%;
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
<div class="zmr_header">
	<span>欢迎来到内容管理系统</span>
	<div class="zmr_exit">如果您要离开，请点击<a href="exit.php">退出</a></div>
</div>
<div class="zmr_main">
	<div class="zmr_left">
		<ul>
			<li><span>用户管理</span>
				<ul>
					<li><a href="adduser.php" target="right">添加用户</a></li>
					<li><a href="guanliuser.php" target="right">管理用户</a></li>					
				</ul>
			</li>
			<li><span>分类管理</span>
				<ul>
					<li><a href="addcategory.php" target="right">添加分类</a></li>
					<li><a href="guanlicategory.php" target="right">管理分类</a></li>					
				</ul>
			</li>
			<li><span>内容管理</span>
				<ul>
					<li><a href="addshow.php" target="right">添加内容</a></li>
					<li><a href="guanlishow.php" target="right">管理内容</a></li>					
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

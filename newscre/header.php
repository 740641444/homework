<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Document</title>
	<script src="js/jquery.min.js"></script>
<style>
	
ul,li{
	margin: 0;padding: 0;
	list-style: none;
}
.header{
	width: 1200px;height: 200px;
	margin: 0 auto;
	border: 1px solid #000;
	font-size: 50px;
	text-align: center;
	line-height: 200px;
	background: url(images/bg.jpg);
	background-position: auto auto;
}
.zmr_nav{
	width: 1200px;
	height: 50px;
	background-color: #C7C5C5;
    margin: 20px auto;
}

.zmr_nav>ul>li{
	float: left;
	height: 50px;line-height: 50px;
	/*padding: 0 15px;*/
	text-align: center;
	width: 150px;
	cursor: pointer;
}
.zmr_nav>ul>li:hover{
	color: #fff;
	background-color: purple;
}

.zmr_nav>ul>li>ul{
	position: relative;
	display: none;
}
.zmr_nav>ul>li>ul>li{
	height: 50px;line-height: 50px;
	padding: 0 15px;
	text-align: center;
	background-color: #C7C5C5;
	border-bottom: 1px solid #FFF;
	color: #000;
}
.zmr_nav>ul>li>ul>li:hover{
	color: #fff;
	background-color: plum;
}
.zmr_nav>ul>li>ul>li>a{
	text-decoration: none;
	color: #000;
}
.zmr_nav>ul>li>ul>li>a:hover{
	text-decoration: none;
	color: #fff;
}
a{
	display: block;
	width: 100%;height: 100%;
}

#index{
	text-decoration: none;
	color: #000;
}
#index:hover{
	text-decoration: none;
	color: #fff;
}

	
</style>
<script>
$(function(){
	
	$(".zmr_nav>ul>li").hover(function(){
		$(this).find("ul").toggle();
	},function(){
		$(this).find("ul").toggle();
	})	

	
})

	
</script>
</head>
<body>
	<div class="header"></div>
	<div class="zmr_nav">
		<ul>
			<li><a id="index" href="index.php">首页</a></li>
			<?php
			    include "php/db.php";
			    $sql="select * from category where pid='0'";
			    $result=$db->query($sql);
			    while($row=$result->fetch_assoc()){
			    	?>
					<li><?php echo $row["cname"] ?>
					    <ul>
					    	<?php $sql2="select * from category where pid=".$row["id"];
					    	    $result2=$db->query($sql2);	
					    	    while($row2=$result2->fetch_assoc()){
					    	    	?><li><a href="category.php?pid=<?php echo $row['id'] ?>"><?php echo $row2["cname"]?></a></li><?php
					    	    }
					    	?>
					    </ul>
					</li>			    	
			    	<?php
			    }	
		    ?>

		</ul>
	</div>
	
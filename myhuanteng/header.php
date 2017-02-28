<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>

<link href="css/mycss/header.css" rel="stylesheet" type="text/css" />
<link href="css/mycss/public.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/myjs/header.js"></script>
	</head>
	<body>

<div class="zmr_headertop">
	<div class="zmr_headertopcenter">
		<div class="zmr_headertopleft">
			<div class="dian"></div><div>欢迎进入本网站!</div>
		</div>
		<div class="zmr_headertopright">
			<ul>
				<li><img src="images/myimages/header/icon01.png"/><a href="index.php">设为首页</a></li>
				<li><img src="images/myimages/header/icon02.png"/><a href="#">加入收藏</a></li>
				<li><img src="images/myimages/header/icon03.png"/><a href="#">联系我们</a></li>
			</ul>
		</div>
	</div>
</div>
	
<div class="zmr_nav">
	<div class="zmr_navbox">
		<div class="zmr_navboxleft"><img src="images/myimages/header/logo.png"/></div>
		<div class="zmr_navboxright">
			<ul>
				<?php
				include "admin/db.php";
				$sql="select * from category";
				$result=$db->query($sql);
				$str="";
				$i=0;
				while($row=$result->fetch_assoc()){
					$i++;
					if ($i==1){$str.="<li class='zmr_navboximg11'><a href='index.php'></a></li>";}
					elseif ($i==2){$str.="<li class='zmr_navboximg12'><a href='list.php?id={$row['id']}'></a></li>";}
					elseif ($i==3){$str.="<li class='zmr_navboximg13'><a href='list_xinwen.php?id={$row['id']}'></a></li>";}
					elseif ($i==4){$str.="<li class='zmr_navboximg14'><a href='list_chanpin.php?id={$row['id']}'></a></li>";}
					elseif ($i==5){$str.="<li class='zmr_navboximg15'><a href='list.php?id={$row['id']}'></a></li>";}
					elseif ($i==6){$str.="<li class='zmr_navboximg16'><a href='list_zaixian.php?id={$row['id']}'></a></li>";}
					elseif ($i==7){$str.="<li class='zmr_navboximg17'><a href='list_lianxi.php?id={$row['id']}'></a></li>";}					
				}
                echo $str;


				?>
			</ul>
		</div>
	</div>
</div>
		

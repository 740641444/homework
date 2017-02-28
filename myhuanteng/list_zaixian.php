<?php
    include "header.php";	
?>

<link rel="stylesheet" href="css/mycss/pingpai.css" />
<link rel="stylesheet" href="css/mycss/chanpin.css" />
<link rel="stylesheet" href="css/mycss/pingpai.css" />
<link rel="stylesheet" href="css/mycss/zaixian.css" />


<div class="zmr_img">
	<div class="zmr_imgbanner"></div>
</div>

<div class="zmr_floor">
	<div class="zmr_floorbox">
		<div class="zmr_floorboxleft">
			<ul>
				<?php
				$id=$_GET["id"];
				$sql="select * from shows where pid=".$id;
				$result=$db->query($sql);
				$str="";
				while($row=$result->fetch_assoc()){
					$title=$row["title"];
					$text=$row["text"];
					$imgurl=$row["imgurl"];
					$str.="<li><a href='list_zaixian.php?id={$id}'>{$row['title']}</a></li>";
				}	
				echo $str;
							
				?>
			</ul>
		</div>
		<div class="zmr_floorboxright">
			<div class="zmr_floorboxrighttop">
				<div class="zmr_floorboxrighttopleft"><span><?php echo $title ?></span>MESSAGE</div>
				<div class="zmr_floorboxrighttopright"><a href="index.php">首页</a><span>&gt;</span><?php echo $title ?></div>
			</div>
			<div class="zmr_floorboxrightbox">
				<form action="" class="zmr_zaixian">
					<ul>
						<li>留言标题</li><li><input type="text" name="" id="" value="" /></li>
					</ul>
					<ul>
						<li>您的姓名</li><li><input type="text" name="" id="" value="" /></li>
					</ul>
					<ul>						
						<li>电子邮件</li><li><input type="text" name="" id="" value="" /></li>
					</ul>
					<ul>						
						<li>联系方式</li><li><input type="text" name="" id="" value="" /></li>
					</ul>
					<ul>						
						<li>留言内容</li><li><input type="textarea" name="" id="yu" value="" /></li>
					</ul>
					<div id="tijiao"><a href="#"></a></div>
				</form>
			</div>		
		</div>
	</div>
</div>

<?php
    include "footer.php";	
?>
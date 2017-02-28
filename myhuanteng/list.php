<?php
    include "header.php";	
?>

<link rel="stylesheet" href="css/mycss/pingpai.css" />
<link rel="stylesheet" href="css/mycss/chanpin.css" />



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
					$str.="<li><a href='list.php?id={$id}'>{$row['title']}</a></li>";
				}	
				echo $str;
							
				?>
			</ul>
		</div>
		<div class="zmr_floorboxright">
			<div class="zmr_floorboxrighttop">
				<div class="zmr_floorboxrighttopleft"><span><?php echo $title ?></span>ABOUT</div>
				<div class="zmr_floorboxrighttopright"><a href="index.php">首页</a><span>&gt;</span><?php echo $title ?></div>
			</div>
			<div class="zmr_floorboxrightbox">
			    <?php echo $text ?>
			</div>			
	
<script>
	
$(".zmr_floorboxrightbottom a:first-child").remove()
$(".zmr_floorboxrightbottom a").addClass("zmr_floorboxrightbottom_a")
	
</script>
		</div>
	</div>
</div>

<?php
    include "footer.php";	
?>
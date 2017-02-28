<?php
  include "header.php";	
?>
<link rel="stylesheet" href="css/mycss/pingpai.css" />
<link rel="stylesheet" href="css/mycss/xinwen.css" />



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
					$str.="<li><a href='list_xinwen.php?id={$id}'>{$row['title']}</a></li>";
				}	
				echo $str;
							
				?>
			</ul>
		</div>
		<div class="zmr_floorboxright">
			<div class="zmr_floorboxrighttop">
				<div class="zmr_floorboxrighttopleft"><span><?php echo $title ?></span>NEWS</div>
				<div class="zmr_floorboxrighttopright"><a href="index.php">首页</a><span>&gt;</span><?php echo $title ?></div>
			</div>
			<div class="zmr_floorboxrightbox">
				<ul>
					
				<?php
				$sql="select * from shows where pid='20'";
				$result=$db->query($sql);
				$str1="";
				while($row=$result->fetch_assoc()){
					$str1.="<li><a href='show_xinwen.php?id={$row['id']}'>{$row['title']}</a><span>[2017-01-22]</span></li><br />	";
				}	
				echo $str1;
							
				?>	
									
				
				</ul>
			</div>
		</div>
	</div>
</div>

<?php
  include "footer.php";	
?>
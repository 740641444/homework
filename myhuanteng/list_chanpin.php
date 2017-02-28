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
					$str.="<li><a href='list_chanpin.php?id={$id}'>{$row['title']}</a></li>";
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
				<?php
				$sql="select * from shows where pid='19'";
				$result=$db->query($sql);
				$str1="";
				while($row=$result->fetch_assoc()){
					$str1.="<ul><li><a href='show_chanpin.php?id={$row['id']}'><img src='{$row['imgurl']}'/></a></li> <li><a href='show_chanpin.php?id={$row['id']}'>{$row['title']}</a></li></ul>";
				}	
				echo $str1;
							
				?>				

			</div>
		</div>
	</div>
</div>

<?php
  include "footer.php";	
?>
<?php
  include "header.php";	
?>

<link rel="stylesheet" href="css/mycss/pingpai.css" />
<link rel="stylesheet" href="css/mycss/xinwen.css" />
<script type="text/javascript" src="js/myjs/pingpai.js"></script>
<div class="zmr_img">
	<div class="zmr_imgbanner"></div>
</div>

<div class="zmr_floor">
	<div class="zmr_floorbox">
		<div class="zmr_floorboxleft">
			<ul>
				<?php
				
				$sql="select * from shows where pid=4";
				$result=$db->query($sql);
				$str="";
				while($row=$result->fetch_assoc()){
					$title=$row["title"];
					$text=$row["text"];
					$imgurl=$row["imgurl"];
					$date=$row["date"];
					$str.="<li><a href='list_chanpin.php?id=4'>{$row['title']}</a></li>";
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
				$id=$_GET["id"];
				$sql1="select * from shows where id=".$id;
				$result1=$db->query($sql1);
				while($row1=$result1->fetch_assoc()){
					$title1=$row1["title"];
					$text1=$row1["text"];
					$date1=$row1["date"];
					$imgurl1=$row1["imgurl"];
				}	

							
				?>
				<div class="zmr_floorboxrightboxtop">
				
					<ul><?php echo $title1 ?></ul>
					<ul>浏览次数：23 日期：<?php echo $date1 ?></ul>
					
				</div>
				<div class="zmr_floorboxrightneirong">
					<img src="<?php echo $imgurl1 ?>"/>
                     
				</div>

			</div>
		</div>
	</div>
</div>

<?php
  include "footer.php";	
?>
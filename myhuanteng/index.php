<?php
    include "header.php";	
?>

<link rel="stylesheet" href="css/mycss/index.css" />
<script type="text/javascript" src="js/myjs/index.js"></script>
<div class="zmr_banner">
	<div class="zmr_bannerbox">
		<ul>
			<?php
			$sql="select * from shows where pid=11";
			$result=$db->query($sql);
			$str="";
			$i=0;
			while($row=$result->fetch_assoc()){
				$i++;
				if($i==1){$str.="<li class='zmr_bannerboxxian'><img src='{$row['imgurl']}'/></li>";}
				else{$str.="<li><img src='{$row['imgurl']}'/></li>";}
			}	
			echo $str;
						
			?>
		</ul>
		<div class="zmr_bannerbottom">
			<ul>
				<li class="zmr_bannerbottomxian"></li>
				<li></li>
				<li></li>
			</ul>
		</div>
	</div>
</div>

<div class="zmr_floor">
	<div class="zmr_floorbox">
		<ul>
			<?php
			$str1="";
			$str1.="<li class='zmr_floor01'><a href='list.php?id=2'></a></li>";
			$str1.="<li class='zmr_floor02'><a href='list.php?id=4'></a></li>";
			$str1.="<li class='zmr_floor03'><a href='list.php?id=7'></a></li>";
			echo $str1;
			?>
	
		</ul>
	</div>
</div>

<?php
    include "footer.php";	
?>
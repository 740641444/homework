<?php
  include "header.php";	
?>
<link rel="stylesheet" href="css/mycss/pingpai.css" />
<link rel="stylesheet" href="css/mycss/lianxi.css" />



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
					$str.="<li><a href='list_lianxi.php?id={$id}'>{$row['title']}</a></li>";
				}	
				echo $str;
							
				?>
			</ul>
		</div>
		<div class="zmr_floorboxright">
			<div class="zmr_floorboxrighttop">
				<div class="zmr_floorboxrighttopleft"><span><?php echo $title ?></span>CONTENT</div>
				<div class="zmr_floorboxrighttopright"><a href="index.php">首页</a><span>&gt;</span><?php echo $title ?></div>
			</div>
			<div class="zmr_lianxi">

				<ul>
				    <li>广州欢腾鞋业有限公司</li>
				    <li>地址：广州市白云区德康路10-12号B座801房</li>
				    <li>联系人：马总</li>
				    <li>联系电话：18734563166  400-6505-778</li>
            <iframe src="http://searchbox.mapbar.com/publish/template/template1010/index.jsp?CID=lihuanli&tid=tid1010&showSearchDiv=1&cityName=%E5%B9%BF%E5%B7%9E%E5%B8%82&nid=MAPBQNHBXMCAZIYBXNHWX&width=700&height=400&infopoi=2&zoom=10&control=1" width="700px" height="400px"></iframe>
				    <li></li>
				    <li>山西欢腾贸易有限公司</li>
				    <li>地址：太原市杏花岭区五龙口街199号汇大国际</li>
				    <li>联系人：马总</li>
				    <li>联系电话：18734563166  2727866   2727877</li>
				    <li>传真：4387220</li>
				    <iframe src="http://searchbox.mapbar.com/publish/template/template1010/index.jsp?CID=lihuanli&tid=tid1010&showSearchDiv=1&cityName=%E5%A4%AA%E5%8E%9F%E5%B8%82&nid=MAPBXNJBLMTPYVXRHBX&width=700&height=400&infopoi=2&zoom=10&control=1" width="700px" height="400px"></iframe>

				</ul>

			</div>
		</div>
	</div>
</div>

<?php
  include "footer.php";	
?>
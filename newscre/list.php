<?php

include "header.php";

?>

<style>
	
.zmr_floor{
	width: 1200px;
	margin: 0 auto;
}
	

.zmr_floor>ul>li>a{
	display: block;
	width: 1180px;height: 50px;
	line-height: 50px;
	margin: 0 auto;
	text-decoration: none;
}
.zmr_floor>ul>li>a:hover{
	color:red;
}

.date{
	float: right;
}

</style>

<div class="zmr_floor">
	<h2><?php $pid=$_GET["pid"];
		    $sql="select * from category";
		    $result=$db->query($sql);
		    while($row=$result->fetch_assoc()){
		    	if($row["id"]==$pid){
		    		echo $row["cname"];
		    		break;
		    	}
		    }
		 ?></h2>
	<ul>
    	<?php $sql2="select * from shows where pid=".$row["id"];
    	    $result2=$db->query($sql2);	
    	    while($row2=$result2->fetch_assoc()){
    	    	?><li><a href="show.php?pid=<?php echo $row2['id'] ?>"><?php echo $row2["title"]?><div class="date"><?php echo $row2["date"]?></div></a></li><?php
    	    }
    	?>
	</ul>
</div>
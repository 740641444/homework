<?php

include "header.php";

?>

<style>
	
.zmr_floor{
	width: 1200px;
	margin: 0 auto;
}
	

.text{
	width: 1180px;
	line-height: 20px;
	margin: 0 auto;
}




</style>

<div class="zmr_floor">
	<h2><?php $pid=$_GET["pid"];
		    $sql="select * from shows";
		    $result=$db->query($sql);
		    while($row=$result->fetch_assoc()){
		    	if($row["id"]==$pid){
		    		echo $row["title"];
		    		break;
		    	}
		    }
		 ?></h2>
	<div class="text"><?php echo $row["text"]?></div>
</div>
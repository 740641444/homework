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
	width: 200px;height: 200px;
	float: left;
	line-height: 200px;
	text-align: center;
	border: 1px solid #000;
	margin: 0 10px;
	text-decoration: none;
}
.zmr_floor>ul>li>a:hover{
	color:red;
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
    	<?php $sql2="select * from category where pid=".$row["id"];
    	    $result2=$db->query($sql2);	
    	    while($row2=$result2->fetch_assoc()){
    	    	?><li><a href="list.php?pid=<?php echo $row2['id'] ?>"><?php echo $row2["cname"]?></a></li><?php
    	    }
    	?>
	</ul>
</div>
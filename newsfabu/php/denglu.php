<?php
include "db.php";
$name=$_GET["name"];
$mima=$_GET["mima"];
$sql="select * from people where name='$name' and mima='$mima'";
$result=$db->query($sql);
while($row=$result->fetch_assoc()){
	if($row){
		echo "1";
	}
}

?>
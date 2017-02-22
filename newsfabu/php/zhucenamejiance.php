<?php
include "db.php";
$name=$_GET["name"];
$sql="select * from people where name='$name'";
$result=$db->query($sql);
while($row=$result->fetch_assoc()){
	if($row){
		echo "1";
	}
}

?>
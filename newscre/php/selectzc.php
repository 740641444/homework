<?php
include "db.php";
$name=$_POST["name"];
$sql="select * from user where name='$name'";
$db->query($sql);
if($db->affected_rows){
	echo "1";
}
?>
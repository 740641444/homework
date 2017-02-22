<?php
include "db.php";
$id=$_GET["id"];
$sql="delete from news where id='$id'";
$result=$db->query($sql);
if($result>0){
	echo "1";
}
?>
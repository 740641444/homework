<?php
include "db.php";
$id=$_GET["id"];
$result=$db->query("delete from stu where id=$id");
if($result==1){
	echo $id;
}
?>